
<div class='container-fluid' >
    <div class='row'>
        <?php foreach ($contacts as $row):?>
        <section class='col-md-4 ' id='products'>
            <div class='row'>
                <h3><?=$row->address ?></h3>
                <h4><?=$row->phone ?></h4>
                <h4><?=$row->email ?></h4>
            </div>
        </section>
        <?php endforeach; ?>
    </div>
    <h3>Форма за контакт с нас :</h3>
    <form class="form-horizontal" action="<?=site_url('website/contacts/send_form/');?>" method="post" enctype="multipart/form-data">
        <div class="control-group">
            <label id="title" class="col-sm-2 control-label">Име :</label>
                <div class="controls">
                    <div class="col-sm-10">
                        <input class ="form-control" type="text" name="name" ></br>
                        <?php echo form_error('name');?>
                    </div>
                </div>
        </div>
        <div class="control-group">
            <label id="title" class="col-sm-2 control-label">Имейл :</label>
                <div class="controls">
                    <div class="col-sm-10">
                        <input class ="form-control" type="text" name="email" ></br>
                        <?php echo form_error('email');?>
                    </div>
                </div>
        </div>
        <div class="control-group">
            <label id="title" class="col-sm-2 control-label">Телефон :</label>
                <div class="controls">
                    <div class="col-sm-10">
                        <input class ="form-control" type="text" name="phone" ></br>
                        <?php echo form_error('phone');?>
                    </div>
                </div>
        </div>
        <div class="control-group">
            <label class="col-sm-2 control-label"> Коментар :</label>
                <div class="controls">
                    <div class="col-sm-10">
                        <textarea class ="form-control" name="content"></textarea></br>
                        <?php echo form_error('content');?>
                        <button type="submit" class="btn btn-primary">Публикувай</button>
                    </div>
                </div>
        </div>
    </form>
    <section class='col-md-4' >
        <div class='row'>
            <head><?php echo $map['js']; ?></head>
            <?php echo $map['html']; ?>
        </div>
    </section>
</div>