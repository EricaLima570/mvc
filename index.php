<?php
include "./controller/ClienteController.php";

$classe = $_GET['classe'].'Controller';//o que eu vou digitar em classe na url do get vai ser o que vou concatenar com Controller 
$metodo = $_GET['acao'];
$id = $_GET['id'];


$controller= new $classe();

//faço a verificação abaixo para quando for edit ou index, pois um exige passagem de argumentos e o outro não

if ( isset ($_GET['id'])){
    $controller->$metodo($id);

}
else{
    $controller-> $metodo();
}

//http://localhost:8000/?classe=Cliente&acao=index
//http://localhost:8000/?classe=Cliente&acao=edit&id=1






/*$obj = new ClienteController();
$obj-> index();

teste antigo

$obj-> edit(1);*/

