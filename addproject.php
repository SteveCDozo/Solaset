<?php
$page_title = "Add Project";
$command = true;
include_once("/head.php");
?>
  <!-- project information -->
  <div class="container-fluid">
    <h4>Project ID: 12345</h4>
    <h3 class="page-header text-center">Add Project</h3>
    <form>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title text-center"><b>Project Description</b></div>
            </div>
            <div class="panel-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Customer Name</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Project Type</label>
                  <select class="form-control" id="">
                    <option value="">Residential</option>
                    <option value="">Commercial</option>
                    <option value="">Utility</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Project Size</label>
                  <input type="text" id="" class="form-control" name="" placeholder="ex. 10kW">
                </div>
                <div class="form-group">
                  <label for="">City</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Country</label>
                  <select class="form-control" id="">
                    <?php include("/countrylist.php"); ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Loan Contract</label>
                  <div class="input-group">
                    <input type="text" class="form-control" readonly>
                    <label class="input-group-btn">
                      <span class="btn btn-primary">
                        Browse.. <input type="file" style="display: none;" accept=".pdf" id="" class="form-control" name="" placeholder="">
                      </span>
                    </label>
                  </div>
                  <span class="help-block">
                    Only .pdf files will be accepted.
                  </span>
                </div>
                <div class="form-group">
                  <label for="">Image</label>
                  <div class="input-group">
                    <input type="text" class="form-control" readonly>
                    <label class="input-group-btn">
                      <span class="btn btn-primary">
                        Browse.. <input type="file" style="display: none;" accept="image/*" id="" class="form-control" name="">
                      </span>
                    </label>
                  </div>
                  <span class="help-block">
                    Only .png or .jpeg files will be accepted.
                  </span>
                </div>
                <div class="form-group">
                  <label for="">Description</label>
                  <textarea id="" class="form-control" rows="5"></textarea>
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
              <div class="panel-title text-center"><b>Financials</b></div>
            </div>
            <div class="panel-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Amount</label>
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" id="" name="" placeholder="ex. 12,750.00">
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Interest Rate (%)</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="" name="" placeholder="ex. 6.99">
                    <span class="input-group-addon">%</span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Term (months)</label>
                  <input type="text" id="" class="form-control" name="" placeholder="ex. 36">
                </div>
                <div class="form-group">
                  <label for="">Solaset Fee</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Amount Paid To Partner</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Total Amount Partner Repays</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Principal per month partner repays</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Interest per month partner pays</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Total per month partner repays</label>
                  <input type="text" id="" class="form-control" name="">
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
            <input type="password" class="form-control" placeholder="Password">
            <span class="input-group-btn">
              <input type="submit" class="btn btn-primary" value="Add">
            </span>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </form>
  </div>
  <script>
  // from https://www.abeautifulsite.net/whipping-file-inputs-into-shape-with-bootstrap-3
  $(function() {

    // We can attach the `fileselect` event to all file inputs on the page
    $(document).on('change', ':file', function() {
      var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
      input.trigger('fileselect', [numFiles, label]);
    });

    // We can watch for our custom `fileselect` event like this
    $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

        var input = $(this).parents('.input-group').find(':text'),
        log = numFiles > 1 ? numFiles + ' files selected' : label;

        if( input.length ) {
          input.val(log);
        } else {
          if( log ) alert(log);
        }

      });
    });

  });
  </script>
<?php include_once("/end.php"); ?>
