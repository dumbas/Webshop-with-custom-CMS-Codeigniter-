<h3>Добавяне на адрес</h3><br>
<form class="form-horizontal" action="<?=site_url('cms/address/insert')?>" method="post" enctype="multipart/form-data">
    <div class="control-group">
        <label class="col-sm-2 control-label"> Адрес :</label>
            <div class="controls">
                <div class="col-sm-10"> 
                    <input class ="form-control" type="text" name="address" value="<?=set_value('address');?>"></br>
                    <?=form_error('address')?>
                </div>
            </div>
    </div>

    <div class="control-group">
        <label class="col-sm-2 control-label"> Телефон :</label>
            <div class="controls">
                <div class="col-sm-10"> 
                    <input class ="form-control" type="text" name="phone" value="<?=set_value('phone');?>"></br>
                    <?=form_error('phone')?>
                </div>
            </div>
    </div>

    <div class="control-group">
        <label class="col-sm-2 control-label"> Имейл :</label>
            <div class="controls">
                <div class="col-sm-10"> 
                    <input class ="form-control" type="text" name="email" value="<?=set_value('email');?>"></br>
                    <?=form_error('email')?>
                    <button type="submit" class="btn btn-primary">Публикувай</button>
                </div>
            </div>

    </div>

    
</form>