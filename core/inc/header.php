<?php
  if (file_exists('theme/header.php')): ?>
  <?php require_once('theme/header.php'); ?> 
  <?php else: ?>
<!DOCTYPE html>
<html lang="da">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Infoskærm for Symbion">

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/favicon/manifest.json">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml">
    <meta name="theme-color" content="#1f647e">

    <title><?php the_title(); ?></title>

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700|Oswald:400,700' rel='stylesheet' type='text/css'>    
    <!-- FontAwesome icon font -->
    <link rel="stylesheet" href="core/inc/font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap 4 + custom css -->
    <link href="core/css/style.min.css" rel="stylesheet" type='text/css'>
  </head>

  <body>
  <div class="container">
<?php endif; ?>