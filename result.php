<?php

$request_method = $_SERVER['REQUEST_METHOD'];

switch($request_method){

    case 'GET':
        if ($_GET['func'] == 'say_hello')
        {
        
            say_hello($_GET['name']);
        
        }
        break;

    case 'GET':
        break;

    case 'PUT':
        break;

    default:
        echo json_encode(array('message'=> 'Ya done messed up aaron.'));
        break;
}

function say_hello($name)
{
    $message = array('message' => "Hello ".$_GET['name']."!");
    echo json_encode($message);
}


?>