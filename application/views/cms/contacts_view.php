<h3> Контакти </h3>
<table class="table table-bordered ">
	<thead>
        
        <th>ID </th>
        <th>Дата</th>
        <th>Име</th>
        <th>Телефон</th>
        <th>Имейл</th>
        <th>Съдържание</th>
        <th>Премахване</th>
    </thead>
    <tbody>
    <?php foreach ($contacts as $row) :?>
        <tr>
        	<td><?=$row->id ;?></td>
        	<td><?=$row->date ;?></td>
        	<td><?=$row->name ;?></td>
            <td><?=$row->phone ;?></td>
            <td><?=$row->email ;?></td>
            <td><?=$row->content ;?></td>
            <td>
            <a href="<?=site_url('cms/contacts/delete/'.$row->id) ;?>">Изтрий</a>
        	</td>
        </tr>
    <?php endforeach ;?>
</tbody>
</table>