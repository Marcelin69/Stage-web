<?php

class Stage{
public $satge;
function __construct(){
  $this->stage=new PDO('postgres://stage_ha36_user:wFR2reZtg3Er1nagwk3AJXwaLag9gHpa@dpg-cmps32g21fec73cjhjk0-a/stage_ha36');
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