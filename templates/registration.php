<?php
include 'header.php';
?>

<div class="container">
    <div class="col-sm-8 col-sm-offset-2" >
    <form method="post" action="">
      <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name">
      </div>
        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="email">
        </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="password">
      </div>
        <div class="form-group">
            <label for="password2">Repeat password</label>
            <input type="password" name="password2" class="form-control" id="password2" placeholder="Repeat password">
        </div>

      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
</div>
<?php
include 'footer.php';
?>
