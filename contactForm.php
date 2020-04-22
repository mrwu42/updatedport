<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $message = $_POST['message'];

    $mailto = "mrwu42@gmail.com"
    $headers = "From: " .$mailfrom;
    $txt = "You have a new e-mail from ".$name.".\n\n".$message;
    mail($mailto, $txt, $headers);
    header("Location: index.php?mailsend");
}