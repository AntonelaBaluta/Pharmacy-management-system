<!DOCTYPE html>
<html lang="ro">
<?php include 'include/header.php';?>
  <body class="nav-md">
            <?php include 'include/sidebar.php';?>
          </div>
        </div>

        <?php include 'include/topnav.php';?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-pencil"></i> Adauga Producator</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Informatii despre producator</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form id="producer-form" data-parsley-validate class="form-horizontal form-label-left" action="insert-producer.php" method="POST">
                  <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="nume" class="form-control has-feedback-left" placeholder="Nume Producator">
                    <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="oras" class="form-control has-feedback-left" placeholder="Oras">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="judet" class="form-control has-feedback-left" placeholder="Judet">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="strada" class="form-control has-feedback-left" placeholder="Strada">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="numar" class="form-control has-feedback-left" placeholder="Numar">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="telefon" class="form-control has-feedback-left" placeholder="Telefon">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="email" class="form-control has-feedback-left" placeholder="Email">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                      <a href="producers.php" class="btn btn-primary">Renunta</a>
                      <button type="submit" class="btn btn-success">Salveaza</button>
                  </div>
                </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'include/footer.php';?>
  </body>
</html>
