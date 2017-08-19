<?php
$page_title = "Edit Project";
$portal = "investor";
include_once("head.php");
?>
<div class="container-fluid">
  <div style="width: 1000px; margin: 0 auto;">
    <div class="content">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="text-center" style="margin-top:10px;margin-bottom:40px;font-weight:600;">Ofosu Family House, 10KW system</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <img class="img img-responsive" src="/img/houses/5.jpg" width="530">
        </div>
        <div class="col-xs-6"> <!--style="padding-left:30px;">-->
          <div class="row">
            <div class="col-xs-12">
              <h4 style="margin-top:0px;">$7,500 left<span style="float:right;">30 days left</span></h4>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width:70%"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <ul class="project-info" style="padding-left:0;float:left;">
                <li><span class="glyphicon glyphicon-usd text-primary"></span></li>
                <li><span class="glyphicon glyphicon-calendar text-primary"></span></li>
                <li><i class="fa fa-percent text-primary"></i></li>
                <li><span class="glyphicon glyphicon-map-marker text-primary"></span></li>
              </ul>
              <ul class="project-info" style="padding-left:10px;float:left;">
                <li>40,000</li>
                <li>36 M</li>
                <li>6.99</li>
                <li>Accra, Ghana</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <form action="#">
                <button data-toggle="modal" data-target="#invest-modal" type="button" class="btn btn-primary" style="font-size:120%;padding: 5px 20px;">Invest</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <hr style="margin-top:30px;">
      <div class="row" style="margin-top:20px;">
        <div class="col-xs-12">
          <p style="font-size:120%;text-align:justify;">
            Duis tincidunt euismod mi at lobortis. Maecenas nec vulputate tellus, ac pharetra massa. Vestibulum id dictum risus, non cursus tortor. Curabitur at purus in nibh pharetra ultricies. Curabitur ac tincidunt mauris, id ultricies lectus. Donec fermentum, nunc ut facilisis placerat, dolor urna viverra nibh, ut laoreet ipsum velit ac lacus. Phasellus vitae lacinia quam, sed congue arcu. Duis tincidunt euismod mi at lobortis.
          </p>
          <p style="font-size:120%;text-align:justify;">
            Maecenas nec vulputate tellus, ac pharetra massa. Vestibulum id dictum risus, non cursus tortor. Curabitur at purus in nibh pharetra ultricies. Curabitur ac tincidunt mauris, id ultricies lectus. Donec fermentum, nunc ut facilisis placerat, dolor urna viverra nibh, ut laoreet ipsum velit nibh phaterra idictum ac lacus. Phasellus vitae lacinia quam, sed congue arcu.Duis tincidunt euismod mi at lobortis. Maecenas nec vulputate tellus, ac pharetra massa.
          </p>
        </div>
      </div>
    </div>
    <div id="invest-modal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content text-center" style="padding-bottom:20px;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h2>Invest</h2>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <label style="font-size:140%;margin-bottom:20px;">Amount to Invest</label>
                <div class="row">
                  <div class="col-xs-6 col-xs-offset-3">
                    <div class="input-group">
                      <span class="input-group-addon">$</span>
                      <input type="text" class="form-control" placeholder="ex. 2,500">
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-muted" style="font-size:120%;">Enter an amount that is a multiple of $250</p>
              <br>
              <button type="button" class="btn btn-primary">Review and Sign</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="sign-modal" class="modal fade">
      <div class="modal-dialog modal-lg">
        <div class="modal-content text-center" style="padding-bottom:20px;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3>Promissory Note/Subscription Agreement Sign</h3>
          </div>
          <div class="modal-body">
            <h4>Please review the agreement and sign below</h4>
            <object data="/data/REIT_Subscription_Agreement.pdf" type="application/pdf" width="800" height="400">
              alt : <a href="/data/REIT_Subscription_Agreement.pdf">test.pdf</a>
            </object>
            <form action="#">
              <div class="form-group" style="margin-top:10px;">
                <span><input type="checkbox" style=""></span><label style="margin-left:3px;font-weight:normal;font-size:110%;">I agree to the terms and conditions.</label>
              </div>
              <div class="form-group">
                <div class="row" style="display:flex;">
                  <div class="col-xs-3 col-xs-offset-2 text-right">
                    <label for="signature" style="margin-top:5px;">Electronic Signature: </label>
                  </div>
                  <div class="col-xs-5">
                    <input id="signature" type="text" class="form-control" placeholder="ex. John Doe">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="display:flex;margin-top:30px;">
        <div class="col-xs-6 text-center">
          <div class="content" style="height:100%;">
            <h3 style="margin-bottom: 20px;font-weight:600;">Country Profile</h3>
            <img class="img" style="margin-top:10px;" height="180" width="200" src="/img/prof.jpg">
            <h2>Population: 56 million</h2>
            <h2>Access to electricity: 78%</h2>
            <p style="font-size:120%;">Short sentence about electricity issues in the country lorem psum dolor sit amet, conseectuer adjipeicing elit, sed do ejusmod tempor indicucent ut labore set dolore manga alizqua.</p>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="content">
            <h3 style="margin-bottom: 20px;font-weight:600;">Solar Partner: Solarlight</h3>
            <h4 style="font-size:140%;"><b>Why we work with Solarlight</b></h4>
            <p style="font-size:120%;">Short paragraph about why we work with the company lorem psum dolor sit amet, conseectuer adjipeicing elit, sed do ejusmod tempor indicucent ut labore set dolore manga alizqua.</p>
            <h4 style="font-size:140%;"><b>Year established: 2007</b></h4>
            <h4 style="font-size:140%;"><b>Annual revenue: $269,000</b></h4>
            <h4 style="font-size:140%;"><b>Projects completed: 130, 30MW</b></h4>
            <h4 style="font-size:140%;display:inline-block;"><b>Website: </b></h4><a style="font-size:140%;" href="http://www.solarlight.com.gh"></b> solarlight.com.gh</b></a>
            <h3><b>Repayment Schedule:</b></h3>
            <h4>$1,112 paid monthly</h4>
            <h3><b>Share this Project</b></h3>
            <ul class="list-inline" style="font-size:30px;">
              <li><i class="fa fa-linkedin-square"></i></li>
              <li><i class="fa fa-facebook-official"></i></li>
              <li><i class="fa fa-twitter-square"></i></li>
              <li><i class="fa fa-reddit-square"></i></li>
              <li><i class="fa fa-share-alt"></i></li>
            </ul>
          </div>
        </div>
    </div>
  </div>
</div>
<script>
    $(function () {
        $('#invest-modal button').click(function() {
            $('#invest-modal').one('hidden.bs.modal', function() {
                $('#sign-modal').modal('show');
            }).modal('hide');
        });
    });
</script>
<?php include_once("end.php"); ?>
