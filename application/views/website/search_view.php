<div class='container-fluid' ></div>
    <div class='row'>
        
        <?php foreach ($search as $r) :?>
        <section class='col-md-4 ' id='products'>
            <div class='row'>
                <a href = "<?=site_url('website/products/show/'.$r->id)?>">
                    <img class='icon' alt='Icon' src='<?=base_url('public/img/'.$r->userfile)?>'>
                </a>
                <h3><?=$r->id ?></h3>
                <h3><?=$r->title ?></h3>
                <h4><?=$r->price ?></h4>
                <h4><?=character_limiter($r->content,80) ?></h4>
            </div>
        </section>
        <?php endforeach ;?>
    </div>
</div>