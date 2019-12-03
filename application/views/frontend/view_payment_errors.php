<div class="container">
<section>
    <div class="alert alert-primary" role="alert">
        Error processing your payment place try againt : <?= $error ?? '' ?>
    </div>
    <a class='btn btn-primary' href='<?= base_url('Albums/view/'. $album['id']) ?>'>Try Again</a>
</section>
</div>