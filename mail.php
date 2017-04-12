<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

strip_tags($_GET);
stripcslashes($_GET);

$email = $_GET['email'];
$title = $_GET['title'];
$body  = $_GET['body'];

if(count($_GET) == 3) {
    mail( $email, $title, $body );
} else {
    echo 'E-mail nie wysłany';
}