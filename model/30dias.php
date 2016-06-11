
<?php

$dados [0]= array('data'=>'10/06/2015',
    'descricao'=>'Mc Donalds',
    'categoria'=>'Refeição',
    'tipo'=>'D',
    'valor'=>24.89);
$dados [1]= array('data'=>'9/06/2015',
    'descricao'=>'Estacionamento',
    'categoria'=>'Veículo',
    'tipo'=>'D',
    'valor'=>24.89);
$dados [2]= array('data'=>'5/06/2015',
    'descricao'=>'Salário',
    'categoria'=>'Rendimento',
    'tipo'=>'C',
    'valor'=>800.00);


echo json_encode($dados);


