<?php
    $user = $this->session->userdata('user_id');
?>

<div class='container-fluid' ></div>
    <div class='row'>
        <?php if ($cart) :?>
        <section class='col-md-8 ' id='products'>
            <div class='row'>
                <table class="table table-bordered table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Име на продукта</th>
                            <th>Количество</th>
                            <th>Цена</th>
                            <th>Общо</th>
                            <th>Премахни</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart as $row) :?>
                            <tr>
                                <td><?=$row['id']?></td>
                                <td><?=$row['name']?></td>
                                <td><?=$row['qty']?></td>
                                <td><?=$row['price']?></td>
                                <td><?=$row['subtotal']?></td>
                                <td><?=anchor('website/cart/remove/'.$row['rowid'],'X')?></td>
                            </tr>
                        <?php endforeach;?>
                        <tr>
                            <td><?= 'Тотал :'." "."BGN"." ".$this->cart->total();?></td>
                            <td><button type="button" class="btn btn-primery"><a href="<?=base_url().('website/checkout/get/'.$user);?>">Поръчай</a></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <?php endif; ?>
    </div>
</div>