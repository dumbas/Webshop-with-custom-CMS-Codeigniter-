<h3> Поръчки </h3>
<table class="table table-bordered ">
	<thead>
        <th>Добавена на </th>
        <th>Име</th>
        <th>Град</th>
        <th>Адрес</th>
        <th>Имейл</th>
        <th>Телефон</th>
        <th>Продукт</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Изпълнена</th>
        <th>Изтрий</th>
    </thead>
    <tbody>
        <?php foreach ($orders as $row){?>
        
            <tr>
            	
            	<td><?=$row->date;?></td>
            	<td><?=$row->name;?></td>
                <td><?=$row->city;?></td>
                <td><?=$row->address;?></td>
                <td><?=$row->email;?></td>
                <td><?=$row->phone;?></td>
                <td><?=$row->product_title;?></td>
                <td><?=$row->product_price;?></td>
                <td><?=$row->qty;?></td>
                <td><input type="checkbox" class="complete" checked="checked" value="<?=$row->id;?>"></td>
                <td>
            	<?=anchor('cms/orders/delete/'.$row->id,"Изтрий");?>
            	</td>
            </tr>
        <?php }?>
    </tbody>
</table>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
    var base_url = '<?=base_url();?>';
    
    /* Order completion */
   $('.complete').on('change', function() {
        var complete = 0;
        if ($(this).is(':checked')) {
            complete = 1;
        }
        $this = $(this);
        
        $.ajax({
            url: 'index.php?c=orders&a=completeorder&id=' + $(this).val() + '&is_complete=' + complete,
            success: function() {
                if ($this.is(':checked')) {
                    $this.parents('tr').css('background', 'lightGreen');
                } else {
                    $this.parents('tr').css('background', 'white');
                }
            }
        });
    });

</script>