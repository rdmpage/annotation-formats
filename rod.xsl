<?xml version="1.0" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <html>
      <head>

      </head>
      <body>
        <xsl:apply-templates select="collection/document"/>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="document">
    <h1>
      <xsl:value-of select="id"/>: <xsl:value-of select="passage[1]/text"/>
    </h1>
    
     <xsl:apply-templates select="passage"/>
  </xsl:template>
  
  <xsl:template match="passage">
	<p>
		[<xsl:value-of select="offset"/>]:
		<xsl:value-of select="text"/>
		
		<!-- annotations -->
		<ul>
		<xsl:apply-templates select="annotation"/>
		</ul>
		
		<!-- <annotation id="44"><infon key="identifier">2099</infon><infon key="type">Gene</infon><infon key="NCBI Homologene">47906</infon><location offset="953" length="4"/><text>ESR1</text></annotation> -->
	</p>
  </xsl:template>

  <xsl:template match="annotation">
	<li>
		<xsl:value-of select="@id"/> :
		<xsl:value-of select="text"/>
		Offset: 
		<xsl:value-of select="location/@offset"/>
		Length: 
		<xsl:value-of select="location/@length"/>
		
		<xsl:apply-templates select="infon"/>
		
	</li>
  </xsl:template>
  
  <xsl:template match="infon">
  (
		<xsl:value-of select="@key"/> :
		<xsl:value-of select="."/>
  )
  </xsl:template>
  
  
  
</xsl:stylesheet>