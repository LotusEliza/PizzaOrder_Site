<?php
include 'header.php';
?>

<link rel="stylesheet" type="text/css" href="templates/style.css">
<script type="text/javascript" src="login.js"></script>
<br>
<!-- before html tag-->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                        <h3>Please enter your email address</h3>
                    <hr>
                </div>
                <div class="panel-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <button type="submit" name="email-submit" class="btn btn-default">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
