<?php
$usuarios = [
	1 => [
		"email" => "teste@gmail.com",
		"senha" => "1234",
	]
	2 => [
		"email" => "eliaberibeiro06@gmail.com",
		"senha" => "1234",
	]
];

if(!$_SESSION['usuarios']){
	$_SESSION['usuarios'] = $usuarios;
}
