<?php $page_title = "Add Partner" ?>
<?php include_once("/head.php"); ?>
  <!-- project information -->
  <div class="container-fluid">
    <h4>Account NO. 1234567<span style="float:right;">Temp. Password: Zf123a45</span></h4>
    <h3 class="page-header text-center">Add Partner</h3>
    <form>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title text-center"><b>Company Information</b></div>
            </div>
            <div class="panel-body">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Company Name</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Address</label>
                  <input type="text" id="" class="form-control" name="" placeholder="Street Address"><br>
                  <input type="text" id="" class="form-control" name="" placeholder="City"><br>
                  <select class="form-control" id="">
                    <?php include("/countrylist.php"); ?>
                  </select><br>
                  <input type="text" id="" class="form-control" name="" placeholder="Zip Code">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Year Established</label>
                  <input type="text" id="" class="form-control" name="" placeholder="ex. 1999">
                </div>
                <div class="form-group">
                  <label for="">Annual Revenue</label>
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" id="" name="" placeholder="ex. 100,000">
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Projects Completed</label>
                  <input type="text" id="" class="form-control" name="" placeholder="ex. 1999">
                </div>
                <div class="form-group">
                  <label for="">Power Installed (MW)</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="" name="" placeholder="ex. 30">
                    <span class="input-group-addon">MW</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Website</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Why</label>
                  <textarea id="" class="form-control" rows="8"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title text-center"><b>Contacts</b></div>
            </div>
            <div class="panel-body">
              <div class="col-md-6">
                <h4><b>Primary</b></h4>
                <div class="form-group">
                  <label for="">First Name</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Last Name</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Position/Title</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Phone Number</label>
                  <input type="text" id="" class="form-control" name="" placeholder="ex. +2341239848">
                </div>
              </div>
              <div class="col-md-6">
                <h4><b>Secondary</b></h4>
                <div class="form-group">
                  <label for="">First Name</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Last Name</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Position/Title</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Phone Number</label>
                  <input type="text" id="" class="form-control" name="" placeholder="ex. +2341239848">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
          <input type="reset" class="btn btn-danger" value="Clear">
        </div>
        <div class="col-md-2">
          <div class="input-group">
            <input type="password" class="form-control" placeholder="Enter Password">
            <span class="input-group-btn">
              <input type="submit" class="btn btn-primary" value="Add">
            </span>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </form>
  </div>
<?php include_once("/end.php"); ?>
