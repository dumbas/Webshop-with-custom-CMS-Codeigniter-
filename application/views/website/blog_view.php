<div class='container-fluid' ></div>
    <div class='row'>
        <?php foreach ($news as $row):?>
            <section class='col-md-4 ' id='news'>
                <div class='row'>
                    <a href = "<?=site_url('website/news/show/'.$row->id)?>">
                        <img class='icon' alt='Icon' src='<?=base_url('public/img/'.$row->userfile)?>'>
                    </a>
                    <h3><?=$row->title ?></h3>
                    <h4><?=$row->author ?></h4>
                    <h4><?=$row->date ?></h4>
                    <h4><?=character_limiter($row->content,80) ?></h4>
                </div>
            </section>
        <?php endforeach; ?>
    </div>
    <div class='row'>
        <section class='col-md-4 ' id='news'>
            <div class='row'>
                <?= $page_links; ?>
            </div>
        </section>
    </div>
</div>