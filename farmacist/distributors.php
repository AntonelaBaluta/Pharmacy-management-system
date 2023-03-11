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
          <h3><i class="fa fa-medkit"></i> Distribuitori Medicamente</h3>
        </div>
      </div>

      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Lista Distribuitori Medicamente</h2>
              <ul class="nav navbar-right panel_toolbox">
                <a href="add-distributor.php" class="btn btn-sm btn-info text-white"><i class="fa fa-plus"></i> Adauga
                  Distribuitor</a>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <?php
              $query = "SELECT * FROM Distribuitori";  
              $stmt = $conn->query($query);                     
              $distribuitori = $stmt->fetchAll(PDO::FETCH_ASSOC);   
              $numarDistribuitori = count($distribuitori);              
              ?>
              <?php if ($numarDistribuitori > 0): ?>
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Nume</th>
                      <th>Oras</th>
                      <th>Judet</th>
                      <th>Strada</th>
                      <th>Numar</th>
                      <th>Telefon</th>
                      <th>Email</th>
                      <th>Data aprovizionare</th>
                      <th>Actiuni</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($distribuitori as $distribuitor): ?>
                    <tr data-id="<?php echo $distribuitor['DistribuitorID']; ?>">
                      <td>
                        <?php echo $distribuitor['Nume']; ?>
                      </td>
                      <td>
                        <?php echo $distribuitor['Oras']; ?>
                      </td>                      
                      <td>
                        <?php echo $distribuitor['Judet']; ?>
                      </td>                      
                      <td>
                        <?php echo $distribuitor['Strada']; ?>
                      </td>                      
                      <td>
                        <?php echo $distribuitor['Numar']; ?>
                      </td>                      
                      <td>
                        <?php echo $distribuitor['Telefon']; ?>
                      </td>                      
                      <td>
                        <?php echo $distribuitor['Email']; ?>
                      </td>
                      <td>
                        <?php echo $distribuitor['DataAprovizionare']; ?>
                      </td>
                      <td>
                        <a class="btn btn-sm btn-success text-white" href="edit-distributor.php?id=<?php echo $distribuitor['DistribuitorID']; ?>"><i class="fa fa-edit"></i>Edit</a>
                        <a class="btn delete btn-sm btn-danger text-white"><i class="fa fa-trash"></i>Delete</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              <?php else: ?>
                <h4 align='center'>Nu a fost gasit niciun distribuitor.</h4>
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
  <script src="js/functii-distributors.js"></script>
</body>

</html>