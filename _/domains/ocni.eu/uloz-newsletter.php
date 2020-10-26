<?php
require_once 'admin/inc/Database.php';

$myPost = filter_input_array(INPUT_POST);




$database->newsletter->insert($myPost);

Header('Location: info-newsletter');
?>