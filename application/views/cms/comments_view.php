<h3> Коментари </h3>
<table class="table table-bordered ">
    <thead>
        
        <th>ID </th>
        <th>Име</th>
        <th>Коментар</th>
        <th>Дата</th>
        <th>Премахване</th>
    </thead>
    <tbody>
        <?php foreach ($comments as $row) : ?>
            <tr>
                <td><?=$row->id;?></td>
                <td><?=$row->name;?></td>
                <td><?=$row->content;?></td>
                <td><?=$row->date;?></td>
                <td><?=anchor('cms/comments/ditch/'.$row->id.'/'.$row->news_id, "Изтрий");?></td>
            </tr>
            
        <?php endforeach; ?>
    </tbody>
</table>
