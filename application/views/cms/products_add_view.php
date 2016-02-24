<?php $cat_id = $this->uri->segment(4) ;?>
<h3>Добавяне на продукт</h3><br>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="control-group">
        <label class="col-sm-2 control-label"> Име на продукта:</label>
            <div class="controls">
                <div class="col-sm-10"> 
                    <input class ="form-control" type="text" name="title" value="<?=set_value('title');?>" autofocus></br>
                    <?php echo form_error('title');?>
                </div>
            </div>
    </div>

    <div class="control-group">
        <label class="col-sm-2 control-label"> Цена :</label>
            <div class="controls">
                <div class="col-sm-10"> 
                    <input class ="form-control" type="text" name="price" value="<?=set_value('price');?>"></br>
                    <?php echo form_error('price');?>
                </div>
            </div>
    </div>

    <div class="control-group">
        <label class="col-sm-2 control-label"> Снимка на продукта :</label>
            <div class="controls">
                <div class="col-sm-10"> 
                    <input class ="form-control" type="file" name="userfile"></br>
                </div>
            </div>
    </div>

    <div class="control-group">
        <label class="col-sm-2 control-label"> Описание :</label>
            <div class="controls">
                <div class="col-sm-10"> 
                    <textarea class ="form-control" name="content"><?=set_value('content');?></textarea></br></br>
                    <?php echo form_error('content');?>
                    <button type="submit" class="btn btn-primary">Публикувай</button>
                </div>
            </div>
    </div>
</form>