<?php

$response = '';

if(!empty($_GET['name']) && !empty($_GET['age']) && preg_match('/^\+?\d+$/', $_GET['age'])){
    $name = $_GET['name'];
    $age = $_GET['age'];
    if($age > 20){
        $response = 'Hello, '.$name.', access accepted';
    }else{
        $response = 'Sorry, '.$name.', no entrance until 21';
    }
}else{
    $response = 'Fill in all the fields correctly!';
};

echo json_encode($response, JSON_UNESCAPED_UNICODE);

