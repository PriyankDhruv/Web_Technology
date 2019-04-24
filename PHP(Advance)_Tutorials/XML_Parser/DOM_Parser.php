<?php
	
	$Xml_Docx = new DOMDocument();
	$Xml_Docx -> load("Niti.xml");

	print $Xml_Docx -> saveXML();
	
?>