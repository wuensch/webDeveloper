<?php

try {
    //força um código de erro...
    throw new Exception("Error Processing Request", 400);
    
} catch (\Throwable $th) {
    $msg = json_encode(array(
        "message" => $th->getMessage(),
        "line" => $th->getLine(),
        "file" => $th->getFile(),
        "code" => $th->getCode(),
    ));

    echo $msg;
}

?>