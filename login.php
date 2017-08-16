<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title><?php echo "Login - Solaset" ?></title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  </style>
</head>
<body>
  <div class="container-fluid">
    <div style="width:400px; margin: 0 auto;">
    <div class="row" style="margin-top:100px;">
      <div class="col-xs-12">
        <a href="/"><img alt="Solaset" src="/img/solaset.png" width="200" style="display:block;margin: 0 auto;"></a>
        <section class="content" style="margin-top:45px;">
          <h5 style="font-size:130%;padding-top:2px;" class="text-center"><b>Welcome back!</b></h5>
          <form action="/dashboard.php" style="margin-top:32px;">
            <input type="email" class="form-control" placeholder="Email" style="margin-bottom:12px;padding:20px 10px;">
            <input id="pass" type="password" class="form-control" placeholder="Password" style="margin-bottom:18px;padding:20px 10px;">
            <span><input type="checkbox" style=""></span><label style="margin-left:3px;font-weight:normal;font-size:110%;">Remember me</label>
            <span style="float:right;"><a href="#" style="font-size:110%;">Forgot your password?</a></span>
            <input type="submit" class="form-control btn btn-primary" value="Sign into your account" style="height:40px;margin-top:15px;font-size:120%;">
          </form>
        </section>
        <form>
          <button type="button" class="form-control" style="background-color:transparent;margin-top:15px;">Don't have an account? <span style="text-decoration: underline;">Sign up</span></button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
