<?php
 ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Carregarnovo imóvel</title>
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/tooplate-style.css">
    <link rel="stylesheet" href="general_style.css">
    
</head>
<body>




<div class="tm-section caixa_pesquisa" id="tm-section-1">
    <div class="tm-bg-white ie-container-width-fix-2">
        <div class="container ie-h-align-center-fix">
            <div class="row">
                
                </div>
                    <div class="form-group tm-form-element tm-form-element-2">
                    <form action="addImovel.php" method="post" class="tm-search-form tm-section-pad-2" enctype="multipart/form-data">
                        <div class="form-row tm-search-form-row">
                            
                        
                            
                                <div class="form-row tm-search-form-row">
                            <div class="form-group tm-form-element tm-form-element-2">                                            
                                <select name="tipoImovel" class="form-control" id="tipoImovel">
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
                                    <option value="Arrendamento">Arrendamento</option>
                                    <option value="Venda">Venda</option>
                                    
                                    
                                </select>
                                <i class="fa fa-2x fa-plus tm-form-element-icon"></i>
                            </div>
                            <div class="form-group tm-form-element tm-form-element-100">
                                            <i class="fa fa-search fa-2x tm-form-element-icon"></i>
                                            <input name="price" type="text" class="form-control" id="price" placeholder="Preço do Imóvel">
                                        </div>
                            <div class="form-group tm-form-element tm-form-element-100">
                                <i class="fa fa-image fa-2x tm-form-element-icon"></i>
                                <input type="file"  name="fotoImovel" class="form-control">
                            </div>
                            <div class="form-group tm-form-element tm-form-element-100">
                                <textarea name="descImovel"  cols="51" rows="3" placeholder="Descrição do imóvel"></textarea>
                            </div>
                

                    </form>

                        <button type="submit"  class="btn btn-lg btn-primary btn-block" name="EnviarImovel">Publicitar Imóvel </button>
                        
                        
                        
                        </div>
                    </div>
                    
                            
                    </form>
                </div>                        
            </div>      
        </div>
    </div>                  
</div>



</body>
</html>

<?php

include_once "conexao.php";
include_once("Backmysql.php");












ob_end_flush();





















?>