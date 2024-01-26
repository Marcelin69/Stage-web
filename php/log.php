<?php
include_once('../class/classconnect.php');
$pdo=new Stage();
if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["mail"])&& 
isset($_POST["tel"]) && isset($_POST["commentaire"])){ 
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $mail=$_POST["mail"];
    $tel=$_POST["tel"];
    $commentaire=$_POST["commentaire"];
  $req=$pdo-> execute("INSERT INTO `staget`(`nom`, `prenom`, `mail`, `telephone`, `commentaire`) VALUES('$nom','$prenom','$mail','$tel','$commentaire')");
  header("location:..\index.php?susser=1&&message=merci pour votre commentaire");
}

?>
 <?php
if(isset($_GET["susser"]) && isset($_GET["message"])){
    echo '<script type="text/javascript">
  alert("merci pour votre commentaire"); 
</script> ';
}
 ?> 
<?php
 for($i=0;$i<=100;$i++){
  echo($i);    
}
?> 