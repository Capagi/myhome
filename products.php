<!DOCTYPE html>
<html lang="en">

  <head>
  <?php
include_once("Backmysql.php");
include_once("conexao.php");


?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Imóveis</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="general_style.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Imóveis<em>Disponivel</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="products.php">Imóveis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Brevemente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">acerca de nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">fale conosco</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Actualizados</h4>
              <h2>Imóveis do site</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">Ver todos</li>
                  <li data-filter=".des">Apartamentos</li>
                  <li data-filter=".dev">Vivendas</li>
                  <li data-filter=".gra">Terrenos</li>
                  <li data-filter=".gra">Escritórios</li>
              </ul>
            </div>
          </div>

             <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Destaques</h2>
              <a href="products.html">Ver todos os imóveis <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
         
          <?php
                $sqlSelectQuery="SELECT * FROM imoveis;";
                $operation=$conection->prepare($sqlSelectQuery);
                $operation->execute();
                while($arrayImovel=$operation->fetch()):
                   ?>
        

          <div class="product-item">
              <a href="#"><img src="imoveis/<?= $arrayImovel['foto'] ?>" alt=""  ></a>
              <div class="down-content">
                  <a href="#"><h4><?= $arrayImovel['VA']?></h4></a>
                  <h6><?= $arrayImovel['preco_imovel']?></h6>
                  <p><?= $arrayImovel['descImovel']?></p>
                  <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                <span>Vista (12)</span>
              </div>
           </div>



          <?php
                endwhile;
                    ?>              



        </div>
      </div>
    </div>
          <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>                   

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2022 Imobiliária, Ltd.
            
            - Design: <a rel="nofollow noopener" href="#" target="_blank">Lukenny Capagi</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
