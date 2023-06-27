<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
}
elseif(isset($_GET["id"])){
    $id = $_POST["id"];
}else{
    $id= 0;
}


$sql = "SELECT * FROM Produtos WHERE IDproduto =$id";
$result = mysqli_query($conn,$sql);
$total = mysqli_num_rows($result);

$tipo ="NOVO REGISTRO";
if($total == 1){
    $tipo ="ALTERANDO REGISTRO";

    $linha = mysqli_fetch_array($result);

   $dados=[
    $linha["IDProduto"],
    $linha["NomeProduto"],
    $linha["QuantidadePorUnidade"],

    

    
    ];


}
?>