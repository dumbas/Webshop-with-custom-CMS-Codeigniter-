<?php
$user = $this->session->userdata('user_id');
    if (!isset($user)){ 
        redirect ('website/signin');
    }   
?>

<div class='container-fluid' ></div>
    <div class='row'>
        <?php if ($cart = $this->cart->contents()):?>
        <section class='col-md-8 ' id='products'>
            <div class='row'>
                <table class="table table-bordered table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Име на продукта</th>
                            <th>Количество</th>
                            <th>Цена</th>
                            <th>Общо</th>
                            <th>Премахни</th>   
                        </tr>
                	</thead>
                    <tbody>
                        <?php foreach ($cart as $row) :?>
                            <tr>
                                <td><?=$row['id']?></td>
                                <td><?=$row['name']?></td>
                                <td><?=$row['qty']?></td>
                                <td><?=$row['price']?></td>
                                <td><?=$row['subtotal']?></td>
                                <td><?=anchor('website/cart/remove/'.$row['rowid'],'X')?></td>
                            </tr>
                        <?php endforeach;?>
                        <tr>
                            <td><?= 'Тотал :'." "."BGN"." ".$this->cart->total();?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <?php endif; ?>
    </div>
</div>

<section class="bordered">
	<h4 class="text-center">ФОРМА ЗА Поръчка</h4>
	<p class="text-center">всички полета, маркирани със (*) са задължителни</p>
	<form action="<?=site_url('website/checkout/order');?>" method="post" enctype="multipart/form-data" onsubmit="return submitForm(this)" class="form-horizontal" role="form">
		<h4 class="text-center"><b>Лична информация</b></h4>
			<div class="form-group">
				<label class="col-sm-2 control-label">Име: *</label>
					<div class="col-sm-4">
						<input name="name" id="name" value="<?php echo $r->name; ?>" class="form-control" type="text">
						<p class="error"<?php echo form_error('name') ; ?></p>
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Град: *</label>
					<div class="col-sm-4">
						<input name="city" id="city" value="<?php echo $r->city; ?>" class="form-control" type="text">
						<p class="error"<?php echo form_error('city') ; ?></p>
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Адрес за доставка: *</label>
					<div class="col-sm-4">
						<input name="address" id="address" value="<?php echo $r->address; ?>" class="form-control" style="" type="text">
						<p class="error"<?php echo form_error('address') ; ?></p>
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Телефон: *</label>
					<div class="col-sm-4">
						<input name="phone" id="phone" value="<?php echo $r->phone; ?>" class="form-control" type="text">
						<p class="error"<?php echo form_error('phone') ; ?></p>
					</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email: *</label>
					<div class="col-sm-4">
						<input name="email" id="email" value="<?php echo $r->email; ?>" class="form-control" type="text">
						<p class="error"<?php echo form_error('email') ; ?></p>
					</div>
			</div>
			<div class="form-group">
				<div class=" col-sm-4">
					<button type="submit" name="Submit" class="btn btn-success">Изпрати поръчката</button>
				</div>
			</div>
	</form>	
</section>
