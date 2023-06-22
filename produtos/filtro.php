<form method="post">

    <div class="card mb-3" action="">
        <div class="card-header">
            pesquisa
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="nomeProduto" value="<?php
                                                                                        echo ($nome); ?>" name="nomeProduto" placeholder="Nome do produto">
                        <label for="nomeProduto">
                            produto
                        </label>
                    </div>
                </div>
                <!-- selecione -->
                <div class="col-md-4">
                    <div class="form-floating">
                        <select class="form-select" id="categoria" name="categoria" aria-label="Floating label select example">
                            <option>selecione uma categoria</option>
                            <?php

                            $sql = "SELECT IDCategoria,NomeCategoria FROM categorias ORDER BY NomeCategoria";

                            $lista = mysqli_query($conn, $sql);
                            while ($item = mysqli_fetch_array($lista)) {
                                $selecionar = ($item[0] == $categoria) ? "selected" : ""; //if ternario


                                //mesma coisa do codigo de cima mais de forma classica
                                /*
                            if($item[0]==$categoria){
                                $selecionar="selected";

                            } else{
                                $selecionar="";
                            }
                            */
                                echo ("<option  $selecionar value='$item[0]'>$item[1]</option>");
                            }
                            ?>


                        </select>
                        <label for="floatingSelect">categoria</label>
                    </div>
                </div>
                <div class="col-md-4 pt-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="inativo" name="inativo" 
                        value="checked" <?php
                
                        echo($inativo);
                        ?>>
                        <label class="form-check-label" for="inativo">Somente Inativos</label>
                    </div>

                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-primary">
                        <i class="bi bi-file-earmark"></i>
                        novo
                    </button>
                </div>
                <!-- final do selecione -->

                <div class="col-6 text-end">

                    <button type="submit" class="btn btn-secondary">
                        <i class="bi bi-search">
                        </i>
                        pesquisa
                    </button>
                </div>

            </div>
        </div>

</form>