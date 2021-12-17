<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Best Guitar Shop</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel = "icon" href = "../upload/icon.png" type = "image/x-icon">    
  </head>
    <style>
      *{
        font-family:'Poppins';
      }
      .border{
        border: 0;
      }
      .cardChida{
        display:flex; 
        flex-wrap:wrap; 
        align-items: center; 
        justify-content: center; 
        align-content:center; 
        margin: 0 30px 50px 30px;
      }
      .titlePage{
        font-size:28px;
        font-weight: bold;
        padding-left: 40px;
        letter-spacing: 3.5px;
      }
      .bC{
        background-color: #3e214e;
        filter: blur(.3px);
      }
    </style>
  <body>

    <nav class="navbar navbar-expand-lg bC" style>    
      <div class="container-fluid">    
        <a class="navbar-brand text-light titlePage" style="font-family:'Quicksand';" href="#">Acorde's</a>     
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">     
          <span class="navbar-toggler-icon"></span>    
        </button>    
        <div class="collapse navbar-collapse" id="navbarScroll">     
          <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px; width:100%; display:flex; justify-content:flex-end;">    
            <li class="nav-item" style="margin-left: 40px; margin-right: 40px;">    
              <a class="nav-link text-light" href="../../index.php">Home</a>     
            </li>
            <li class="nav-item" style="margin-left: 40px; margin-right: 40px;">    
              <a class="nav-link active text-light" aria-current="page" href="pedidos/index.php">Pedidos</a>    
            </li>    
            <li class="nav-item" style="margin-left: 40px; margin-right: 40px;">    
              <a class="nav-link text-light" href="guitarras/index.php">Guitarras</a>     
            </li>                      
          </ul>      
        </div>     
      </div>     
    </nav>
    
    <div class="container" id="main">
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

  </body>
</html>
