<h3>Редактиране на информация за компанията</h3>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $r->id;?>">
    <div class="control-group">
        <label class="control-label">Заглавие :</label>
            <div class="controls"> 
                <input type="text" name="title" value="<?= $r->title;?>"></br>
                <?php echo form_error('title');?>
            </div>
    </div>

    <div class="control-group">
        <label class="control-label">Съдържание :</label>
            <div class="controls"> 
                <textarea rows="10" cols="50" name="content"><?= $r->content;?></textarea></br>
                <?php echo form_error('content');?>
                <button type="submit" class="btn">Публикувай</button>
            </div>
    </div>
       

</form>