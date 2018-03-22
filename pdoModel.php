<?php

class pdoModel{

	private $connexion;

	public function __construct($bdd){
	$this->connexion=$bdd;
	}
//insérer un article dans la db
	function insert(){

		$this->titre = $_POST['titre'];
		$this->createdAt = $_POST['createdAt'];// il peut y avoir un problème de format entre ce que renvoi le html et ce que prend la DB
		$this->lieu = $_POST['lieu'];
		$this->description = $_POST['description'];
		//$this->mail=$_POST['photo'];

		$req = $this->connexion->prepare('INSERT INTO articles (titre, createdAt, lieu, description) VALUES (:titre,:createdAt ,:lieu,:description)');
		$req->execute(array(
				'titre'=>$this->titre,
				'createdAt'=>$this->createdAt,
				'lieu'=>$this->lieu,
				'description'=> $this->description
			));
	}



	
//delete un article 	

//dans le coté admin faire une check box des articles et les delete en récupérent l'ID de l'article coché.

	function deleteChecked() {
	/*$this->article=$_POST['ID'];//id correspondant au a l'article dans la db

	$req = $this->connexion->prepare('DELETE FROM articles WHERE ID=:article ');
	$req->execute(array(
			'article'=>$this->article
	));*/

		
  $this->checkedItem = $_POST['articles'];

  if(empty($this->checkedItem)) {

    echo("You didn't select any event.");
  }
  else{
    $N = count($this->checkedItem);
 
    echo("You selected $N item(s): ");

    for($i=0; $i < $N; $i++)  {

    	$sql = "DELETE FROM articles WHERE ID=".$this->checkedItem[$i];
		$sql = str_replace('/', '', $sql);
   		$req = $this->connexion->exec($sql);
    }
  }

	}

//nous seras utile pour le login de l'admin
	function select(){

		$this->name = $_POST['yourname'];
		$this->password = $_POST['password'];

		$req = $this->connexion->prepare('SELECT ID FROM user WHERE name =:name AND password =:password');
		$req->execute(array(
				'password'=>$this->password,
				'name'=>$this->name
			));
		$donnees=$req->fetch();

		return $donnees['ID'];
	}
//en cas d'image
	function selectImage() {

		$req = $this->connexion->query('SELECT * FROM image');
		return $req;
		
	}

		function selectEvents() {

		$req = $this->connexion->query('SELECT * FROM articles');
		return $req;
		
	}

//gestion d'images 
	/*function delete() {
		$this->img=$_POST['ID'];//id correspondant au chemin dans la db
		$requete = $bdd->prepare('DELETE FROM image WHERE name=:img ');
		$req->execute(array(
				'img'=>$this->img
		));


	}*/
//upload d'images	
	 function upload() {

		if(!empty($_FILES)){
			$img = $_FILES['img'];
			$extensions= strtolower(substr($img['name'], -3));
			$extensions_valides = array( 'jpg' , 'gif' , 'png' );
			if (in_array($extensions,$extensions_valides)) {
			  $this->$newId= md5(uniqid(rand(), true));
			  $this->$chemin = move_uploaded_file($img['tmp_name'], "images/". $img['name'].$newId);

			  $this->title=$_POST['imageTitle'];
			$this->description=$_POST['imageText'];
			$req = $this->connexion->prepare('INSERT INTO images(chemin,nom,description) VALUES (:chemin,:imageTitle,:imageText)');
			$req->execute(array(

				'chemin'=>$this->chemin,
				'imageTitle'=>$this->title,
				'imageText'=>$this->description

				));
			  echo "transfert reussi !";

			}else {
			  $erreur = "Erreur, fichier non autorisé !";
			  echo "$erreur";
			}
		}
	}
} // end class pdo
/*


	}function update(){

		$requete = $this->connexion->prepare('UPDATE user SET variable_à_changer WHERE id=id');
		$req->execute(array(
			'ID'=>$__session['id'];
			$variable a changer

			));
	*/



?>
