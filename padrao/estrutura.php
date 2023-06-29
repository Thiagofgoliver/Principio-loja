
<?php
function textBox($titulo, $coluna, $tamanho, $requerido = false, $validacao = "" ,$valor)
{
    $requerido = ($requerido == false) ? "" : "required";
    echo ('<label for="' . $coluna . '" class="form-label fw-semibold mb-1">');
    echo (' <small>');
    echo ('<i class="bi bi-info-circle" data-bs-placement="right" data-bs-toggle="tooltip" data-bs-title="' . $validacao . '"></i>');
    echo ($titulo);

    if ($requerido == "required") {
        echo ('<sup>');
        echo (' <i class="bi bi-asterisk text-danger" data-bs-placement="right" data-bs-toggle="tooltip"data-bs-title="campo obrigatorio"></i>');
        echo (' </sup>');
    }

    echo ('</small>');
    echo ('</label>');
    echo ('<div class="input-group has-validation">');
    echo (' <input type="text" value="'.$valor.'" class="form-control"  maxlength="' . $tamanho . '" id="' . $coluna . '" name="' . $coluna . '" ' . $requerido . '>');
    echo ('<div class="invalid-feedback">');
    echo ($validacao);
    echo ('</div>');
    echo ('</div>');
}
