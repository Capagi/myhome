<?php
ob_start();

include_once("conexao.php");
if(isset($_POST["cadastrar"])){
    
    $name=$_POST["name"];
    $user_name=$_POST["username"];
    $data=$_POST["dataNasc"];
    $sexo=$_POST["sexo"];
    $email=$_POST["email"];
    $pais=$_POST["pais"];
    $provincia=$_POST["provincia"];
    $Pass=$_POST["password"];
    $Pass1=$_POST["password2"];
 if($Pass==$Pass1){
     echo $Pass;
     echo $Pass1;
    try {
       
     $criptsenha=password_hash($Pass, PASSWORD_DEFAULT);
   
        $sqlInsertQuery="INSERT INTO user( `user_nome`, `dataNasc`, `sexo`, `email`, `contry`, `provincia`, `Password` ) VALUES( :nome, CURRENT_DATE(), :sexo, :email, :pais, :provincia, :pass);";
        $operation=$conection->prepare($sqlInsertQuery);
        $conection->beginTransaction();
        $operation->execute([
            
            'nome'=> $name,
            'sexo'=> $sexo,
            'email'=>$email,
            'pais'=> $pais,
            'provincia'=>$provincia,
            'pass'=>$criptsenha,
    
        ]);
        $conection->commit();
        } 
        catch (\Exception $error) {
            if($conection-> inTransaction()){
                $conection->rollBack();
            }
            throw $error;
        }
    } else{echo" <script> alert('As palavras passes não são iguais... Tente novamente')</script>";} 
   
    
    
    


}


/*
try {
    
    $sqlQuery="UPDATE user SET user_nome=:name";

    $operation=$conection->prepare($sqlQuery);
    $conection->beginTransaction();
    $operation->execute(["name" =>'Lukenny']);
    $conection->commit();


} 

catch (\Exception $error) {
    if($conection->inTransaction()){
        $conection->rollBack();
    }
    throw $error;
}

*/
//Forma para dinamizar a site
/*
$tipoimovel="Apartamento";
$price="2.000.000" + "Kzs";
$descImovel="Arrendamento. Composto por 3 quartos, sala, cozinha e dois Banheiros no condominnio Dolce Vita"
$imagem=$_FILES["imagemImovel"];

<div class="col-md-4">
<div class="product-item">
  <a href="products.php">$imagem</a>
  <div class="down-content">
    <a href="products.php"><h4>$tipoimovel </h4></a>
    <h6>$price</h6>
    <p>$descImovel</p>
    <ul class="stars">
      <li><i class="fa fa-star"></i></li>
      <li><i class="fa fa-star"></i></li>
      <li><i class="fa fa-star"></i></li>
      <li><i class="fa fa-star"></i></li>
      <li><i class="fa fa-star"></i></li>
    </ul>
    <span>Reviews (24)</span>
  </div>
</div>
</div>
*/
session_start();
if(isset($_POST["iniciarSessao"])){
    try {
        $emailLogin=$_POST["inputEmail"];
    $passordLogin=$_POST["inputPassword"];
    $sqlSelectQuery="SELECT email FROM user WHERE email='$emailLogin'";
    $operation=$conection->prepare($sqlSelectQuery);
    $operation->execute();
    $linha=$operation->rowCount();
    if($linha>0):
       
        //$passordLogin=password_hash($passordLogin, PASSWORD_DEFAULT);
        
        $sqlSelectQuery="SELECT Password FROM user WHERE email='$emailLogin' ";
        $operation=$conection->prepare($sqlSelectQuery);
        $operation->execute();
        
        /*while($data=$operation->fetch(PDO::FETCH_ASSOC)):
            $criptsenha=$$data["Password"];
        endwhile;*/
        $data=$operation->fetch();
        $criptsenha= $data["Password"];
       // $criptsenha=$data["Password"];
        if(password_verify($passordLogin,$data["Password"] )):
            $linha=$operation->rowCount();
            if($linha==1):
                    $data=$operation->fetchAll(PDO::FETCH_ASSOC);
                    $_SESSION["logado"]=true;
                    $_SESSION["id_user"]=$data["id_user"];
                    header("Location:http://localhost/tcc/Imobili%c3%a1ria/index.php");
                    echo "madou";
                ;
            endif; 
        
        endif;
       
    else: 
    endif;
    } catch (\Exception $error) {
        if($conection-> inTransaction()){
            $conection->rollBack();
        }
        throw $error;
    }
    
    
    /*
    $sqlSelectQuery="SELECT * FROM user WHERE email='$emailLogin' AND Password= '$passordLogin' ";
    $operation=$conection->prepare($sqlSelectQuery);
    $operation->execute();
    
    if($linha=$operation->fetch(PDO::FETCH_ASSOC)){
        $user=$linha["user_nome"];
        $senha=$linha["Password"];
        echo $senha;
        if(password_verify($passordLogin, $senha)){
            header("Location:http://localhost/tcc/Imobili%c3%a1ria/index.php");
        }

        session_start();
        $_SESSION["user"]=$user;
        $_SESSION["senha"]=$senha;
        
        echo $user;
        
    }
    */
}
if(isset($_POST["EnviarImovel"])){
    try {
        $desc=$_POST["descImovel"];
        $preco=$_POST["price"];
        $tipo=$_POST["tipoImovel"];
        $va=$_POST["Operation"];
        $nomeimovel=$_FILES["fotoImovel"]["name"];
        $typesImg= array("image/jpg", "image/jpeg", "image/png", "image/bmp", "image/gif");
        $arquivo= $_FILES["fotoImovel"];
        $locate="C:/wamp64/www/TCC/Imobiliária/imoveis/";
        $locate=$locate;
       

        
        $locate=$locate . $arquivo["name"];
        if(is_file($_FILES["fotoImovel"] ["tmp_name"])){
            if(file_exists($locate . $arquivo["name"])){
                $cont=1;
                while(file_exists($locate . $nomeimovel)){
                    $cont++;
                }
                $fotoImovel="[$cont]$nomeimovel";
            }
        if(in_array($arquivo["type"], $typesImg)){
        include_once("conexao.php");
        $sqlInsertQuery="INSERT INTO `imoveis` ( `descImovel`, `preco_imovel`, `foto`, `tipoImovel`, `VA`) VALUES (:desc, :preco, :foto, :tipo, :VA);";
        $operation=$conection->prepare($sqlInsertQuery);
        $conection->beginTransaction();
        $operation->execute([
            'desc'=>$desc ,
            'preco'=>$preco,
            'foto'=>$arquivo["name"],
            'tipo'=>$tipo,
            'VA'=>$va          
        
        ]);
        $conection->commit();
        
        if($operation):
            if(move_uploaded_file($arquivo["tmp_name"], $locate)) echo"
            <script> alert('Imóvel carregado com sucesso querido'); Location:'addImovel.php' </script>
            ";
        endif;
            
        
        }else echo " <script> alert('Tipo de arquivo inválido querido'); Location='addImovel.php' </script> ";
        
        
        }    


    } catch (\Exception $error) {
        if($conection-> inTransaction()){
            $conection->rollBack();
        }
        throw $error;
    }


}