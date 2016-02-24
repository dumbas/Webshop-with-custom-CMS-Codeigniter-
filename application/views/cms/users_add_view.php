
<h3>Добавяне на потребител</h3><br><br>

<form class="form-horizontal" action="<?=site_url('cms/users/insert')?>" method="post" enctype="multipart/form-data">
    <div class="control-group">
        <label class="col-sm-2 control-label">Потребителско име :</label>
            <div class="controls">
                <div class="col-sm-10"> 
                    <input class ="form-control" type="text" name="username" autofocus></br>
                    <?php echo form_error('username',"<p style='color: red;'>","</p>"); ?>
                </div>
            </div>
    </div>

    <div class="control-group">
        <label class="col-sm-2 control-label">Парола :</label>
            <div class="controls">
                <div class="col-sm-10"> 
                    <input class ="form-control" type="password" name="password" autofocus>
                    <?php echo form_error('password',"<p style='color: red;'>","</p>"); ?><br>
                    <button type="submit" class="btn btn-primary">Добави</button>
                </div>
            </div>
    </div>
       

</form>