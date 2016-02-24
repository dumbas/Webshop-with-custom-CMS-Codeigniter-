
<h3> Категории </h3>
<form class="form-horizontal" action="<?=site_url('cms/categories/add')?>" method="post" enctype="multipart/form-data">
    <input type="text" name="cat_name"><button type="submit" class="btn btn-success">Добави Категория</button><br><br>
    <?=form_error('cat_name');?>
</form>
<table class="table table-bordered table-responsive table-hover">
	<thead>
        <th>ID</th>
        <th>Име на кетегория</th>
        <th>Действия</th>
    </thead>
    <tbody>
        <?php foreach ($categories as $row) :?>
                <tr>
                	<td><?=$row->id ?></td>
                	<td>
                        <a href="<?= site_url('cms/products/get_products/'.$row->id) ;?>" >
                            <?=$row->cat_name ?>
                        </a>
                    </td>
                	<td>
                        <a href="<?= site_url('cms/categories/update/'.$row->id) ;?>" >Редактирай</a>  |  
                	    <a href="<?= site_url('cms/categories/delete/'.$row->id) ;?>" >Изтрий</a>
                	</td>
                </tr>
        <?php endforeach;?>
    </tbody>
</table>