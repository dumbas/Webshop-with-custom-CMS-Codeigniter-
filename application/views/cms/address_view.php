<h3> Адрес </h3>
<a class="btn btn-success" href="<?=site_url('cms/address/insert')?>">Добави адрес</a><br><br>
<table class="table table-bordered ">
    <thead>
        
        <th>ID </th>
        <th>Адрес</th>
        <th>Телефон</th>
        <th>Имейл</th>
        <th>Редактирай</th>
        <th>Премахване</th>
    </thead>
    <tbody>
        <?php foreach ($address as $row) :?>
            <tr>
                <td><?=$row->id ;?></td>
                <td><?=$row->address ;?></td>
                <td><?=$row->phone ;?></td>
                <td><?=$row->email ;?></td>
                <td><a href="<?=site_url('cms/address/update/'.$row->id) ;?>">Редактирай</a></td>
                <td><a href="<?=site_url('cms/address/delete/'.$row->id) ;?>">Изтрий</a></td>
            </tr>
        <?php endforeach ;?> 
    </tbody>
</table>
