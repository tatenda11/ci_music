<div class="container inner-content">
    <div class="row">
        <div class="col-sm">
            <ul class="list-group">
                <li class="list-group-item active">Album Details</li>
                <li class="list-group-item"><?= $album['title']?></li>
                <li class="list-group-item">$<?= $album['id']?></li>
            </ul>
        </div>
        <div class="col-sm">
           <h4>Order Details</h4>
           <table class='table'>
                <thead>
                    <tr>
                        <th>Album</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                <thead>
                <tbody>
                    <tr>
                        <td><?= $album['title']?></td>
                        <td>1</td>
                        <td>$ <?= $album['id']?></td>
                        <td>$ <?= $album['id']?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>$ <?= $album['id']?></td>
                    </tr>
                </tbody>
           </table>
           <?= form_open_multipart("Payments/pay/{$album['id']}", array('id' => 'payment-form', 'class'=>'billable-class' )) ?>
                <div class="form-row">
                    <label for="card-element">
                    Credit or debit card
                    </label>
                    <div id="card-element" class="form-control"></div>
                    <div id="card-errors" role="alert"></div>
                </div>
                <br>
                <button class='btn btn-primary'>Submit Payment</button>
            </form>
        </div>
    </div>
</div>
<script src="https://js.stripe.com/v3/"></script>
<script src="<?= base_url("assets/js/client.js")?>"></script>