<?php

	$Xml_Docx = new DOMDocument();
	$Xml_Docx -> load("Niti.xml");

	$x = $Xml_Docx -> documentElement;
	
	foreach ($x->childNodes AS $item) 
	{
		print $item -> nodeName . " = " . $item -> nodeValue . "<br>";
	}
	
?>