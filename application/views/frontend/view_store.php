<section>
    <div class="jumbotron" >
        <h1>Welcome to the music shop</h1>
    </div>
</section>
<div class='container'>
    <section id='items-container'>
        <div class="collection">
           <?php foreach( $albums as  $album):?>
                <div class="card collection-item" >
                    <div class="card-body">
                        <h5 class="card-title"><?= $album['title'] ?></h5>
                        <p class="card-text"><strong>$ <?= $album['id']?></strong></p>
                        <a href="<?= base_url("Albums/view/".$album['id']) ?>" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
           <?php endforeach;?>
        </div>
    </section>
<div>
