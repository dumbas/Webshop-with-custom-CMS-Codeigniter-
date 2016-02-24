<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>New Shop</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?=base_url()?>public/css/style.css" />
        
        
  </head>

  <body>

<div class="container">


	<nav id="navigation" class="navbar navbar-inverse navbar-fixed-top">
	    <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>

			    </button>
			</div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		        <ul class="nav navbar-nav">
			      	<li ><a href="<?=site_url('website/home')?>">Начало</a></li>
			        <li ><a href="<?=site_url('website/catalog')?>">Продукти</a></li>
			        <li ><a href="<?=site_url('website/blog')?>">Новини</a></li>
			        <li ><a href="<?=site_url('website/aboutus')?>">За нас <span class="sr-only">(current)</span></a></li>
			        <li ><a href="<?=site_url('website/contacts')?>">Контакти</a></li>
		        </ul>
		    <form class="navbar-form navbar-right" role="search" action="<?=base_url().'website/home/search';?>" method="post">
		        <div class="form-group">
		            <input type="text" class="form-control" placeholder="Търси в продукти" name="search">
		        </div>
		        <button type="submit" class="btn btn-default" name="submit">Submit</button>
		    </form>
      </div>
	  	</div><!-- /.container-fluid -->
	</nav>


  <div class="container" id = "header">
      <div id="logo"><img src="<?= base_url();?>public/img/diamond-jewelry-logo-27438430.jpg">
      </div>
     

      <div id = "cart_summary">
      	<?php $count = $this->cart->total_items();?>
        <?= $count;?> items, &pound;<?= $this->cart->total();?>
        <button type="button" class="btn btn-primery">
        	<a href="<?=site_url('website/cart')?>">
            <span class= " glyphicon glyphicon-shopping-cart"></span>
          View Basket
          </a>
        </button>
      
        <br>
        <?=$this->session->username;?> | 
        <a href="<?=site_url('website/register')?>">Create New Account</a> |
        <a href="<?=site_url('website/signin/logout')?>">Log out</a>
      </div>
  </div>








	