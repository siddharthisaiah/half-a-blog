<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Another blog app</title>
    <style type="text/css">
    	.main-menu-link {
    		display: inline;
    	}

    	a:hover {
    		text-decoration: none;
    	}

        #cn-joke {
            font-family: "Courier new";
            font-size: 40px;
            font-weight: bold;
            border: 2px solid red;
            border-radius: 5px;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="#" class="navbar-brand">L</a>
                <div class="navbar-nav">
                    <a href="<?php echo base_url(); ?>index.php/blog" class="nav-item nav-link">Home</a>
                    <a href="<?php echo base_url(); ?>index.php/blog/articles" class="nav-item nav-link">View Articles</a>
                    <a href="<?php echo base_url(); ?>index.php/blog/newarticle" class="nav-item nav-link">New Article</a>
                </div>
            </nav>
        </header>