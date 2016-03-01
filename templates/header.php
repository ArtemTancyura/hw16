<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> hw16 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Geo:400,400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/flexslider.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<div class="wrapper">
    <header class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <form class="navbar-form navbar-left" role="search">
                <input type="search" name="search" placeholder="Поиск">
                <a href="#" class="search"><i class="fa fa-search"></i></a>

            </form>


            <?php
            include('massives.php');
            echo '<ul class="nav navbar-nav">';
            foreach ($nav as $parent) {
                echo "<li><a href=".$parent['url'].">".$parent['title']."</a>";
                echo '</li>';
            }
            echo '</ul>';
            ?>
        </div>
    </header>
