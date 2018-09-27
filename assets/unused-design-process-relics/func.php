<?php
require_once("lib/TemplateEngine.php");

function getPage($url, $errorMsg){
	if (!file_exists($url) || !is_readable($url)) {
		return $errorMsg;
	}
	return new Template($url);
}

function getContact($pgName){
	$errorMsg  = "Contact page template not found!";
	$contactPg = getPage("assets/tmp/contact.html", $errorMsg);
	
	if ($contactPg !== $errorMsg){
		//$contactPg->set("content", "tester");
		return $contactPg->output();
	}
	return $errorMsg;
}

$pgName = (isset($_POST["pgName"])) ? $_POST["pgName"] : "";
switch($pgName){
	case "contact":
	echo getContact($pgName);
	break;
	
	default:
	break;
}

?>