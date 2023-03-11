<!DOCTYPE html>
<html lang="ro">
<?php include 'include/header.php'; ?>

<body class="nav-md">
  <?php include 'include/sidebar.php'; ?>
  </div>
  </div>

  <?php include 'include/topnav.php'; ?>

  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3><i class="fa fa-medkit"></i> Bonuri Medicamente</h3>
        </div>
      </div>

      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Lista Bonuri Medicamente</h2>
              <ul class="nav navbar-right panel_toolbox">
                <a href="add-bon.php" class="btn btn-sm btn-info text-white"><i class="fa fa-plus"></i> Adauga
                  Bon</a>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <?php
              $query = "SELECT B.BonComandaID, D.Nume, B.NumarComanda, B.Data, B.Pret FROM BonComanda B
                        JOIN Distribuitori D ON B.DistribuitorID = D.DistribuitorID";  
              $stmt = $conn->query($query);                    
              $bonuri = $stmt->fetchAll(PDO::FETCH_ASSOC);   
              $numarBonuri = count($bonuri);              
              ?>
              <?php if ($numarBonuri > 0): ?>
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Nume Distribuitor</th>
                      <th>Numar Comanda</th>
                      <th>Data</th>
                      <th>Pret</th>
                      <th>Actiuni</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($bonuri as $bon): ?>
                    <tr data-id="<?php echo $bon['BonComandaID']; ?>">
                      <td>
                        <?php echo $bon['Nume']; ?>
                      </td>
                      <td>
                        <?php echo $bon['NumarComanda']; ?>
                      </td>                      
                      <td>
                        <?php echo $bon['Data']; ?>
                      </td>                      
                      <td>
                        <?php echo $bon['Pret']; ?>
                      </td>                                          
                      <td>
                        <a class="btn btn-sm btn-success text-white" href="view-bon.php?id=<?php echo $bon['BonComandaID']; ?>"><i class="fa fa-view"></i>Vezi Bon</a>
                        <a class="btn delete btn-sm btn-danger text-white"><i class="fa fa-trash"></i>Delete</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              <?php else: ?>
                <h4 align='center'>Nu a fost gasit niciun bon.</h4>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <?php include 'include/footer.php'; ?>
  <script src="js/functii-bonuri.js"></script>
</body>

</html>