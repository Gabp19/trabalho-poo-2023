<?php
include once 'app/model/Servico.php';
include once 'app/view/ServicoView.php';

echo "<h1> Serviços </h1>";
//Instanciar as classes ()

$servicoView = new ServicoView();

$servicoView -> exibirServicos();



?>