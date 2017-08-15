<?php
$page_title = "Dashboard";
$portal = "investor";
include_once("/head.php");
?>
<div class="container-fluid">
  <div style="width: 1100px; margin: 0 auto;">
    <!-- filter/sort section -->
    <div id="dashboard" style="font-family:markpro;">
      <div class="row top" style="border-style: solid;vertical-align:middle;">
        <div class="col-md-12">
          <h2 style="display:inline;">Account Value: $40,000.78</h2><span style="float:right;color:#4e90cd;font-size:110%;padding-top:7px;"><a href="#"><span class="glyphicon glyphicon-plus-sign"></span> Add Funds</a></span>
        </div>
      </div>
      <div class="row" style="border-style: none solid; display:flex;">
        <div class="col-md-5 text-center info" style="border-right-style: solid;">
          <h1 style="font-size:80px;padding-bottom:30px;">21</h1>
          <h3>People now have reliable electricity because of your investments</h3>
        </div>
        <div class="col-md-7 details">
          <div class="row">
            Available Balance:<span style="float:right;">$20,000.00</span>
          </div>
          <div class="row" style="border-top-style: solid;">
            Amount Invested:<span style="float:right;">$21,222.00</span>
          </div>
          <div class="row" style="border-top-style: solid;">
            Outstanding Principal:<span style="float:right;">$12,222.00</span>
          </div>
          <div class="row" style="border-top-style: solid;">
            Accrued Interest:<span style="float:right;">$2,111.12</span>
          </div>
          <div class="row" style="border-top-style: solid;">
            Interest Paid:<span style="float:right;">$1,045.33</span>
          </div>
          <div class="row" style="border-top-style: solid;">
            Net Annualized Return:<span style="float:right;">8.51%</span>
          </div>
        </div>
      </div>
      <div class="row bottom" style="border-style: solid;display:flex;">
        <div class="col-md-4" style="border-right-style: solid;">
          Auto Invest
          <label class="switch" style="vertical-align:middle;">
            <input id="auto-invest" type="checkbox" checked>
            <span class="slider round"></span>
          </label>
          <span id="auto-invest-status" class="text-left" style="display:inline-block;width:35px;margin-right:10px;">ON</span>
          <a href="#">Edit</a>
        </div>
        <div class="col-md-4" style="border-right-style: solid;">
          <a href="#"><span class="glyphicon glyphicon-folder-open" style="padding-right:4px;"></span>  Portfolio</a>
        </div>
        <div class="col-md-4">
          <a href="#"><span class="glyphicon glyphicon-usd"></span> Withdraw Funds</a>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(function() {
  $("#auto-invest").change(function() {
    if ($(this).is(":checked")) {
      $("#auto-invest-status").text("ON");
    } else {
      $("#auto-invest-status").text("OFF");
    }
  });
});
</script>
<?php include_once("/end.php"); ?>
