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
                <h3><i class="fa fa-dashboard"></i> Dashboard</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_content">
                  <div class="row">
                    <center>
                    <div class="tile_count">
                      <div class="col-md-4 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-medkit"></i> Total Medicamente</span>
                        <?php
                            $query = "SELECT COUNT(*) as NrMed FROM Medicamente";
                            $stmt = $conn->query($query);                     
                            $medicamente = $stmt->fetch(PDO::FETCH_ASSOC);   
                         ?>
                        <div class="count"><?php echo $medicamente['NrMed']; ?></div>
                      </div>
                      <div class="col-md-4 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-truck"></i> Total Distribuitori</span>
                        <?php
                            $query = "SELECT COUNT(*) as NrDistr FROM Distribuitori";
                            $stmt = $conn->query($query);                     
                            $distribuitori = $stmt->fetch(PDO::FETCH_ASSOC);   
                         ?>
                        <div class="count"><?php echo $distribuitori['NrDistr']; ?></div>
                      </div>
                      <div class="col-md-4 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-usd"></i> Total Bonuri</span>
                        <?php
                            $query = "SELECT COUNT(*) as NrBonuri FROM BonComanda";
                            $stmt = $conn->query($query);                     
                            $bonuri = $stmt->fetch(PDO::FETCH_ASSOC);   
                         ?>
                        <div class="count"><?php echo $bonuri['NrBonuri']; ?></div>
                      </div>
                    </div>
                  </center>
</div>
                  <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cele mai recent produse medicamente din fiecare categorie</h2>
                    <?php 
                      $query = "SELECT M.Nume as NumeM, C.Nume as NumeC, M.DataFabricare
                      FROM Medicamente M
                      JOIN Categorii C ON M.CategorieID = C.CategorieID
                      WHERE (M.DataFabricare) IN
                      (SELECT MAX(m2.DataFabricare) FROM Medicamente M2
                      WHERE M2.CategorieID = M.CategorieID
                      GROUP BY M2.CategorieID)
                      ORDER BY M.DataFabricare DESC";  
                      $stmt = $conn->query($query);                     
                      $medicamente = $stmt->fetchAll(PDO::FETCH_ASSOC);              
                    ?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table class="table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nume Medicament</th>
                          <th>Nume Categorie</th>
                          <th>Data Fabricare</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($medicamente as $medicament): ?>
                        <tr>
                          <td><?php echo $medicament['NumeM']; ?></td>
                          <td><?php echo $medicament['NumeC']; ?></td>
                          <td><?php echo $medicament['DataFabricare']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>              
              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Distribuitori de la care nu am comandat</h2>
                    <?php 
                      $query = "SELECT D.Nume
                      FROM Distribuitori D
                      WHERE D.DistribuitorID NOT IN (SELECT DISTINCT BC.DistribuitorID FROM BonComanda BC)";  
                      $stmt = $conn->query($query);                     
                      $distribuitori = $stmt->fetchAll(PDO::FETCH_ASSOC);              
                    ?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table class="table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nume</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($distribuitori as $distribuitor): ?>
                        <tr>
                          <td><?php echo $distribuitor['Nume']; ?></td>
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
        </div>
      </div>
    </div>

    <?php include 'include/footer.php';?>
  </body>
</html>
