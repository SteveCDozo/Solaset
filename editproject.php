<?php
$page_title = "Edit Project";
$portal = "admin";
include_once("/head.php");
?>
<section id="edit-project-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="panel panel-default panel-padding">
          <div class="panel-body">
            <section id="project-info">
              <h2 class="panel-header text-center">University of Ghana, 10KW system</h2>
              <div class="row">
                <div class="col-md-6">
                  <img class="img img-responsive" src="http://citifmonline.com/wp-content/uploads/2014/05/UG-111.jpg">
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <h4>FUNDED<span style="float:right;">30 days left</span></h4>
                  </div>
                  <div class="row">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width:100%"></div>
                    </div>
                  </div>
                  <div class="row">
                    <ul style="padding-left:0;">
                      <li><span class="glyphicon glyphicon-usd text-primary"></span> 40,000</li>
                      <li><span class="glyphicon glyphicon-calendar text-primary"></span> 36 M</li>
                      <li><i class="fa fa-percent text-primary"></i> 6.99</li>
                      <li><span class="glyphicon glyphicon-map-marker text-primary"></span> Accra, Ghana</li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
            <hr>
            <section id="investor-info">
              <h2 class="panel-header text-center">Investors</h2>
              <div class="row">
                <div class="col-md-3">
                  <img class="img img-circle" height="180" width="180" src="http://www.healthyblackwoman.com/wp-content/uploads/2014/05/download19.jpg">
                  <h4 class="text-center">Heather</h4>
                  <h4 class="text-center">$15,000</h4>
                </div>
                <div class="col-md-3">
                  <img class="img img-circle" height="180" width="180" src="http://photo.elsoar.com/wp-content/images/Handsome-young-businessman-black-suit.jpg">
                  <h4 class="text-center">Tim</h4>
                  <h4 class="text-center">$3,000</h4>
                </div>
                <div class="col-md-3">
                  <img class="img img-circle" height="180" width="180" src="https://www.elitesingles.com/sites/www.elitesingles.com/files/black_dating_tip_2.jpg">
                  <h4 class="text-center">Tucker</h4>
                  <h4 class="text-center">$14,000</h4>
                </div>
                <div class="col-md-3">
                  <img class="img img-circle" height="180" width="180" src="https://s-media-cache-ak0.pinimg.com/736x/20/d0/11/20d011bf3ee0551bf7be980ead7b8deb.jpg">
                  <h4 class="text-center">Janice</h4>
                  <h4 class="text-center">$9,000</h4>
                </div>
              </div>
            </section>
            <div class="row">
              <div class="col-md-4">
                <div class="input-group">
                  <input type="password" class="form-control" placeholder="Password">
                  <span class="input-group-btn">
                    <input type="submit" class="btn btn-danger" value="Cancel Project">
                  </span>
                </div>
              </div>
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <div class="input-group">
                  <input type="password" class="form-control" placeholder="Password">
                  <span class="input-group-btn">
                    <input type="submit" class="btn btn-primary" value="Close Project">
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</section>
<?php include_once("/end.php"); ?>
