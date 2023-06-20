    <?php
    $sql = "SELECT p.IDProduto ,p.NomeProduto, 
    c.NomeCategoria, FORMAT(p.PrecoUnitario,2,'pt_BR')PrecoUnitario,
   case when p.Descontinuado = 'T' then 
   '<span class=\"text-danger\">INATIVO</span)' ELSE
   '<span class=\"text-primary\">ATIVO</span)'
   END AS  StatusProduto
   
   FROM  produtos AS p
   INNER JOIN categorias AS c ON (p.IDCategoria =c.IDCategoria)
   ORDER BY NomeProduto; ";

    //Conectar o BD e pegar o resultado da sql
    $result = mysqli_query($conn, $sql);
    //Guardar o total de linhas da sql
    $total = mysqli_num_rows($result);


    ?>