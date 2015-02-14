<?php
	print ("<hr>");
	print ("Request:");	
  	print_r ($_REQUEST);
  	
	print ("<hr>");
	print ("Post:");	
  	print_r ($_POST);

  	$arr=array("blah1","blah2","blah3");
	$fp=fopen("/tmp/postresponse.txt","w+");
	foreach($_POST as $key => $value){
		fwrite($fp,$key."=".$value."\t");
	}

	$fp=fopen("/tmp/requestresponse.txt","w+");
	foreach($_REQUEST as $key => $value){
		fwrite($fp,$key."=".$value."\t");
	}  
  
  	$request_body = file_get_contents('php://input');
	$fp=fopen("/tmp/requestpayload.txt","w+");
	fwrite($fp, $request_body);
	
  	
?>