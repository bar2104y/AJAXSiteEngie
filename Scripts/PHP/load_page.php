<?php

	$page = $_POST['page'];

	//routes
	switch($page)
	{
		case "#!faq":
			$file = "faq";
			break;
		case "#!contacts":
			$file = "contacts";
			break;
		default:
			$file = "main";
			break;
	}





$path = "/Pages/Main/".$file.".php";

include $_SERVER["DOCUMENT_ROOT"].$path;

?>