<?php
$page_title = "Document Center";
$portal = "admin";
include_once("/head.php");
?>
  <div class="container-fluid">
    <!-- tabs -->
    <section style="text-align:center;padding-top:30px;">
      <button type="button">Send Document</button>
      <button type="button">Edit Document</button>
    </section>
    <!-- Table of projects -->
    <section style="padding-top:20px;">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title"><b>For All Investors</b><span style="padding-left:20px;"><a href="#">Add New</a></span></div>
            </div>
            <div class="panel-body">
              <div class="row">
                <button class="btn btn-secondary">Offering Memorandum</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </section>
  </div>
<?php include_once("/end.php"); ?>
