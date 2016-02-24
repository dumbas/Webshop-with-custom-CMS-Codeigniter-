<div class='container-fluid' >
    <div class='row'>
        <section class='col-md-4 ' id='article'>
            <div class='row'>
            	<img class='icon' alt='Icon' src='<?=base_url('public/img/'.$r->userfile)?>'>
            </div>
        </section>
        <section class='col-md-4 ' id='article'>
            <div class='row'>
                <h1><?=$r->title ?></h1>
            </div>
        </section>
        <section class='col-md-4 ' id='article'>
            <div class='row'>
                <h3><?=$r->author ?></h3>
            </div>
        </section>
        <section class='col-md-4 ' id='article'>
            <div class='row'>
                <h4><?=$r->content ?></h4>
            </div>
        </section>
    </div>
</div>
<div class='container-fluid' >
    <div class='row'>
        <h1>Коментари :</h1>
	        <section class='col-md-4 ' id='comments'>
	            <div class='row'>
	            	<?php foreach ($comments as $row) :?>
	            	<ul>
	            		<li><em><?=$row->name ?></em></li>
	            		<li>Коментира на :<?=$row->date ?></li>
	            		<li><?=$row->content ?></li>
	            	</ul>
                    <?php endforeach;?>
	            </div>
	        </section>
    </div>
</div><br>
<h3>Коментирай</h3><br>
<form class="form-horizontal" action="<?=site_url('website/news/insert_comment/'.$r->id);?>" method="post" enctype="multipart/form-data">
    <div class="control-group">
        <label id="title" class="col-sm-2 control-label">Име</label>
            <div class="controls">
                <div class="col-sm-10">
                    <input class ="form-control" type="text" name="name" ></br>
                    <?php echo form_error('name');?>
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
