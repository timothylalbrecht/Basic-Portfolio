<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $taQuestion = $_POST['taQuestion'];
    $message = $_POST['message'];

    $mailTo = "TLABootcamp@protonmail.com";
    $headers = "From: ".$name;
    $text = "You have received a message from ".$name. ".\n\n". $message;

    mail($mailTo, $taQuestion, $text, $headers);
    header("Location: index.php?mailsend");
}