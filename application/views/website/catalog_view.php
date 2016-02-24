<div class='container-fluid' ></div>
    <div class='row'>
        <?php foreach ($catalog as $row):?>
        <section class='col-md-4 ' id='products'>
            <div class='row'>
                <a href = "<?=site_url('website/products/show/'.$row->id)?>">
                    <img class='icon' alt='Icon' src='<?=base_url('public/img/'.$row->userfile)?>'>
                </a>
                <h3><?=$row->id ?></h3>
                <h3><?=$row->title ?></h3>
                <h4><?=$row->price ?></h4>
                <h4><?=character_limiter($row->content,80) ?></h4>
            </div>
        </section>
        <?php endforeach; ?>
    </div>
    <div class='row'>
        <section class='col-md-4 ' id='products'>
            <div class='row'>
                <?= $page_links; ?>
            </div>
        </section>
    </div>
</div>