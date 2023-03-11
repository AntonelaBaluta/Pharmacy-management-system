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
          <h3><i class="fa fa-medkit"></i> Medicamente</h3>
        </div>
      </div>

      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Lista Medicamente</h2>
              <ul class="nav navbar-right panel_toolbox">
                <a href="add-medicine.php" class="btn btn-sm btn-info text-white"><i class="fa fa-plus"></i> Adauga
                  Medicament</a>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <?php
              $query = "SELECT M.*, D.Nume as Distribuitor, P.Nume as Producator, C.Nume as Categorie FROM Medicamente M
                        JOIN Distribuitori D ON M.DistribuitorID = D.DistribuitorID
                        JOIN Producatori P ON M.ProducatorID = P.ProducatorID
                        JOIN Categorii C ON M.CategorieID = C.CategorieID";  
              $stmt = $conn->query($query);                     
              $medicamente = $stmt->fetchAll(PDO::FETCH_ASSOC);   
              $numarMedicamente = count($medicamente);               
              ?>
              <?php if ($numarMedicamente > 0): ?>
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Categorie</th>
                      <th>Producator</th>
                      <th>Distribuitor</th>
                      <th>Cod</th>
                      <th>Nume</th>
                      <th>Cantitate</th>
                      <th>Natura Excipient</th>
                      <th>Mod Administrare</th>
                      <th>Pret</th>
                      <th>Data Fabricare</th>
                      <th>Data Expirare</th>
                      <th>Stoc</th>
                      <th>Actiuni</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($medicamente as $medicament): ?>
                    <tr data-id="<?php echo $medicament['MedicamentID']; ?>">
                      <td>
                        <?php echo $medicament['Categorie']; ?>
                      </td>
                      <td>
                        <?php echo $medicament['Producator']; ?>
                      </td>                      
                      <td>
                        <?php echo $medicament['Distribuitor']; ?>
                      </td>                      
                      <td>
                        <?php echo $medicament['Cod']; ?>
                      </td>                      
                      <td>
                        <?php echo $medicament['Nume']; ?>
                      </td>                      
                      <td>
                        <?php echo $medicament['Cantitate']; ?>
                      </td>                      
                      <td>
                        <?php echo $medicament['NaturaExcipient']; ?>
                      </td>
                      <td>
                        <?php echo $medicament['ModAdministrare']; ?>
                      </td>
                      <td>
                        <?php echo $medicament['Pret']; ?>
                      </td>
                      <td>
                        <?php echo $medicament['DataFabricare']; ?>
                      </td>
                      <td>
                        <?php echo $medicament['DataExpirare']; ?>
                      </td>
                      <td>
                        <?php echo $medicament['Stoc']; ?>
                      </td>
                      <td>
                        <a class="btn btn-sm btn-success text-white" href="edit-medicine.php?id=<?php echo $medicament['MedicamentID']; ?>"><i class="fa fa-edit"></i>Edit</a>
                        <a class="btn delete btn-sm btn-danger text-white"><i class="fa fa-trash"></i>Delete</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              <?php else: ?>
                <h4 align='center'>Nu a fost gasit niciun medicament.</h4>
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
  <script src="js/functii-medicines.js"></script>
</body>

</html>