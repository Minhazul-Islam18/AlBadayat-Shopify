<?php

$_API_KEY = '4d52d461258d2cbc42508d2dfaca1f0b';
$_NGROK_URL = 'https://e46b-103-203-95-212.ngrok-free.app';

$redirect_uri = $_NGROK_URL . '/AlBadayat/token.php';
$shop = $_GET['shop'];
$nonce = bin2hex(random_bytes(12));
$access_mode = 'per-user';
// $scopes = 'read_products,write_products,read_orders,write_orders';
$scopes = '';
// echo $shop;

$oauth_url =  'https://' . $shop . '/admin/oauth/authorize?client_id=' . $_API_KEY . '&scope=' . $scopes . '&redirect_uri=' . $redirect_uri . '&state=' . $nonce . '$grant_options[]=' . $access_mode;

header("Location: " . $oauth_url);

exit();
