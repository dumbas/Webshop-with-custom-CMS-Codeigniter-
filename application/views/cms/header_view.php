<!DOCTYPE HTML>
<?php
$user = $this->session->userdata('user_id');
    if (!isset($user)){ 
        redirect ('cms/login');
    }   
?>

<head>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <title>CMS</title>

    <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/css/style.css" />
        
</head>

<body>

<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              
                <a class="navbar-brand" href="<?=site_url('cms/home')?>">CMS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="<?=site_url('cms/login/logout')?>">LogOut</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


<!-- start wrapper -->
<?php ;?>

    <div class="container-fluid">
    	<div class="row">
            <div id="dashboard-side" class="col-md-2 ">
                <nav class="navbar">
                    <div class="navbar-left">
                        <ul id="nav" class="nav">
                            <li><a href="<?=site_url('cms/home')?>">Home</a></li></br>
                            <li><a href="<?=site_url('cms/news')?>">News</a></li></br>
                            <li><a href="<?=site_url('cms/categories')?>">Products</a></li></br>
                            <li><a href="<?=site_url('cms/orders')?>">Orders</a></li></br>
                            <li><a href="<?=site_url('cms/contacts')?>">Contacts</a></li></br>
                    		<li><a href="<?=site_url('cms/address')?>">Address</a></li></br>
                            <li><a href="<?=site_url('cms/pages')?>">Company Info</a></li></br>
                            <li><a href="<?=site_url('cms/users')?>">Users</a></li></br>
                            <li><a href="<?=site_url('cms/chat')?>">Chat (<span id="chatcnt">0</span>)</a></li></br>
                            <li><a href="<?=site_url('cms/login/logout')?>">Logout</a></li></br>
                        </ul>
                    </div>
                </nav>
            </div>

    <div id="dashboard-main" class="col-md-10">
 
