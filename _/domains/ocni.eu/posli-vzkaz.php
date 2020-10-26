<?php
require_once 'admin/inc/Database.php';
$myPost = filter_input_array(INPUT_POST);

$jmeno = $_POST['jmeno'];
$spam = $_POST['spam'];
$email = $_POST['email'];
$text = $_POST['text'];
$predmet = "Nový vzkaz z webu Oční.eu";
$message = "
Dobrý den, máte novou zprávu ze stránek Oční.eu!

Odesílatel: $jmeno
E-mail: $email

$text
";

if ($jmeno!="" and $email!="" and $spam=="deset")
{
Mail("frydlant@ocni.eu", $predmet, $message, "From: " . $email);
$database->vzkazy->insert($myPost);
header('Location: odeslano');
exit;
}
else
{
header('Location: neodeslano');
exit;
}
exit;
?>