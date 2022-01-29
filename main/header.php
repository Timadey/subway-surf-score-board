<?php define('GW_UPLOADPATH', 'images/'); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Subway Surf Wars</title>
  </head>
  <body style = "padding: 50px">
      
    <!--- The whole body container --->
    <div class="container">

<!-- The header infomation about the site -->
<div class = "row">
        <nav class="navbar fixed-top navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="logo.png" 
                alt="logo" width="30" height="30" class="d-inline-block align-text-top">
                Subway Surf Wars </a>
                <!--<span style="display:inline-block; background-color: white; color:blue; padding: 5px; border-radius:5px;"> 
                <a style="padding: 5px;text-decoration:none" href="index.php">Home</a>
                <a style="padding: 5px;text-decoration:none" href="addscore.php">Add-High-Score</a>
                <a style="padding: 5px;text-decoration:none" href="#">Admin-Login</a>
                </span>-->

                <div class="btn-group">
                  <a href="index.php" class="btn btn-primary " aria-current="page">Home</a>
                  <a href="addscore.php" class="btn btn-primary">Add score</a>
                  <a href="#" class="btn btn-primary">Admin login</a>
                </div>
                

                <form class = "d-flex" action="search.php" method = "get">
                    <input  style = "border-radius: 5px 0px 0px 5px; border: none" name = "query_username" type="search" placeholder="Enter Username" aria-label="Search"></input>
                    <button class="btn btn-success" name = "query" color = 'white' type="submit">Search Score</button>
                </form>

                
            </div>
        </nav>
</div>

