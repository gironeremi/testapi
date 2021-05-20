<?php
const DB_HOST = 'mysql:host=localhost;port=3308;dbname=elevage';
const DB_USER = 'root';
const DB_PASS ='';

class Animals
{
    public function getDbConnect()
    {
        $db= new \PDO(DB_HOST, DB_USER, DB_PASS, array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
        return $db;
    }
    public function listAll()
    {
        $db = $this->getDbConnect();
        $req = $db->prepare('SELECT * FROM animal LIMIT 25');
        $req->execute();
        return $req->fetchAll();
    }
    public function listSomeAnimals()
    {
        $db = $this->getDbConnect();
        $req = $db->prepare('SELECT animal.nom, espece.nom_courant FROM `animal` INNER JOIN espece ON espece.id = animal.espece_id ORDER BY animal.nom DESC LIMIT 10');
        $req->execute();
        return $req->fetchAll();
    }
    public function addAnimal($name) //test pour une requête POST, mais ne marche pas encore
    {
        $db = $this->getDbConnect();
        $req = $db->prepare('INSERT INTO animal(nom, espece_id) VALUES (?,?)');
        $req->execute(array($name, 1));
    }
}