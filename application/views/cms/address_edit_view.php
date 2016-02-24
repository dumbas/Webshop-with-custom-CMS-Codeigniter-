<h3>Редактиране на адрес</h3>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?= $r->id;?>"> 
    <div class="control-group">
        <label class="control-label"> Адрес :</label>
            <div class="controls"> 
                <input type="text" name="address" value="<?= $r->address;?>"></br>
                <?php echo form_error('address');?>
            </div>
    </div>

    <div class="control-group">
        <label class="control-label"> Телефон :</label>
            <div class="controls"> 
                <input type="text" name="phone" value="<?= $r->phone;?>"></br>
                <?php echo form_error('phone');?>
            </div>
    </div>

    <div class="control-group">
        <label class="control-label"> Имейл :</label>
            <div class="controls"> 
                <input type="text" name="email" value="<?= $r->email;?>"></br>
                <?php echo form_error('email');?>
                <button type="submit" class="btn">Публикувай</button>
            </div>
    </div>

    
</form>