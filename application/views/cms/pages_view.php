<h3> Информация за компанията </h3>
<a class="btn btn-success" href="<?=site_url('cms/pages/insert')?>">Добави Инфо</a><br><br>
<table class="table table-bordered ">
    <thead>
        
        <th>ID </th>
        <th>Заглавие</th>
        <th>Съдържание</th>
        <th>Редактиране</th>
        <th>Премахване</th>
    </thead>
    <tbody>
        <?php foreach ($pages as $row) :?>
            <tr>
                <td><?=$row->id ;?></td>
                <td><?=$row->title ;?></td>
                <td><?=$row->content ;?></td>
                <td><a href="<?=site_url('cms/pages/update/'.$row->id) ;?>">Редактирай</a></td>
                <td><a href="<?=site_url('cms/pages/delete/'.$row->id) ;?>">Изтрий</a></td>
            </tr>
        <?php endforeach ;?>
    </tbody>
</table>
