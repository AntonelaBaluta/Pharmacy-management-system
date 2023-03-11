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
                <h3><i class="fa fa-plus"></i> Adauga Bon</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <?php
              $query = "SELECT DistribuitorID,Nume FROM Distribuitori";  
              $stmt = $conn->query($query);                     
              $distribuitori = $stmt->fetchAll(PDO::FETCH_ASSOC);   

              $query = "SELECT MedicamentID,Nume FROM Medicamente";  
              $stmt = $conn->query($query);                     
              $medicamente = $stmt->fetchAll(PDO::FETCH_ASSOC);  
            ?>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Informatii despre bon</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form id="bon-form" data-parsley-validate class="form-horizontal form-label-left" action="insert-bon.php" method="post">
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <label for="distribuitorID">Distribuitor: </label>
                        <select name="distribuitorID">
                        <?php foreach ($distribuitori as $distribuitor): ?>
                          <option value="<?php echo $distribuitor['DistribuitorID']; ?>"><?php echo $distribuitor['Nume']; ?></option>
                        <?php endforeach; ?>
                        </select>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="numarComanda" class="form-control has-feedback-left" placeholder="Numar Comanda">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="data" class="form-control has-feedback-left" placeholder="Data (de forma YYYY-MM-DD)">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                  <label for="medicamenteID">Medicamente: </label>
                  <select name="medicamenteID[]" id="medicamenteID" multiple>
                  <?php foreach ($medicamente as $medicament): ?>
                    <option value="<?php echo $medicament['MedicamentID']; ?>"><?php echo $medicament['Nume']; ?></option>
                  <?php endforeach; ?>
                  </select>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="numarMedicamente" class="form-control has-feedback-left" placeholder="Numar medicamente (cu virgula intre ele)">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                      <a href="categories.php" class="btn btn-primary">Renunta</a>
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
