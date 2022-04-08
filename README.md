# Annotation formats and tools

Notes on annotation formats, mostly for biomedical literature.

## Formats

Below shows three different formats for PMID:20085714 (taken from https://www.ncbi.nlm.nih.gov/CBBresearch/Lu/Demo/tmTools/Format.html).


### Tool-specific input format 1 (PubTator):
```
20085714|t|Autosomal-dominant striatal degeneration is caused by a mutation in the phosphodiesterase 8B gene.
20085714|a|Autosomal-dominant striatal degeneration (ADSD) is an autosomal-dominant movement disorder affecting the striatal part of the basal ganglia. ADSD is characterized by bradykinesia, dysarthria, and muscle rigidity. These symptoms resemble idiopathic Parkinson disease, but tremor is not present. Using genetic linkage analysis, we have mapped the causative genetic defect to a 3.25 megabase candidate region on chromosome 5q13.3-q14.1. A maximum LOD score of 4.1 (Theta = 0) was obtained at marker D5S1962. Here we show that ADSD is caused by a complex frameshift mutation (c.94G>C+c.95delT) in the phosphodiesterase 8B (PDE8B) gene, which results in a loss of enzymatic phosphodiesterase activity. We found that PDE8B is highly expressed in the brain, especially in the putamen, which is affected by ADSD. PDE8B degrades cyclic AMP, a second messenger implied in dopamine signaling. Dopamine is one of the main neurotransmitters involved in movement control and is deficient in Parkinson disease. We believe that the functional analysis of PDE8B will help to further elucidate the pathomechanism of ADSD as well as contribute to a better understanding of movement disorders.
```

### Tool-specific output format 1 (PubTator):
```
20085714|t|Autosomal-dominant striatal degeneration is caused by a mutation in the phosphodiesterase 8B gene.
20085714|a|Autosomal-dominant striatal degeneration is caused by a mutation in the phosphodiesterase 8B gene. Autosomal-dominant striatal degeneration (ADSD) is an autosomal-dominant movement disorder affecting the striatal part of the basal ganglia. ADSD is characterized by bradykinesia, dysarthria, and muscle rigidity. These symptoms resemble idiopathic Parkinson disease, but tremor is not present. Using genetic linkage analysis, we have mapped the causative genetic defect to a 3.25 megabase candidate region on chromosome 5q13.3-q14.1. A maximum LOD score of 4.1 (Theta = 0) was obtained at marker D5S1962. Here we show that ADSD is caused by a complex frameshift mutation (c.94G>C+c.95delT) in the phosphodiesterase 8B (PDE8B) gene, which results in a loss of enzymatic phosphodiesterase activity. We found that PDE8B is highly expressed in the brain, especially in the putamen, which is affected by ADSD. PDE8B degrades cyclic AMP, a second messenger implied in dopamine signaling. Dopamine is one of the main neurotransmitters involved in movement control and is deficient in Parkinson disease. We believe that the functional analysis of PDE8B will help to further elucidate the pathomechanism of ADSD as well as contribute to a better understanding of movement disorders.
20085714	72	92	phosphodiesterase 8B	Gene	8622
20085714	99	139	Autosomal-dominant striatal degeneration	Disease	609161
20085714	671	678	c.94G>C	Mutation	c|SUB|G|94|C
20085714	679	687	c.95delT	Mutation	c|DEL|95|T
20085714	696	716	phosphodiesterase 8B	Gene	8622
20085714	981	989	Dopamine	Chemical	D004298
...
```

### Tool-specific input format 1 (JSON):
```
{
	"text":"Autosomal-dominant striatal degeneration is caused by a mutation in the phosphodiesterase 8B gene. Autosomal-dominant striatal degeneration (ADSD) is an autosomal-dominant movement disorder affecting the striatal part of the basal ganglia. ADSD is characterized by bradykinesia, dysarthria, and muscle rigidity. These symptoms resemble idiopathic Parkinson disease, but tremor is not present. Using genetic linkage analysis, we have mapped the causative genetic defect to a 3.25 megabase candidate region on chromosome 5q13.3-q14.1. A maximum LOD score of 4.1 (Theta = 0) was obtained at marker D5S1962. Here we show that ADSD is caused by a complex frameshift mutation (c.94G>C+c.95delT) in the phosphodiesterase 8B (PDE8B) gene, which results in a loss of enzymatic phosphodiesterase activity. We found that PDE8B is highly expressed in the brain, especially in the putamen, which is affected by ADSD. PDE8B degrades cyclic AMP, a second messenger implied in dopamine signaling. Dopamine is one of the main neurotransmitters involved in movement control and is deficient in Parkinson disease. We believe that the functional analysis of PDE8B will help to further elucidate the pathomechanism of ADSD as well as contribute to a better understanding of movement disorders.",
	"sourcedb": "PubMed",
	"sourceid": "20085714"
}
```

### Tool-specific output format 1 (JSON, refer to <a href='http://pubannotation.org/' target='t'>PubAnnotation</a>):
```
{
	"text":"Autosomal-dominant striatal degeneration is caused by a mutation in the phosphodiesterase 8B gene. Autosomal-dominant striatal degeneration (ADSD) is an autosomal-dominant movement disorder affecting the striatal part of the basal ganglia. ADSD is characterized by bradykinesia, dysarthria, and muscle rigidity. These symptoms resemble idiopathic Parkinson disease, but tremor is not present. Using genetic linkage analysis, we have mapped the causative genetic defect to a 3.25 megabase candidate region on chromosome 5q13.3-q14.1. A maximum LOD score of 4.1 (Theta = 0) was obtained at marker D5S1962. Here we show that ADSD is caused by a complex frameshift mutation (c.94G>C+c.95delT) in the phosphodiesterase 8B (PDE8B) gene, which results in a loss of enzymatic phosphodiesterase activity. We found that PDE8B is highly expressed in the brain, especially in the putamen, which is affected by ADSD. PDE8B degrades cyclic AMP, a second messenger implied in dopamine signaling. Dopamine is one of the main neurotransmitters involved in movement control and is deficient in Parkinson disease. We believe that the functional analysis of PDE8B will help to further elucidate the pathomechanism of ADSD as well as contribute to a better understanding of movement disorders.",
	"sourcedb": "PubMed",
	"sourceid": "20085714",
	"denotations":[
		{"obj":"Gene:8622","span":{"begin":72,"end":92}},
		{"obj":"Disease:609161","span":{"begin":99,"end":139}},
		{"obj":"Mutation:c|SUB|G|94|C","span":{"begin":671,"end":678}},
		{"obj":"Mutation:c|DEL|95|T","span":{"begin":679,"end":687}},
		{"obj":"Gene:8622","span":{"begin":696,"end":716}},
		{"obj":"Chemical:D004298","span":{"begin":981,"end":989}}
	]
}
```

### BioC input format:
```
<collection>
	<source>Example</source>
	<date>1999-Jan-1</date>
	<key>PubTator.key</key>
	<document>
		<id>20085714</id>
		<passage>
			<infon key="type">title</infon>
			<offset>0</offset>
			<text>
			Autosomal-dominant striatal degeneration is caused by a mutation in the phosphodiesterase 8B gene.
			</text>
		</passage>
		<passage>
			<infon key="type">abstract</infon>
			<offset>98</offset>
			<text>
			Autosomal-dominant striatal degeneration (ADSD) is an autosomal-dominant movement disorder affecting the striatal part of the basal ganglia. ADSD is characterized by bradykinesia, dysarthria, and muscle rigidity. These symptoms resemble idiopathic Parkinson disease, but tremor is not present. Using genetic linkage analysis, we have mapped the causative genetic defect to a 3.25 megabase candidate region on chromosome 5q13.3-q14.1. A maximum LOD score of 4.1 (Theta = 0) was obtained at marker D5S1962. Here we show that ADSD is caused by a complex frameshift mutation (c.94G>C+c.95delT) in the phosphodiesterase 8B (PDE8B) gene, which results in a loss of enzymatic phosphodiesterase activity. We found that PDE8B is highly expressed in the brain, especially in the putamen, which is affected by ADSD. PDE8B degrades cyclic AMP, a second messenger implied in dopamine signaling. Dopamine is one of the main neurotransmitters involved in movement control and is deficient in Parkinson disease. We believe that the functional analysis of PDE8B will help to further elucidate the pathomechanism of ADSD as well as contribute to a better understanding of movement disorders.
			</text>
		</passage>
	</document>
</collection>
```

### BioC output format:
```
<collection>
	<source>Example</source>
	<date>1999-Jan-1</date>
	<key>PubTator.key</key>
	<document>
		<id>20085714</id>
		<passage>
			<infon key="type">title</infon>
			<offset>0</offset>
			<text>
			Autosomal-dominant striatal degeneration is caused by a mutation in the phosphodiesterase 8B gene.
			</text>
			<annotation>
				<infon key="type">Gene</infon>
				<offset>72</offset>
				<length>20</length>
				<text>phosphodiesterase 8B</text>
				<id>8622</id>
			</annotation>
		</passage>
		<passage>
			<infon key="type">abstract</infon>
			<offset>98</offset>
			<text>
			Autosomal-dominant striatal degeneration (ADSD) is an autosomal-dominant movement disorder affecting the striatal part of the basal ganglia. ADSD is characterized by bradykinesia, dysarthria, and muscle rigidity. These symptoms resemble idiopathic Parkinson disease, but tremor is not present. Using genetic linkage analysis, we have mapped the causative genetic defect to a 3.25 megabase candidate region on chromosome 5q13.3-q14.1. A maximum LOD score of 4.1 (Theta = 0) was obtained at marker D5S1962. Here we show that ADSD is caused by a complex frameshift mutation (c.94G>C+c.95delT) in the phosphodiesterase 8B (PDE8B) gene, which results in a loss of enzymatic phosphodiesterase activity. We found that PDE8B is highly expressed in the brain, especially in the putamen, which is affected by ADSD. PDE8B degrades cyclic AMP, a second messenger implied in dopamine signaling. Dopamine is one of the main neurotransmitters involved in movement control and is deficient in Parkinson disease. We believe that the functional analysis of PDE8B will help to further elucidate the pathomechanism of ADSD as well as contribute to a better understanding of movement disorders.
			</text>
			<annotation>
				<infon key="type">Disease</infon>
				<offset>99</offset>
				<length>41</length>
				<text>Autosomal-dominant striatal degeneration</text>
				<id>609161</id>
			</annotation>
			<annotation>
				<infon key="type">Disease</infon>
				<offset>141</offset>
				<length>4</length>
				<text>ADSD</text>
				<id>609161</id>
			</annotation>
			...
		</passage>
	</document>
</collection>
```


## PubTator

[PubTator](https://www.ncbi.nlm.nih.gov/research/pubtator/) for example [PMC6982432](https://www.ncbi.nlm.nih.gov/research/pubtator/?view=docsum&query=PMC6982432)

![pubtator](https://github.com/rdmpage/annotation-formats/raw/main/pubtator.png)
