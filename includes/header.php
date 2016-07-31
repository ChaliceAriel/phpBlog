<?php

   $activePage = basename($_SERVER['PHP_SELF'], ".php");
   $page_title = "Chalice.Tech | " . strtoupper($activePage);

 ?>

<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8" />
    <meta name="ChaliceAriel" content="ChaliceStevensHomepage" />
    <title><?= $page_title?></title>
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- *** CSS styles *** -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/blog.css" rel="stylesheet" type="text/css"/>


    <link rel="stylesheet" type="text/css" href="hexButtons/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="hexButtons/css/hexagons.css"> 
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

  </head>