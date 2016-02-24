<br><h3>Добавяне на новина</h3><br>
<form class="form-horizontal" action="<?=site_url('cms/news/insert')?>" method="post" enctype="multipart/form-data">
    <div class="control-group">
        <label id="title" class="col-sm-2 control-label">Заглавие на новина :</label>
            <div class="controls">
                <div class="col-sm-10"> 
                    <input class ="form-control" type="text" name="title" autofocus value="<?=set_value('title');?>"></br>
                    <?php echo form_error('title');?>
                </div>
            </div>
    </div>

    <div class="control-group">
        <label class="col-sm-2 control-label">Автор :</label>
            <div class="controls">
                <div class="col-sm-10">  
                    <input class ="form-control" type="text" name="author" value="<?=set_value('author');?>"></br>
                    <?php echo form_error('author');?>
                </div>
            </div>
    </div>

    <div class="control-group">
        <label class="col-sm-2 control-label"> Дата :</label>
            <div class="controls">
                <div class="col-sm-10">
                    <input class ="form-control" type="text" name="date" value="<?=date('Y-m-d H:i:s');?>"></br>
                    <?php echo form_error('date');?>
                </div> 
            </div>
    </div>

    <div class="control-group">
        <label class="col-sm-2 control-label"> Снимка към новината :</label>
            <div class="controls"> 
                <div class="col-sm-10">
                    <input class ="form-control" type="file" name="userfile"></br>
                </div>
            </div>
    </div>

    <div class="control-group">
        <label class="col-sm-2 control-label"> Съдържание :</label>
            <div class="controls">
                <div class="col-sm-10"> 
                    <textarea class ="form-control" name="content"><?=set_value('content');?></textarea></br>
                    <?php echo form_error('content');?>
                    <button type="submit" class="btn btn-primary">Публикувай</button>
                </div>
            </div>
    </div>
</form>