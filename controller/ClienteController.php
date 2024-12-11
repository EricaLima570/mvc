<?php
include "./model/Cliente.php";
//tem que ter um objeto model e um objeto dao
class ClienteController{
    private $cliente;
    private $cliente_dao;


public function __contruct(){
    $this->cliente= new Cliente();
    //$this->cliente_dao=new clienteDAO();//a parte do DAO tem que ser toda em letr maiscula.
    //instanciamento da camada DAO
}

public function index(){
    header('location:view/Cliente/mostrar_tudo.php');

}
public function create(){// esse metodo vai ligar o meu controlador com a camada view , ele tem que requerer o arquivo inserir da camada view
    //aqui vou usar um mecanismo para requerir o arquivo inserir  a ser utilizado 
    header('location:view/Cliente/inserir.php');//função que faz requisição http
}
public function show(){
    
}
public function store(){
    
}
public function edit($id){
    header('location:view/cliente/atualizar.php');
    
}
public function update(){
    
}
public function delete(){
    
}
}