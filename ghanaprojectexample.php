<div class="col-md-4">
  <article style="background-color:white;padding: 15px 10px 15px 10px; margin-top: 10px; margin-bottom: 10px;box-shadow: 0px 0px 5px #bab8b8">
    <img class="img img-responsive" src="<?php echo "/img/houses/$house_img"; ?>">
    <h4><b><?php echo $house_name; ?>, 10KW</b></h4>
    <p>UG wants to solar power their new science building so students can do labs without the light going off on them..</p>
    <ul class="list-inline">
      <li><span class="glyphicon glyphicon-usd"></span> 40,000</li>
      <li><span class="glyphicon glyphicon-calendar"></span> 36 M</li>
      <li><i class="fa fa-percent"></i> 6.99</li>
      <li><span class="glyphicon glyphicon-map-marker"></span> Ghana</li>
    </ul>
    <div class="progress" style="margin-bottom:0;">
      <div class="progress-bar" role="progressbar" style="width:70%;">$7,500 left</div>
    </div>
    <div class="overlay">
      <form action="<?php echo ($action=="Learn More") ? "investproject" : "{$action}project"; ?>.php">
        <button type="submit" class="btn edit"><?php echo $action; ?></button>
      </form>
    </div>
  </article>
</div>
