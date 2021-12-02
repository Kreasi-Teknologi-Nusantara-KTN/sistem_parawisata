<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css');?>">

</head>
<body>
<div class="container">
<header>
    <a href="home.html" class="logo">HOLI<span>YAY</span></a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="<?= base_url()?>">home</a>
        <a href="<?= base_url()?>destination">destination</a>
        <a href="<?= base_url()?>login">login</a>
    </nav>
</header>
