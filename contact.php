<?php

/*So I jumped into this php stuff without doing my homework. im only rocking a static page right now, so php
ain't gonna do much. A google search later, and formspree to the rescue. I set up a dummy mail account
U:TLABootcamp@protonmail.com
P:bootcamp
I plan on using the above account solely for bootcamp dummy work, so feel free and verify your message goes
through, or ask my for a super secret authentication ;)*/

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