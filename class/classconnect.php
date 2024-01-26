<?php

class Stage{
public $satge;
function __construct(){
  $this->stage=new PDO('mysql:host=localhost;dbname=stagep;charset=utf8','root','');
}

function fetchAll($query){
  $tpm=$this->stage->prepare($query);
  $tpm->execute();
  return $tpm->fetchAll();

}

function fetch($query){
  $tpm=$this->stage->prepare($query);
  $tpm->execute();
  return $tpm->fetch();

}  


function execute($query){
  $tpm=$this->stage->prepare($query);
  $tpm->execute();
}  


}


?>