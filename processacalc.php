<?php
$n1 = ($_POST ['numero1']);
$n2 = ($_POST ['numero2']);

$adicao = $n1 + $n2;
$subtracao = $n1 - $n2;
$multiplicacao = $n1 * $n2;
$divisao = $n1 / $n2;

$data = ['adicao' => $adicao, 'subtracao' => $subtracao, 'multiplicacao' => $multiplicacao, 'divisao' => $divisao];

echo json_encode($data);