<?php
include 'header.php';
?>
<div class="container">
    <div class="row">
        <?php
        foreach ($pizza as $item){
            echo "<div class='col-xs-4' style='margin: 10px 0px 10px 0px;'><img src='{$item[3]}' width='50' height='50'>
            {$item[2]}<br>
            {$item[4]}<br>
            {$item[5]}<br>
            <form method='POST' action='cart'>
                <input type='text' name='amount' value='1' style='width: 30px;'> 
                <input type='hidden' name='id' value='{$item[0]}'>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Order Pizza\">
            </form>
            </div>";
        }
        ?>
    </div>
</div>
<?php
include 'footer.php';
?>

