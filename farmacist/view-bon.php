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
                <h3><i class="fa fa-pencil"></i> Vizualizeaza Bon</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <?php
              $bonID = (int) $_GET['id'];
              $query = "SELECT B.BonComandaID, D.Nume, B.NumarComanda, B.Data, B.Pret, MB.MedicamentID, MB.NumarMedicamente, M.Nume as NumeMedicament FROM BonComanda B
                        JOIN Distribuitori D ON B.DistribuitorID = D.DistribuitorID
                        JOIN Medicamente_Bon MB ON B.BonComandaID = MB.BonComandaID 
                        JOIN Medicamente M ON MB.MedicamentID = M.MedicamentID
                        WHERE B.BonComandaID=$bonID";  
              $stmt = $conn->query($query);                     
              $medicamenteBon = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Informatii despre bon</h2>
                    <div class="clearfix"></div>
                    <h5>Nume Distribuitor: <?php echo $medicamenteBon[0]['Nume'] ?></h5>
                    <h5>Numar Comanda: <?php echo $medicamenteBon[0]['NumarComanda'] ?></h5>
                    <h5>Data: <?php echo $medicamenteBon[0]['Data'] ?></h5>
                    <h5>Pret: <?php echo $medicamenteBon[0]['Pret'] ?></h5>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Medicament</th>
                      <th>Numar Medicamente</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($medicamenteBon as $medicament): ?>
                    <tr data-id="<?php echo $medicament['MedicamentID']; ?>">  
                      <td>
                        <?php echo $medicament['NumeMedicament']; ?>
                      </td>  
                      <td>
                        <?php echo $medicament['NumarMedicamente']; ?>
                      </td>                                       
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>                  
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
