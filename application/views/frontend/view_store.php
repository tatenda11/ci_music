<section>
    <div class="jumbotron">
        Welcome to the music shop
    </div>
</section>
<div class='container'>
    <section id='items-container'>
        <div class="collection">
           <?php for($i = 0; $i < 12; $i ++):?>
                <div class="card collection-item" >
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
           <?php endfor;?>
        </div>
    </section>
<div>
