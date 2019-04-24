<?xml version = "1.0" encoding = "UTF-8"?>

<xsl:stylesheet version = "1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">
	<xsl:template match = "/">
		<html>
			<body>
				<h2>Products with Budget of less than Rs. 300</h2>
				<table border = "1" width = "150">
					<tr bgcolor = "#c3c3c3">
						<th>Prouct Name</th>
						<th>Price</th>
					</tr>
					<xsl:for-each select = "products/product">
						<xsl:if test = "price &lt; 300">
							<tr>
								<td align = "center"><xsl:value-of select = "name"/></td>
								<td align = "center"><xsl:value-of select = "price"/></td>
							</tr>
						</xsl:if>
					</xsl:for-each>
				</table>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>