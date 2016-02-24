<h3>Редактиране на продукт</h3>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $r->id;?>">
    <div class="control-group">
        <label class="control-label"> Име на продукта :</label>
            <div class="controls"> 
                <input type="text" name="title" value="<?= $r->title;?>"></br>
                <?php echo form_error('title');?>
            </div>
    </div>

    <div class="control-group">
        <label class="control-label"> Цена :</label>
            <div class="controls"> 
                <input type="text" name="price" value="<?= $r->price;?>"> лв.</br>
                <?php echo form_error('price');?>
            </div>
    </div>

    <div class="control-group">
        <label class="control-label"> Снимка на продукта :</label>
            <div class="controls"> 
                <img width="300" height="150" src="<?=base_url('public/img/'.$r->userfile);?>"></br>
                <input type="file" name="userfile"></br>
            </div>
    </div>

    <div class="control-group">
        <label class="control-label"> Описание :</label>
            <div class="controls"> 
                <textarea rows="10" cols="50" name="content"><?= $r->content;?></textarea></br></br>
                <?php echo form_error('content');?>
                <button type="submit" class="btn">Публикувай</button>
            </div>
    </div>
</form>