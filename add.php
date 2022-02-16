<?php

include('config/connection.php');
include('templates/header.php');


?>
<main id="main" class="main">
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">General Form Elements</h5>

            <!-- General Form Elements -->
            <form class="row" role="form" method="post" action="transac.php?action=add">
              <div class="row mb-3 col-md-6">
                <label for="inputText" class="col-sm-3 col-form-label">User Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="username">
                </div>
              </div>

              <div class="row mb-3 col-md-6">
                <label for="inputText" class="col-sm-3 col-form-label">Department</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="department">
                </div>
              </div>

              <div class="row mb-3 col-md-6">
                <label for="inputText" class="col-sm-3 col-form-label">Device Scheme</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="scheme">
                </div>
              </div>
              <div class="row mb-3 col-md-6">
                <label for="inputText" class="col-sm-3 col-form-label">Device Type</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="type">
                </div>
              </div>
              <div class="row mb-3 col-md-6">
                <label for="inputText" class="col-sm-3 col-form-label">Brand</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="brand">
                </div>
              </div>

              <div class="row mb-3 col-md-6">
                <label for="inputText" class="col-sm-3 col-form-label">Device Model</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="model">
                </div>
              </div>
              <div class="row mb-3 col-md-6">
                <label for="inputText" class="col-sm-3 col-form-label">Serial Number</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="serial">
                </div>
              </div>
              <div class="row mb-3 col-md-6">
                <label for="inputText" class="col-sm-3 col-form-label">Proccessor Type</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="protype">
                </div>
              </div>
              <div class="row mb-3 col-md-6">
                <label for="inputText" class="col-sm-3 col-form-label">Proccessor Model</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="promodel">
                </div>
              </div>
              <div class="row mb-3 col-md-6">
                <label for="inputText" class="col-sm-3 col-form-label">Memory</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="ram">
                </div>
              </div>
              <div class="row mb-3 col-md-6">
                <label for="inputText" class="col-sm-3 col-form-label">Storage</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="hdd">
                </div>
              </div>
              <div class="row mb-3">
                <!-- <label class="col-sm-3 col-form-label">Submit Button</label> -->
                <div class="col-sm-8">
                  <button type="submit" class="btn btn-primary">Save Record</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>
    </div>
  </section>
</main>

<?php include('templates/footer.php'); ?>