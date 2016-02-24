<?php $cat_id = $this->uri->segment(4) ;?>
<h3>Продукти</h3>
<a class="btn btn-success" href="<?=site_url('cms/products/insert/'.$cat_id);?>">Добави продукт</a><br><br>
<table class="table table-bordered ">
	<thead>
        <th>ID</th>
        <th>Име на продукт</th>
        <th>Действия</th>
    </thead>
    <tbody>
    <?php foreach ($products as $row) :?>
            <tr>
            	<td><?=$row->id ?></td>
            	<td><?=$row->title ?></td>
            	
            	<td>
                <a href="<?=site_url('cms/product_images/get_pics/'.$row->id) ;?>">Галерия</a> | 
                <a href="<?=site_url('cms/products/update/'.$row->id.'/'.$cat_id) ;?>">Редактирай</a> | 
            	<a href="<?=site_url('cms/products/ditch/'.$row->id.'/'.$cat_id) ;?>">Изтрий</a>
            	</td>
            </tr>
        
    <?php endforeach ;?>
    </tbody>
</table>
