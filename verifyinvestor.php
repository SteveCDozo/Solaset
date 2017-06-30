<?php $page_title = "Verify Investor" ?>
<?php include_once("head.php"); ?>
  <!-- project information -->
  <div class="container-fluid">
    <h3 style="text-align:center;">Verify Investor</h3><br>
    <form>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">
              <h4 style="text-align:center;"><b>Check Investor Status</b></h4><br>
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="">Investor Name</label>
                    <input type="text" id="" class="form-control" name="">
                  </div>
                  <div class="form-group">
                    <label for="">Investor Account Number</label>
                    <input type="text" id="" class="form-control" name="">
                  </div>
                  <div class="form-group">
                    <label for="">Investor Email</label>
                    <input type="text" id="" class="form-control" name="">
                  </div>
                  <div style="text-align:center;">
                    <input type="submit" class="btn btn-primary" value="Search">
                  </div>
                </div>
                <div class="col-md-2"></div>
              </div>
              <br>
              <hr>
              <h4 style="text-align:center;"><b>Search Results</b></h4><br>
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                  <table class="table table-hover">
                    <tbody>
                      <tr>
                        <td>John Stockton</td>
                        <td>
                          <table class="inner-table">
                            <tbody>
                              <tr>
                                <td>Accredited</td>
                                <td>Not-Accredited</td>
                                <td>Foreign</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td>John Stockton</td>
                        <td>
                          <table class="inner-table">
                            <tbody>
                              <tr>
                                <td>Accredited</td>
                                <td>Not-Accredited</td>
                                <td>Foreign</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td>John Stockton</td>
                        <td>
                          <table class="inner-table">
                            <tbody>
                              <tr>
                                <td>Accredited</td>
                                <td>Not-Accredited</td>
                                <td>Foreign</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-1"></div>
              </div>
              </div>
            </div>
          </div>
        <div class="col-md-4"></div>
      </div>
    </form>
  </div>
<?php include_once("end.php"); ?>
