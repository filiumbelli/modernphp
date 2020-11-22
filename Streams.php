<?php

$requestBody = '{"username":"serhat"}';
$context = stream_context_create(array(
    "http" => array(
        'method' => "POST",
        "header" => "Content-Type: application/json;charset=utf-8;\r\n" . "Content-Length: " . mb_strlen($requestBody),
        "content" => $requestBody
    )
));
$response = file_get_contents("https://www.google.com/users",false,$context);

// POST request by using stream context object


//Filter

$handle = fopen("data.txt","rb");
stream_filter_append($handle,"string.toupper");
while(feof($handle)!== true){
    echo fgets($handle);
}
fclose($handle);
//   php://filter

$handle2 = fopen("php://filter/read=string.toupper/resource=data.txt","rb");
while(feof($handle) !==true){
    echo fgets($handle);
}
fclose($handle);

// General structure filter/read=filter_name/resource=scheme-filename://target


