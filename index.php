<!DOCTYPE html>
<html lang="en">


  <head>
  <?php
include_once("Backmysql.php")


?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Imobiliária</title>

    <!-- Bootstrap -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- arquivos CSS  -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/tooplate-style.css">
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
          <a class="navbar-brand" href="index.php"><h2>Compre <em>Agora</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.php">imóveis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.php">Brevemente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">acerca de nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Fale conosco</a>
              </li>
              <li class="nav-item  ">
              <button type="button" class="btn btn-primary btn-lg fa fa-user" data-toggle="modal" data-target="#myModal">
              &nbsp; sign-up
              </button>
              </li>
              <li class="nav-item">
                <div class="userdata"></div>
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

<!--Login-->
<div class="text-center">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
              <div class="text-center">
                <form class="form-signin" action="phpDatabase.php" method="POST">
                  <div class="text-center"><i class="fa fa-4x fa-user"></i></div>
                      
                      <h1 class="h3 mb-3 font-weight-normal">Iniciar sessão</h1>
                      <label for="inputEmail" class="sr-only">Email</label>
                      <input type="email" name="inputEmail" class="form-control" placeholder="Email" required autofocus>
                      <label for="inputPassword" class="sr-only">Password</label>
                      <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
                     <div class="checkbox mb-3">
                     <label>
                          <input type="checkbox" value="remember-me"> Remember me
                        </label>
                     </div>
                      <button class="btn btn-lg btn-primary btn-block" name="iniciarSessao" type="submit">Iniciar sessão</button>
                      <a href="phpDatabase.php"> Iniciar nova conta</a>
                      <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
                    </form>
                </div>
                  
              
            </div>
            <div class="modal-footer">
              
            <button type="button" class="btn btn-secondary" data-dismiss="modal">fechar</button>
              <button type="button" class="btn btn-primary">Salvar alteracões</button>
            </div>
          </div>
        </div>
      </div>

</div>



<!--caixa de pesquisa-->

<div class="tm-section caixa_pesquisa " id="tm-section-1">
                <div class="tm-bg-white ie-container-width-fix-2">
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
                          
                          </div>
                              <div class="form-group tm-form-element tm-form-element-2">
                                <form action="index.php" method="get" class="tm-search-form tm-section-pad-2">
                                   <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-100">
                                            <i class="fa fa-search fa-2x tm-form-element-icon"></i>
                                            <input name="texto" type="text" class="form-control" id="textoGeral" placeholder="Pesquisa geral">
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-100">
                                            <i class="fa fa-search fa-2x tm-form-element-icon"></i>
                                            <input name="texto" type="text" class="form-control" id="textoGeral" placeholder="Pesquisa geral">
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-100">
                                            <i class="fa fa-search fa-2x tm-form-element-icon"></i>
                                            <input name="texto" type="text" class="form-control" id="textoGeral" placeholder="Pesquisa geral">
                                        </div>
                                        
                                         <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-2">                                            
                                            <select name="tipoImovel" class="form-control tm-select" id="tipoImovel">
                                                <option value="Apartamento">Apartamento</option>
                                                <option value="Vivenda">Vivenda</option>
                                                <option value="Terrenos">Terrenos</option>
                                                <option value="Escritórios">Escritórios</option>
                                                <option value="salões">salões de festa</option>
                                                
                                            </select>
                                            <i class="fa fa-2x fa-home tm-form-element-icon"></i>
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-2">                                            
                                            <select name="Operation" class="form-control tm-select" id="operation">
                                                <option value="Apartamento">Arrendamento</option>
                                                <option value="Vivenda">Compra</option>
                                                
                                                
                                            </select>
                                            <i class="fa fa-2x fa-plus tm-form-element-icon"></i>
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-2">                                            
                                            <select name="valorInicial" class="form-control tm-select" id="valorInicial">
                                                <option value="PreçoInicial">Preço Inicial</option>
                                                <option value="0">200.000,00 Kzs</option>
                                                <option value="1">500.000,00 Kzs</option>
                                                <option value="2">1.000.000,00 Kzs</option>
                                                <option value="3">5.000.000,00 Kzs</option>
                                               
                                            </select>
                                            <i class="fa fa-2x fa-money tm-form-element-icon "></i>
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-2">
                                            <select name="PreçoFinal" class="form-control tm-select" id="PreçoFinal">
                                                <option value="Preço Final">Preço Final</option>
                                                <option value="1">50.000.000,00 Kzs</option>
                                                <option value="2">60.000.000,00 Kzs</option>
                                                <option value="3">80.000.000,00 Kzs</option>
                                                <option value="4">100.000.000,00 Kzs</option>
                                                <option value="5">200.000.000,00 Kzs</option>
                                                
                                            </select>
                                            <i class="fa fa-2x fa-money tm-form-element-icon"></i>
                                        </div>


                                </form>

                                  <button type="submit" class="btn btn-primary tm-btn-search" name="pesquisar">Pesquisar </button>
                                  <?php  if(isset($_GET["pesquisar"]))  header("Location:http://localhost/tcc/Imobili%C3%A1ria/about.php"); ?>
                                  
                                  
                                  </div>
                                </div>
                                
                                      
                                </form>
                            </div>                        
                        </div>      
                    </div>
                </div>                  
            </div>






<!--Fim caixa de pesquisa-->
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Melhor Oferta</h4>
            <h2>Novos imóveis a venda</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Negócios rápidos</h4>
            <h2>Consiga o melhor imóvel para si</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Deadline</h4>
            <h2>AGORA ou NUNCA</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Destaques</h2>
              <a href="products.php">Ver todos os imóveis <i class="fa fa-angle-right"></i></a>
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

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Precisa de escritórios??</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Aqui você encontra uma vasta gama de escritórios a bom preço</h4>
              <ul class="featured-list">
                <li><a href="#">Apartamentos</a></li>
                <li><a href="#">Escritórios</a></li>
                <li><a href="#">Vivendas</a></li>
                <li><a href="#">Terrenos</a></li>
              </ul>
              <a href="about.php" class="filled-button">Ler mais</a>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="imgp/vivenda-v3-em-condominio-real-talatona-big-78169.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Apartamentos Bonitos &amp; de qualidade <em>a bom</em> preço</h4>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Comprar agora</a>
                </div>
              </div>
            </div>
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
            
            - Design: <a rel="nofollow noopener" href="#" target="_blank">Lukennny Capagi</a></p>
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
