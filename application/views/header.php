
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $judul; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url() ?>assets/css/style.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <div id="wrapper">
        <header>
            <hgroup>
                <h1><?php echo $judul; ?></h1>
                <h2>Sinau CRUD dengan CodeIgniter</h2>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url().'web'?>">Home</a></li>
                    <li><a href="<?php echo base_url().'web/store'?>">Lihat Data</a></li>
                    <li><a href="<?php echo base_url().'web/input' ?>">Entry Data</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
