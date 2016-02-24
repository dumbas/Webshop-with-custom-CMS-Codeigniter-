<div class='container-fluid' ></div>
    <div class='row'>
        <?php foreach ($aboutus as $row):?>
        <section class='col-md-4 ' id='products'>
            <div class='row'>
                <h3><?=$row->title ?></h3>
                <h4><?=$row->content ?></h4>
            </div>
        </section>
        <?php endforeach; ?>
    </div>
    
</div>