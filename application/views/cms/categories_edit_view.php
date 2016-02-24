<h3> Категории </h3>
<form class="form-horizontal" action="<?=site_url('cms/categories/update/'.$r->id)?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $r->id;?>">
<input type="text" name="cat_name" value="<?= $r->cat_name;?>"><button type="submit" class="btn btn-success">Добави Категория</button><br><br>
<?=form_error('cat_name');?>
</form>