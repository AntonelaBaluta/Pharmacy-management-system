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
                <h3><i class="fa fa-pencil"></i> Editeaza Categorie</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <?php
              $categorieID = (int) $_GET['id'];
              $query = "SELECT Nume,Descriere FROM Categorii WHERE CategorieID=$categorieID";  
              $stmt = $conn->query($query);                     
              $categorie = $stmt->fetch(PDO::FETCH_ASSOC);             
            ?>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Informatii despre categorie</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form id="categorie-form" data-parsley-validate class="form-horizontal form-label-left" action="update-category.php" method="POST">
                  <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="nume-categorie" class="form-control has-feedback-left" placeholder="Nume Categorie" value="<?php echo $categorie['Nume']; ?>">
                    <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" name="descriere" class="form-control has-feedback-left" placeholder="Descriere" value="<?php echo $categorie['Descriere']; ?>">
                    <span class="fa fa-list-alt form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                      <a href="categories.php" class="btn btn-primary">Renunta</a>
                      <button type="submit" class="btn btn-success">Salveaza</button>
                  </div>
                </div>
                  <input type="hidden" name="categorieID" value="<?php echo $categorieID; ?>" />
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
