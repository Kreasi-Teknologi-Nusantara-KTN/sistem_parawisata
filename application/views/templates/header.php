<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?php echo base_url(
                                        '/assets/css/style.css'
                                    ); ?>">

</head>

<body>
    <div class="container">
        <header>
            <a href="home.html" class="logo">HOLI<span>YAY</span></a>

            <div id="menu" class="fas fa-bars"></div>

            <nav class="navbar">
                <a href="<?= base_url() ?>">home</a>
                <a href="<?= base_url() ?>destination">destination</a>
                <a href="<?= base_url() ?>Login">login</a>
            </nav>
        </header>