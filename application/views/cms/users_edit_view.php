
<h3>Редактиране на потребител</h3>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $r->id;?>">
    <div class="control-group">
        <label class="control-label">Потребителско име :</label>
            <div class="controls"> 
                <input type="text" name="username" value="<?= $r->username;?>"></br>
                <?php echo form_error('username',"<p style='color: red;'>","</p>"); ?>
            </div>
    </div>

    <div class="control-group">
        <label class="control-label">Парола :</label>
            <div class="controls"> 
                <input type="password" name="password" value="<?= $r->password;?>"></br>
                <?php echo form_error('password',"<p style='color: red;'>","</p>"); ?><br><br>
                <button type="submit" class="btn">Обнови</button>
            </div>
    </div>
       

</form>