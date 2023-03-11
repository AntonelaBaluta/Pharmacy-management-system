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
          <h3><i class="fa fa-medkit"></i> Categorii Medicamente</h3>
        </div>
      </div>

      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Lista Categorii Medicamente</h2>
              <ul class="nav navbar-right panel_toolbox">
                <a href="add-category.php" class="btn btn-sm btn-info text-white"><i class="fa fa-plus"></i> Adauga
                  Categorie</a>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <?php
              $query = "SELECT CategorieID,Nume,Descriere FROM Categorii";  // prima interogare
              $stmt = $conn->query($query);                     // executa query (interogarea)
              $categorii = $stmt->fetchAll(PDO::FETCH_ASSOC);   // extrage datele returnate de interogare
              $numarCategorii = count($categorii);              // numar cate el sunt 
              // $numarCategorii = 0;
              ?>
              <?php if ($numarCategorii > 0): ?>
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Nume Categorie</th>
                      <th>Descriere</th>
                      <th>Actiuni</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($categorii as $categorie): ?>
                    <tr data-id="<?php echo $categorie['CategorieID']; ?>">
                      <td>
                        <?php echo $categorie['Nume']; ?>
                      </td>
                      <td>
                        <?php echo $categorie['Descriere']; ?>
                      </td>
                      <td>
                        <a class="btn btn-sm btn-success text-white" href="edit-category.php?id=<?php echo $categorie['CategorieID']; ?>"><i class="fa fa-edit"></i>Edit</a>
                        <a class="btn delete btn-sm btn-danger text-white"><i class="fa fa-trash"></i>Delete</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              <?php else: ?>
                <h4 align='center'>Nu a fost gasita nicio categorie.</h4>
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
  <script src="js/functii.js"></script>
</body>

</html>