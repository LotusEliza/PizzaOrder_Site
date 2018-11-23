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
                    <div class="row">
                        <div class="col-xs-6">
                            <h1>Dear, <?=$_POST['fname']?>!</h1>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>We have sent a confirmation email</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>
