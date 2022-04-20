<?php
require 'CheckAhpra.php';

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
$pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_SPECIAL_CHARS);

sleep(1);
//var_dump($action,$pass);

if ($action == 'send-login'){
    if (empty($pass)){
        $result = array('Login', false, 'alert-warning', 'Please type your password.');
        echo json_encode($result);
        return;
    }

    $ahpraObj = new CheckAhpra();
//    var_dump($ahpraObj->checkAhpraNumber($pass));

    if ($ahpraObj->checkAhpraNumber($pass)){
        $result = array('Login', true, 'alert-success', 'Thank you. Your AHPRA number has been approved.');
        echo json_encode($result);
        return;
    }else{
        $result = array('Login', false, 'alert-warning', 'Sorry, we could not find this AHPRA number.');
        echo json_encode($result);
        return;
    }
}

$result = array('Login', false, 'alert-danger', 'Something wrong, please refresh your page and try again.');
echo json_encode($result);
return;