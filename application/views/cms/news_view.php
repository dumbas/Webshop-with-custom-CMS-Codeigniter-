
<h3> Новини </h3>
<a class="btn btn-success" href="<?=site_url('cms/news/insert')?>">Добави новина</a><br><br>
<table class="table table-bordered table-responsive table-hover">
	<thead>
        <th>ID</th>
        <th>Заглавие</th>
        <th>Обновено на :</th>
        <th>Коментари</th>
        <th>Действия</th>
    </thead>
    <tbody>
        <?php foreach ($news as $row) :?>

            <?php $count = $this->m->total_comments($row->id); ?>
            <tr>
                <td><?=$row->id ;?></td>
                <td><?=$row->title ;?></td>
                <td><?=$row->date ;?></td>
                <td><a href="<?=site_url('cms/comments/get_comments/'.$row->id) ;?>"><?=$count;?></td>
                <td><a href="<?=site_url('cms/news/update/'.$row->id) ;?>">Редактирай</a>  |  
                    <a href="<?=site_url('cms/news/delete/'.$row->id) ;?>">Изтрий</a>
                </td>
            </tr>
        <?php endforeach ;?>
    </tbody>
</table>
<ul>

