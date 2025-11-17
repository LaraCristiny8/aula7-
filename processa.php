<?php
include "includes/util.php";

$nome = limpar($_POST ['nome']);

echo "Nome tratado: ". $nome;