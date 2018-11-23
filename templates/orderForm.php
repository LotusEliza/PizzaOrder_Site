<?php
include 'header.php';
?>
<div class="container">
    <div class="col-xs-6">
        <form class="form-horizontal" method="POST" action="">
            <div class="form-group">
                <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="inputPhone" placeholder="Phone" name="phone">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddr" class="col-sm-2 control-label">Addr</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="addr" placeholder="Enter delivery address"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputComment" class="col-sm-2 control-label">Comment to order</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="comment"  placeholder="Comment to order"></textarea>
                </div>
            </div>
            <!-- PAYMENT TYPE -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="payment" value="cash" checked>
                            Cash
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="payment" value="card">
                            Credit Card
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="payment" value="paypal">
                            PayPal
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Order</button>
                </div>
            </div>


        </form>
    </div>
    <div class="col-xs-6">
        <table class="table table-hover">
            <tr>
                <th>PizzaName</th>
                <th>Amount</th>
                <th>Price</th>
                <th>Sum</th>
            </tr>
            <?php foreach ($cartPizzas as $item){
                echo"<tr>
      <td>{$item[0]}</td>
      <td>{$item[1]}</td>
      <td>{$item[2]}</td>
      <td>{$item[3]}</td>
      </tr>";}
            ?>
            <tr>
                <td colspan="4" align="right"><b>Total:</b></td>
                <td><?=$totalSum;?></td>
            </tr>
        </table>
    </div>



</div>


<?php
include 'footer.php';
