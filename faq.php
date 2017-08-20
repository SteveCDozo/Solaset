<?php
$page_title = "FAQ";
$portal = "investor";
include_once("head.php");
?>
<div class="container-fluid">
  <div class="site-wrapper content">
    <div class="row text-center">
      <div class="col-xs-12">
        <h1>Frequently Asked Questions</h1>
        <br>
        <ul class="nav nav-tabs">
          <li class="active" role="presentation"><a data-toggle="tab" href="#tab1"><h4>Why African solar projects?</h4></a></li>
          <li role="presentation"><a data-toggle="tab" href="#tab2"><h4>Investing with Solaset</h4></a></li>
          <li role="presentation"><a data-toggle="tab" href="#tab3"><h4>Managing your account</h4></a></li>
        </ul>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-xs-10 col-xs-offset-1">
        <div class="tab-content">
          <div id="tab1" class="tab-pane fade in active">
            <?php
            $qid = '1';
            $q = 'Why are solar projects needed?';
            include("question.php");
            $qid = '2';
            $q = 'What type of solar projects are there?';
            include("question.php");
            $qid = '3';
            $q = 'Where are the solar projects located?';
            include("question.php");
            $qid = '4';
            $q = 'Who can invest in Solaset solar projects?';
            include("question.php");
            ?>
          </div>
          <div id="tab2" class="tab-pane fade">
            <?php
            $qid = '5';
            $q = 'How does Solaset work?';
            include("question.php");
            $qid = '6';
            $q = 'How does Solaset conduct due diligence?';
            include("question.php");
            $qid = '7';
            $q = 'How does Solaset make money?';
            include("question.php");
            $qid = '8';
            $q = 'What happens if a borrower defaults?';
            include("question.php");
            $qid = '9';
            $q = 'What happens if Solaset shuts down?';
            include("question.php");
            ?>
          </div>
          <div id="tab3" class="tab-pane fade">
            <?php
            $qid = '10';
            $q = 'Is there an investment minimum or maximum?';
            include("question.php");
            $qid = '11';
            $q = 'How and when will I receive my returns?';
            include("question.php");
            $qid = '12';
            $q = 'How does Auto Invest work?';
            include("question.php");
            $qid = '13';
            $q = 'Can I trade my stake in a project and get out early?';
            include("question.php");
            ?>
          </div>
        </div>
        <p style="font-size:120%;margin: 40px 0;">For more information, please see the <a data-toggle="modal" href="#memo-modal">Offering Memorandum</a></p>
      </div>
    </div>
    <div id="memo-modal" class="modal fade">
      <div class="modal-dialog modal-lg">
        <div class="modal-content text-center" style="padding-bottom:20px;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3>Offering Memorandum</h3>
          </div>
          <div class="modal-body">
            <object data="/data/SampleMemoSTCL.pdf" type="application/pdf" width="800" height="400">
              alt : <a href="/data/SampleMemoSTCL.pdf">test.pdf</a>
            </object>
            <button style="display:block;margin:30px auto 0 auto;" type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once("end.php"); ?>
