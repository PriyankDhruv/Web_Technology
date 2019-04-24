<?xml version = "1.0" encoding = "UTF-8"?>

<xsl:stylesheet version = "1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">
	<xsl:template match = "/">
		<html>
			<body>
				<h2>Students Marksheet Info</h2>
				<table border = "1" width = "320">
					<tr bgcolor = "#c3c3c3">
						<th>studname</th>
						<th>enrollno</th>
						<th>spi</th>
						<th>cpi</th>
					</tr>
					<xsl:for-each select = "marksheets/marksheet">
						<xsl:sort select = "spi"/>
						<tr>
							<td align = "center"><xsl:value-of select = "studname"/></td>
							<td align = "center"><xsl:value-of select = "enrollno"/></td>
							<td align = "center"><xsl:value-of select = "spi"/></td>
							<td align = "center"><xsl:value-of select = "cpi"/></td>
						</tr>
					</xsl:for-each>
				</table>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>