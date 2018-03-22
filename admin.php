
<?php 
if(!$_SESSION['admin']){
    header('Location: http://localhost/mazy_culture/index.php?action=admin');
}
    ?>

<h1>Bonjour Maître Alexandre, vous êtes connecté...</h1>
<a href="http://localhost/mazy_culture/index.php?action=disconnected">cliquez ici pour vous déconnecter</a>


<form action="views/delete.php" method="post">

<?php
	$user = 'id5003612_fil';
	$pass = '1filRouge?';


	$bdd = new PDO('mysql:host=localhost;dbname=id5003612_filrouge;charset=utf8', $user, $pass);

    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	require 'pdoModel.php';
	$admin = new pdoModel($bdd);
  $reponse = $admin->selectEvents();
    while ($events = $reponse->fetch()){
?>
    <input type="checkbox" name="articles[]" value= <?php echo $events['ID'] ?>/>
    <div><?php echo $events['titre']; ?>;</div>

<?php
}
?>
    <input type="submit" name="supprimer" value="supprimer">
</form>