<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Test</title>

		<link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?=base_url()?>public/css/style.css" />

		<script src="<?=base_url()?>public/js/jquery.js"></script>
		<script src="<?=base_url()?>public/js/bootstrap.js"></script>
	</head>

<body>


<nav class="navbar">
	<div class="navbar-inner">
	<span class="brand">CMS</span>
		
	</div>
</nav>


<!-- start wrapper -->

<div class="wrapper">
	<div class="row">
    <div id="dashboard-side" class="span2">
        <nav class="navbar">
            <div class="navbar-left">
                
            </div>
        </nav>
    </div>

    <div id="dashboard-main" class="span12">


    	<h3>Моля въведете потребителско име и парола .</h3>
    	<br>

    <form class="form-horizontal" action="<?=site_url('cms/login/submit')?>" method="post" >
	    <div class="control-group">
	        <label class="control-label">Потребител</label>
	            <div class="controls"> 
	                <input type="text" name="username" autofocus></br>
	                <?php echo form_error('username',"<p style='color: red;'>","</p>"); ?>
	            </div>
	    </div>

	    <div class="control-group">
	        <label class="control-label">Парола</label>
	            <div class="controls"> 
	                <input type="password" name="password" ><br><br>
	                <?php echo form_error('password',"<p style='color: red;'>","</p>"); ?>
	                <button type="submit" class="btn">Log In</button>
	            </div>
	    </div>

	</form>
	 
    
</div>

</div>
<!-- end wrapper -->

<footer>
	&copy;<?=date('Y')?>
</footer>


	</body>

</html>