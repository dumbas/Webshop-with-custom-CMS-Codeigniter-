
<h3>Моля въведете потребителско име и парола .</h3><br>
	<form class="form-horizontal" action="<?=site_url('website/signin/submit')?>" method="post" >
	    <div class="control-group">
	        <label class="control-label">Потребител</label>
	            <div class="controls"> 
	                <input type="text" name="username" class="form-control" style="" type="text"autofocus></br>
	                <?php echo form_error('username',"<p style='color: red;'>","</p>"); ?>
	            </div>
	    </div>
	    <div class="control-group">
	        <label class="control-label">Парола</label>
	            <div class="controls"> 
	                <input type="password" name="password" class="form-control" style="" type="text"><br><br>
	                <?php echo form_error('password',"<p style='color: red;'>","</p>"); ?>
	                <button type="submit" class="btn">Sign In</button>
	            </div>
	    </div>
	</form><br>
	<a href="<?=site_url('website/register')?>">Create New Account</a>