<?php
if($_POST["message"]) {
    mail("kellydogtrainer@gmail.com", "Form to email message", $_POST["message"], "From: ["email"]");
}
?>