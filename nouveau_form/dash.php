<!DOCTYPE html>
<html lang="en">
<head>
  <title>mon_admin_dashbord</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="feuille_de_style/style3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="container-fluid">
          <div class="row">
           
            <div class="col-sm-12 col-md-12 col-lg-12  text-white">
              <!-- ma navbar en dessous-->
              <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="images/moi2.jpg" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
                    </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                      </li>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="text" placeholder="Search">
                      <button class="btn btn-primary" type="button">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
              <!-- fin de ma navbar -->

              <div>
                  <h2 class="text-black">Admin Dashbord</h2>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <div class="col-md bg-primary text-white marge-gauche">
                      <div>
                          <h3 class="h1">150</h3>
                          <p>total des reclamations</p>
                      </div>
                  </div>
                  <div class="col-md bg-success text-white marge-centre">
                    <div>
                        <h3 class="h1">53</h3>
                        <p>total des utilisateurs</p>
                    </div>
                  </div>
                  <div class="col-md bg-warning text-white marge-droite">
                    <div>
                        <h3 class="h1">44</h3>
                        <p>reclamations resolues</p>
                    </div>
                  </div>
                </div>  
              </div>


              <div class="container-fluid longueur">
                <div class="table-responsive-sm">          
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>NOM</th>
                      <th>PRENOMS</th>
                      <th>E-MAIL</th>
                      <th>MATIERE</th>
                      <th>MODIFICATION</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-success">
                      <td>1</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> <button class="btn btn-primary" type="button">modifier</button></td>
                    </tr>
                    
                     <tr class="table-danger">
                      <td>2</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> <button class="btn btn-primary" type="button">modifier</button></td>
                    </tr>
                    
                    <tr class="table-primary">
                      <td>3</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> <button class="btn btn-primary" type="button">modifier</button></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>

    <footer class="container-fluid">
        <p class="copyright">&copy; 2021-myDashbord</p>
        <a href="" class="cgv">Tout droit reservé</a>
    </footer>

</body>
</html>