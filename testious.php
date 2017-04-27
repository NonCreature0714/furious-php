<?php

function test_data($forUnSafeChars) {
    $forUnSafeChars = trim($forUnSafeChars);
    $forUnSafeChars = stripslashes($forUnSafeChars);
    $forUnSafeChars = htmlspecialchars($forUnSafeChars);
    return $forUnSafeChars;
}// End of test_data.

function test_url($_u){
    $_u = test_data($_u);
    $_u = filter_var($_u, FILTER_SANITIZE_URL);
    if (!filter_var($_u, FILTER_VALIDATE_URL) === false) {
        echo "The url " . $_u . " is valid." . newLine();
    } else {
        echo "The url " . $_u . " is invalid.";
    }
    return $_u;
}

function newLine(){
    return "<br>";
}// End of newLine.

 ?>
