<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["UploadImage"])) {
        // echo('Imagem Enviada!<br>');
        // echo($_FILES["UploadImage"]['name']);

        if (isset($_FILES["UploadImage"]["name"]) >= 5) {

            // echo getcwd() . '<br>';
            // echo dirname(__FILE__) . '<br>';
            // echo basename(__DIR__) . '<br>';
            // echo ($_FILES["UploadImage"]['tmp_name']);

            $pasta = getcwd() . "\\image\\categoria\\";
            $arqTemp = $_FILES["UploadImage"]["tmp_name"];
            $arquivo =$pasta . $_FILES["UploadImage"]["name"];
            move_uploaded_file($arqTemp,$arquivo);
            if (isset($_POST["categoria"])){
                $id = $_POST["categoria"];
                if(is_numeric($id)){
                    $arq_novo = $_FILES["UploadImage"]["name"];
                    $sql = "UPDATE categorias set FOTO = '$arq_novo'
                    where IDCategoria = $id";
                    mysqli_query($conn,$sql);

                }
            }

        }
    }
}
