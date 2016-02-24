<h3>Галерия</h3>
<table class="table table-bordered ">
    <thead>
        <th>ID</th>
        <th>Снимки</th>
        <th>Действия</th>
    </thead>
    <br><br>
    <tbody>
        <?php foreach ($pics as $row){?>
            <tr>
                <td><?=$row->id ;?></td>
                <td>
                    <span class="products">
                        <?php
                            $userfile = $row->userfile;
                            if (isset($userfile)){
                                $pic_path = base_url()."public/img/".$userfile;
                                echo "<img src = '".$pic_path."'>"; 
                            }
                        ?>
                    </span>
                </td>
                <td>
                <?=anchor('cms/product_images/ditch/'.$row->id.'/'.$row->product_id, 'Изтрий');?>
                </td>
            </tr>
        <?php }?>
    </tbody>
</table>

<?php echo form_open_multipart('cms/product_images/do_upload/'.$product_id);?>
    <input type="file" name="userfile" size="20" /><br/>
    <input type="submit" value="Upload" />


