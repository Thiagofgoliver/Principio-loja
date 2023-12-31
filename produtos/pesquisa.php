    <?php

    $where = "where 1=1";
    $nome="";
    $categoria="";
    $inativo ="";

    if($_SERVER["REQUEST_METHOD"]=="POST") {
        if(isset($_POST["nomeProduto"])){
            $nome=$_POST["nomeProduto"];
            if(strlen($nome)>0){  //validar se for escrito algo no input text
                $where.=" and p. nomeProduto LIKE '%$nome%'";


            }

        }
        if(isset($_POST["categoria"])){
            $categoria =$_POST["categoria"];
            if(is_numeric($categoria)){ //validar se foi escolhido um numero de categoria
                $where.=" and p.IDCategoria=$categoria";
            }

        }
        if(isset($_POST["inativo"])){
            $inativo = $_POST["inativo"];
            if($inativo == "checked"){
                $where.= " and p.Descontinuado = 'T' ";
            }

        }

    }

    $sql = "SELECT p.IDProduto ,p.NomeProduto, 
    c.NomeCategoria, FORMAT(p.PrecoUnitario,2,'pt_BR')PrecoUnitario,
   case when p.Descontinuado = 'T' then 
   '<span class=\"text-danger\">INATIVO</span)' ELSE
   '<span class=\"text-primary\">ATIVO</span)'
   END AS  StatusProduto
   
   FROM  produtos AS p
   INNER JOIN categorias AS c ON (p.IDCategoria =c.IDCategoria)
   $where
   ORDER BY NomeProduto; ";

    //Conectar o BD e pegar o resultado da sql
    $result = mysqli_query($conn, $sql);
    //Guardar o total de linhas da sql
    $total = mysqli_num_rows($result);


    ?>