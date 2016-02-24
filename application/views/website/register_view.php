
<section class="bordered">
	<h4 class="text-center">ФОРМА ЗА РЕГИСТРАЦИЯ</h4>
	<p class="text-center">всички полета, маркирани със (*) са задължителни</p>
	<form action="<?=site_url('website/register/new_member/');?>" method="post" enctype="multipart/form-data" onsubmit="return submitForm(this)" class="form-horizontal" role="form">
		<h4 class="text-center"><b>Лична информация</b></h4>
		<div class="form-group">
			<label class="col-sm-7 control-label">Име: *</label>
			<div class="col-sm-12">
				<input name="name" id="name" value="<?php echo set_value('name'); ?>" class="form-control" type="text">
				<p class="error"<?php echo form_error('name') ; ?></p>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-7 control-label">Град: *</label>
			<div class="col-sm-12">
				<input name="city" id="city" value="<?php echo set_value('city'); ?>" class="form-control" type="text">
				<p class="error"<?php echo form_error('city') ; ?></p>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-7 control-label">Адрес: *</label>
			<div class="col-sm-12">
				<input name="address" id="address" value="<?php echo set_value('address'); ?>" class="form-control" style="" type="text">
				<p class="error"<?php echo form_error('address') ; ?></p>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-7 control-label">Телефон: *</label>
			<div class="col-sm-12">
				<input name="phone" id="phone" value="<?php echo set_value('phone'); ?>" class="form-control" type="text">
				<p class="error"<?php echo form_error('phone') ; ?></p>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-7 control-label">Email: *</label>
			<div class="col-sm-12">
				<input name="email" id="email" value="<?php echo set_value('email'); ?>" class="form-control" type="text">
				<p class="error"<?php echo form_error('email') ; ?></p>
			</div>
		</div>
		<h4 class="text-center"><b>Информация за акаунта</b></h4>
		<div class="form-group">
			<label class="col-sm-7 control-label">Потребителско име: *</label>
			<div class="col-sm-12">
				<input name="username" id="username" value="<?php echo set_value('username'); ?>" class="form-control" type="text">
				<p class="error"<?php echo form_error('username') ; ?></p>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-7 control-label">Парола: *</label>
			<div class="col-sm-12">
				<input name="password" id="password" value="<?php echo set_value('password'); ?>" class="form-control" type="password">
				<p class="error"<?php echo form_error('password') ; ?></p>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-7 control-label">Парола (повторно): *</label>
			<div class="col-sm-12">
				<input name="passconf" id="passconf" value="<?php echo set_value('passconf'); ?>" class="form-control" type="password">
				<p class="error"<?php echo form_error('passconf') ; ?></p>
			</div>
		</div>
		<div class="form-group">
			<div class=" col-sm-12">
				<button type="submit" name="Submit" class="btn btn-success">Регистрирай ме</button>
			</div>
		</div>
	</form>	
</section>