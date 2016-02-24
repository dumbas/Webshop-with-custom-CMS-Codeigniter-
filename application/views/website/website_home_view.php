
   

    
<div class='container-fluid' >
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://placehold.it/1200x315" alt="...">
      <div class="carousel-caption">
        <h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="...">
      <div class="carousel-caption">
        <h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="...">
      <div class="carousel-caption">
        <h3>Caption Text</h3>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->
    <div class='row'>
        <h1>Продукти</h1>
        <?php foreach ($products as $row):?>
        <section class='col-md-4 ' id='products_front'>
            <div class='row'>
                <a href = "<?=site_url('website/products/show/'.$row->id)?>">
                <img class='icon' alt='Icon' src='<?=base_url('public/img/'.$row->userfile)?>'>
                </a>
                <h3><?=$row->title ?></h3>
                <h4><?=$row->price." лв." ?></h4>
            </div>
        </section>
        <?php endforeach; ?>
    </div>
    <div class='row'>
        <h1>Новини</h1>
        
        <section class='col-md-4' id = "news_front">
            <div class='row'>
                <?php foreach ($news as $row):?>
                <span class="news_front">
                    <h4><?=word_limiter($row->title,8) ?></h4>
                    <a href = "<?=site_url('website/news/show/'.$row->id)?>">
                        <img class='icon' alt='Icon' src='<?=base_url('public/img/'.$row->userfile)?>'>
                    </a>
                    <p><?=character_limiter($row->content,120) ?></p>
                    <a href="<?=site_url('website/news/show/'.$row->id)?>">Read More...</a>
                </span>
                 <?php endforeach; ?>
            </div>
        </section>
    </div>
</div>
