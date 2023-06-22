<!-- Modal -->
<div class="modal fade" id="excluirModal" tabindex="-1" aria-labelledby="excluirModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-danger" id="excluirModalLabel">
                    <i class="bi bi-trash-fill"></i> Excluir
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    Deseja excluir o registro selecionado?

                </div>
                <input type="text" class="form-control" readonly id="textoExcluir" name="TextExcluir">

            </div>
            <!--  input para mostrar o id -->
            <div class="mt-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">ID:</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control" id="idExcluir" name="idExcluir">
                </div>
            </div>
            <!--  input para mostrar o id -->





            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-arrow-counterclockwise"></i> Cancelar</button>
                <button type="button" class="btn btn-success"><i class="bi bi-trash-fill"></i> Excluir</button>
            </div>
        </div>
    </div>
</div>


<script>
    function excluir(id, nome) {
        $("#textoExcluir").val(nome);
        $("#idExcluir").val(id);



    }
</script>