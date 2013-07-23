<?php
if(isset($_POST['metacaptcha_content']))
{
    include_once "metacaptcha_lib.php"; //path to metacaptcha_lib on your server
    $message = $_POST['metacaptcha_content'];
    $response = _metacaptcha_return_initial_cookie($message);
    echo json_encode($response);
}
