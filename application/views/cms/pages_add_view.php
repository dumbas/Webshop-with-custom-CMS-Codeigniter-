
<br><h3>Добавяне на информация за компанията</h3><br>

<form class="form-horizontal" action="<?=site_url('cms/pages/insert')?>" method="post" enctype="multipart/form-data">
    <div class="control-group">
        <label class="col-sm-2 control-label">Заглавие :</label>
            <div class="controls">
                <div class="col-sm-10"> 
                    <input class ="form-control" type="text" name="title"></br>
                    <?php echo form_error('title');?>
                </div>
            </div>
    </div>

    <div class="control-group">
        <label class="col-sm-2 control-label">Съдържание :</label>
            <div class="controls">
                <div class="col-sm-10"> 
                    <textarea class ="form-control" name="content"></textarea>
                    <?php echo form_error('content');?></br></br>
                    <button type="submit" class="btn btn-primary">Публикувай</button>
                </div>
            </div>
    </div>
       

</form>