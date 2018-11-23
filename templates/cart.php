<?php
include 'header.php';
?>
<table class="table table-hover">
 <tr>
    <th>PizzaName</th>
    <th>Amount</th>
    <th>Price</th>
    <th>Sum</th>
    <th>Delete</th>
 </tr>
 <?php foreach ($cartPizzas as $item){
  echo"<tr>
      <td>{$item[0]}</td>
      <td>{$item[1]}</td>
      <td>{$item[2]}</td>
      <td>{$item[3]}</td>
      <td><a href='/cart/remove/{$item[4]}' class=\"\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td> 
      </tr>";}
 ?>
     <tr>
          <td colspan="4" align="right"><b>Total:</b></td>
          <td><?=$totalSum;?></td>
     </tr>
        <tr>
            <td colspan="3" align="right">
                <a href="/" class="btn btn-default">Continue shopping</a>
            </td>
            <td colspan="2" align="left">
                <a href="/order" class="btn btn-success">Order</a>
            </td>
        </tr>
    </table>
<?php
include 'footer.php';
?>

