<h3> Потребители </h3>
<a class="btn btn-success" href="<?=site_url('cms/users/insert')?>">Добави потребител</a><br><br>
<table class="table table-bordered ">
    <thead>
        
        <th>ID </th>
        <th>Username</th>
        <th>Редактиране</th>
        <th>Премахване</th>
    </thead>
    <tbody>
        <?php foreach ($users as $row) :?>
            <tr>
                <td><?=$row->id ;?></td>
                <td><?=$row->username ;?></td>
                <td><a href="<?=site_url('cms/users/update/'.$row->id) ;?>">Редактирай</a></td>
                <td><a href="<?=site_url('cms/users/delete/'.$row->id) ;?>">Изтрий</a></td>
            </tr>
        <?php endforeach ;?>
    </tbody>
</table>
