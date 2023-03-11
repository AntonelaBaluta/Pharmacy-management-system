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
          <h3><i class="fa fa-medkit"></i> Producatori Medicamente</h3>
        </div>
      </div>

      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Lista Producatori Medicamente</h2>
              <ul class="nav navbar-right panel_toolbox">
                <a href="add-producer.php" class="btn btn-sm btn-info text-white"><i class="fa fa-plus"></i> Adauga
                  Producator</a>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <?php
              $query = "SELECT * FROM Producatori";  // prima interogare
              $stmt = $conn->query($query);                     // executa query (interogarea)
              $producatori = $stmt->fetchAll(PDO::FETCH_ASSOC);   // extrage datele returnate de interogare
              $numarProducatori = count($producatori);              // numar cate el sunt 
              ?>
              <?php if ($numarProducatori > 0): ?>
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
                      <th>Actiuni</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($producatori as $producator): ?>
                    <tr data-id="<?php echo $producator['ProducatorID']; ?>">
                      <td>
                        <?php echo $producator['Nume']; ?>
                      </td>
                      <td>
                        <?php echo $producator['Oras']; ?>
                      </td>                      
                      <td>
                        <?php echo $producator['Judet']; ?>
                      </td>                      
                      <td>
                        <?php echo $producator['Strada']; ?>
                      </td>                      
                      <td>
                        <?php echo $producator['Numar']; ?>
                      </td>                      
                      <td>
                        <?php echo $producator['Telefon']; ?>
                      </td>                      
                      <td>
                        <?php echo $producator['Email']; ?>
                      </td>
                      <td>
                        <a class="btn btn-sm btn-success text-white" href="edit-producer.php?id=<?php echo $producator['ProducatorID']; ?>"><i class="fa fa-edit"></i>Edit</a>
                        <a class="btn delete btn-sm btn-danger text-white"><i class="fa fa-trash"></i>Delete</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              <?php else: ?>
                <h4 align='center'>Nu a fost gasit niciun producator.</h4>
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
  <script src="js/functii-producers.js"></script>
</body>

</html>