<div class="table-responsive-md small">
                    <table class="table table-bordered table-hover table-striped table-sm">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col" style="width:40px;">#</th>
                                <th scope="col">Código</th>
                                <th scope="col">nomeCompanhia</th>

                                <th scope="col">contato</th>
                                <th scope="col" >Telefone</th>
                                <th scope="col" >Cidade</th>
                                <th scope="col" >Pais</th>

                            
                                <th scope="col"  style="width: 40px;"></th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($linha = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <!-- coluna com botao alterar -->
                                    <td class="text-center">
                                        <a href="categoria_cadastro.php?id=" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Clique para alterar o registro">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </td>
                                    <!--fim columa com botao alterar -->
                                    <!-- começo do botao excluir -->
                                    <td class="text-center"><?php echo ($linha["IDFornecedor"]); ?></td>
                                    <td><?php echo ($linha["nomeCompanhia"]); ?></td>
                                    <td><?php echo ($linha["nomeContato"]); ?></td>
                                    <td><?php echo ($linha["Telefone"]); ?></td>
                                    <td><?php echo ($linha["Cidade"]); ?></td>
                                    <td><?php echo ($linha["Pais"]); ?></td>
                                    <!-- final começo do botao excluir -->


                                <!-- lixeira -->
                                    <td class="text-center">
                                        <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#excluirModal">
                                            <span data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Clique para excluir o registro">
                                                <i class="bi bi-trash-fill"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- selecionar imagem -->
                    <form  id="formUpload" method="post" enctype="multipart/form-data">

                        <div class="mb-3 d-none" >
                            <label for="formFile" class="form-label">Selecionar Arquivo</label>
                            <input accept="image/*" class="form-control" type="file" id="UploadImage" name="UploadImage" onchange="enviar();">

                        </div>
                        <input type="hidden" id="categoria" name="categoria" class="form-control">
                        
                    </form>

                </div>