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
                <h3><i class="fa fa-pencil"></i> Editeaza Medicament</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <?php 
              $query = "SELECT CategorieID,Nume FROM Categorii";  
              $stmt = $conn->query($query);                     
              $categorii = $stmt->fetchAll(PDO::FETCH_ASSOC);

              $query = "SELECT ProducatorID,Nume FROM Producatori";  
              $stmt = $conn->query($query);                     
              $producatori = $stmt->fetchAll(PDO::FETCH_ASSOC);  

              $query = "SELECT DistribuitorID,Nume FROM Distribuitori";  
              $stmt = $conn->query($query);                     
              $distribuitori = $stmt->fetchAll(PDO::FETCH_ASSOC);     
            ?>
            <?php
              $medicamentID = (int) $_GET['id'];
              $query = "SELECT * FROM Medicamente WHERE MedicamentID=$medicamentID";  
              $stmt = $conn->query($query);                     
              $medicament = $stmt->fetch(PDO::FETCH_ASSOC);             
            ?>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Informatii despre medicament</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form id="medicine-form" data-parsley-validate class="form-horizontal form-label-left" action="update-medicine.php" method="POST">
                  <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <label for="categorieID">Categorie: </label>
                      <select name="categorieID">
                      <?php foreach ($categorii as $categorie): ?>
                        <option value="<?php echo $categorie['CategorieID']; ?>"><?php echo $categorie['Nume']; ?></option>
                      <?php endforeach; ?>
                      </select>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                  <label for="producatorID">Producator: </label>
                      <select name="producatorID">
                      <?php foreach ($producatori as $producator): ?>
                        <option value="<?php echo $producator['ProducatorID']; ?>"><?php echo $producator['Nume']; ?></option>
                      <?php endforeach; ?>
                      </select>
                  </div>
                </div>
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
                    <input type="text" name="cod" class="form-control has-feedback-left" placeholder="Cod" value="<?php echo $medicament['Cod']; ?>">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="nume" class="form-control has-feedback-left" placeholder="Nume" value="<?php echo $medicament['Nume']; ?>">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="cantitate" class="form-control has-feedback-left" placeholder="Cantitate" value="<?php echo $medicament['Cantitate']; ?>">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="naturaExcipient" class="form-control has-feedback-left" placeholder="Natura Excipient" value="<?php echo $medicament['NaturaExcipient']; ?>">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="modAdministrare" class="form-control has-feedback-left" placeholder="Mod Administrare" value="<?php echo $medicament['ModAdministrare']; ?>">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="pret" class="form-control has-feedback-left" placeholder="Pret" value="<?php echo $medicament['Pret']; ?>">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="dataFabricare" class="form-control has-feedback-left" placeholder="Data Fabricare (de forma YYYY-MM-DD)" value="<?php echo $medicament['DataFabricare']; ?>">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="dataExpirare" class="form-control has-feedback-left" placeholder="Data Expirare (de forma YYYY-MM-DD)" value="<?php echo $medicament['DataExpirare']; ?>">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="stoc" class="form-control has-feedback-left" placeholder="Stoc" value="<?php echo $medicament['Stoc']; ?>">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                      <a href="producers.php" class="btn btn-primary">Renunta</a>
                      <button type="submit" class="btn btn-success">Salveaza</button>
                  </div>
                </div>
                  <input type="hidden" name="medicamentID" value="<?php echo $medicamentID; ?>" />
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
