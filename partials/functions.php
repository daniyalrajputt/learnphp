<?php
function encrypt_password($pass){
   return sha1(md5($pass."salt"));
}

function auth(){
    isset($_SESSION['user_id']) ? true : header('Location: login.php');
}