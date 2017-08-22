<?php
$page_title = "Account Settings";
$portal = "investor";
include_once("head.php");
?>
<div class="container-fluid">
  <div class="site-wrapper content">
    <div class="row text-center">
      <div class="col-xs-12">
        <h1>Account Settings</h1>
        <hr>
        <section>
          <form action="#">
            <h3>Name</h3>
            <input type="text" class="form-control" placeholder="First" value="John">
            <input type="text" class="form-control" placeholder="Last" value="Doe">
            <input type="password" class="form-control" placeholder="Entter password">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </form>
        </section>
        <section>
          <form action="#">
            <h3>Email</h3>
            <input type="text" class="form-control" placeholder="Email address" value="john@doe.com">
            <input type="password" class="form-control" placeholder="Entter password">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </form>
        </section>
        <section>
          <form action="#">
            <h3>Password</h3>
            <input type="password" class="form-control" placeholder="Current Password">
            <input type="password" class="form-control" placeholder="Entter password">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </form>
        </section>
        <section>
          <form action="#">
            <h3>Country of Citizenship</h3>
            <input type="text" class="form-control" placeholder="Email address">
            <input type="password" class="form-control" placeholder="Entter password">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </form>
        </section>
        <section>
          <form action="#">
            <h3>State</h3>
            <input type="text" class="form-control" placeholder="Email address">
            <input type="password" class="form-control" placeholder="Entter password">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </form>
        </section>
      </div>
    </div>
  </div>
</div>
<?php include_once("end.php"); ?>
