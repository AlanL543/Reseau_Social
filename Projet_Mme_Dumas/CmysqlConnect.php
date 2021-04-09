<?php
require 'maClasseUser.php'; //On inclut la classe 
class MysqlConnect{
	// la donnée membre privée (private) 
	private $pdo;
	// constructeur initialise la donnée membre 
	function __construct(){ // constructeur de la classe MysqlConnect
	try {
		// initialisation de $pdo avec une connexion à localhost et mabase
		  $this->pdo = new PDO("mysql:host=localhost;dbname=projet","root","root");
		  // set the PDO error mode to exception: pour gérer l'erreur de connexion
		  $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // traitement de l'erreur
		} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();}
	return $this->pdo;} // constructeur retourne la variable de connexion
	
	// getteur permet de récupérer la valeur de la variable de connexion
	function getPdo(){
	return $this->pdo;}
	
	// Fonction qui permet de retourner la liste de tous les objets Cusers instanciés
	// à partir des données récupérées dans la table tusers
	function getAllData(){
	
		$req=$this->pdo->query('SELECT * FROM tusers');
		$result=$req->fetchAll(); //On stock les résultats dans un tableau 
				$retour=array(); //On créé une liste vide
				
		foreach($result as $value){ //Pour chaque valeur dans le tableau result
					array_push($retour,new Cusers($value)); //On ajoute à la liste retour un nouveau utilisateur
				}
		return $retour; // on retourne le tableau d'objets...
		}
	// Fonction qui récupère les données d'un utilisateur dont on connait le $nom et instancie l'objet users de nom $nom
	function getOneData($nom){ 
		// exécution de la requête de sélection de l'utilisateur:
		$req=$this->pdo->query("SELECT * FROM tusers WHERE nom= '$nom'");
		// récupération du tableau associatif contenant les données de l'utilisateur:
		$result = $req->fetch(PDO::FETCH_ASSOC); 
		
		//Instanciation d'un objet Cusers à partir du tableau des données $result
		$util=new Cusers($result);
		return $util;} 
		
	// Fonction qui insère un nouvel utilisateur à partir d'un tableau de données
	function putOneData($donnees){ //
		// requête d'insertion d'un nouvel utilisateur
		$sql = "INSERT INTO tusers (id, prenom, nom, email, adresse, photo) VALUES (?, ?, ?, ?, ?, ?)";
		$st= $this->pdo->prepare($sql);
		$st->execute($donnees);}
		}
// TEST connexion
$db=new MysqlConnect(); // instanciation de la connexion
// TEST  récupération de l'objet Cusers correspondant à 'lulu'
$util=$db->getOneData("lulu"); // récupération de l'objet Cusers correspondant à 'lulu'
echo $util->getNom(); // affichage avec getteur
echo "<br>";
echo $util->getAdresse(); // affichage avec getteur
// TEST pour ajouter un utilisateur dans la table tusers:
//création du tableau des données d'un utilisateur
$data=array(14,'llou','olu');
$db->putOneData($data);

// TESTS récupération de tous les utilisateurs de la table tusers sous forme d'une liste d'objets Cusers
$retourData=$db->getAllData(); 
// affichage pour chaque objet Cusers du tableau $retour:
echo " affichage des noms et adresses des objets Cusers";
echo"<br>";
foreach($retourData as $cli){ //Pour chaque valeur afficher:
	echo $cli->getNom(); // avec le getteur sur le nom d'un utilisateur
	echo "---";
	echo $cli->getAdresse(); //avec le getteur sur l'adresse d'un utilisateur
	echo"<br>";}


	
?>