<?php

require "loginRequest.php";
require "classException.php";

function validateLogin(LoginRequest $request){
	if(!isset($request->username)){
		throw new ValidationException("Username is null");
	}else if(!isset($request->password)){
		throw new ValidationException("Password is null");
	}else if(trim($request->username) == ""){
		throw new NotEmptyException("Username is empty");
	}else if(trim($request->username) == ""){
		throw new NotEmptyException("Username is empty");
	}
}


$login = new LoginRequest();
$login->username = "";
$login->password = "";

try{
	validateLogin($login);
}catch(ValidationException | NotEmptyException $e){
	echo "Error : {$e->getMessage()}". PHP_EOL;

	echo $e->getTraceAsString() . PHP_EOL;
}finally{
	echo "Program Selesai" . PHP_EOL; 
}
