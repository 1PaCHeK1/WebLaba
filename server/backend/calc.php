<?php
$text = $_POST['InputValue'];
$response = [];

try {
    $result = !eval("return $text;") ? 0 : eval("return $text;");
    
    $response = [
        "status" => true,
        "result" => "$result"
    ];
}
catch (Exception $e) {
    print($e);
    $response = [
        "status" => false,
        "result" => "$result"
    ];
}

echo json_encode($response);
?>