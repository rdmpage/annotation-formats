<?php

// Parse a biocjson file and generate simple HTML

$filename = 'PMC6982432.json';

$json = file_get_contents ($filename);

$obj = json_decode($json);


$html = '<html>
<head>
<style>
body {
	padding:1em;
	margin:1em;
	font-family: sans-serif;
	font-size: 1em;
	line-height: 1.8em;
}

h1 {
	font-size: 2em;
	line-height: 2em;
}

.Gene {
	background-color: rgba(128,0,128,0.3);
	color:rgb(128,0,128);
	padding:0.2em;

}

.Disease {
	background-color: rgba(255,165,0,0.3);
	color:rgb(255,165,0);
	padding:0.2em;
}

.Species {
	background-color: rgba(0,0,255,0.3);
	color:rgb(0,0,255);
	padding:0.2em;
}

.Chemical {
	background-color: rgba(165,165,80,0.3);
	color:rgb(165,165,80);
	padding:0.2em;
}

.Mutation {
	background-color: rgba(0,0,0,0.3);
	color:rgb(0,0,0);
	padding:0.2em;
}

.Celline {
	background-color: rgba(165,80,80,0.3);
	color:rgb(165,80,80);
	padding:0.2em;
}

</style>
</head>
<body>';

foreach ($obj->passages as $passage)
{
	// echo $passage->text . "\n";
	
	$open = array();
	$close = array();
	
	foreach ($passage->annotations as $annotation)
	{
		foreach ($annotation->locations as $location)
		{
			$start = $location->offset - $passage->offset;
			$end = $start + $location->length - 1;
			if (!isset($open[$start]))
			{
				$open[$start] = array();
			}
			
			$open[$start][] = $annotation->infons->type;

			if (!isset($close[$end]))
			{
				$close[$end][] = $annotation->infons->type;
			}
		}
	
	}
	
	// print_r($open);
	//print_r($close);
	
	// output
	
	switch ($passage->infons->type)
	{
		case 'front':
			$html .= '<h1>';
			break;

		case 'title_1':
		case 'title':
			$html .= '<h2>';
			break;

		case 'abstract_title_1':
		case 'title_2':
			$html .= '<h3>';
			break;
	
		default:
			$html .= '<p>';
			break;
	}
	
	$content_length = mb_strlen($passage->text);
	
	for ($i = 0; $i < $content_length; $i++)
	{
		$char = mb_substr($passage->text, $i, 1); 
		
		if (isset($open[$i]))
		{
			foreach ($open[$i] as $type)
			{
				switch ($type)
				{
					default:
						$html .= '<span class="' . $type . '">';
						break;
				}
			}		
		}
		
		$html .= $char;
	
		if (isset($close[$i]))
		{
			foreach ($close[$i] as $type)
			{
				switch ($type)
				{
					default:
						$html .= '</span>';
						break;
				}
			}		
		}
	
	}
	
	switch ($passage->infons->type)
	{
		case 'front':
			$html .= '</h1>';
			break;

		case 'title_1':
		case 'title':
			$html .= '</h2>';
			break;

		case 'abstract_title_1':
		case 'title_2':
			$html .= '</h3>';
			break;
	
		default:
			$html .= '</p>';
			break;
	}
	
	
	
	
}

$html .= '</body>';

echo $html;

?>
