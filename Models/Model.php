<?php
namespace Models;
// j'utilise PDO qui est situé sur le namespace global ce qui m'évite de faire new \PDO
use PDO;


abstract class Model
{



  protected static $_bdd;



  //connexion a la bdd
  private static function setBdd(){
    self::$_bdd = new PDO('mysql:host=localhost;dbname=grafiz;charset=utf8', 'root', '');

    //on utilise les constantes de PDO pour gérer les erreurs
    self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  }




  //fonction de connexion par defaut a la bdd
  protected function getBdd(){
    if (self::$_bdd == null) {
      self::setBdd();
      return self::$_bdd;
    }
  }




  // récupère toute la liste
  // $obj représente la class qui va hydrater les datas récupérées de la BDD
  // $obj peut valoir null car je veux pas hydrater un nouvel objet pour un seul user de la BDD
  protected function getAll($table, $obj = null){
    $this->getBdd();
    $var = [];
    $req = self::$_bdd->prepare('SELECT * FROM '.$table.' ORDER BY id desc');
    $req->execute();
    if($obj != null){
      //on crée la variable data qui
      //va contenir les données
      while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        $objPath = "Models\\".$obj;
        // var contiendra les données sous forme d'objets
        $var[] = new $objPath($data);
        // debug($var);
      }

    }else{
      $var = $req->fetchAll();
    }

    return $var;
    $req->closeCursor();
  }
  
  

  // récupère un item grace à son id
  protected function getOne($table, $obj, $id)
  {
    $this->getBdd();
    $var = [];
    $req = self::$_bdd->prepare("SELECT * FROM " .$table. " WHERE id = ?");
    $req->execute(array($id));
    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
      $objPath = "Models\\".$obj;
      $var[] = new $objPath($data);
    }

    return $var;
    $req->closeCursor();
  }

  
  
  
  
  /**
  * récupère un nombre précis d'items
  * @return array
  */
  
  protected function findLimit(int $nbre = 6): array 
  {
    $sql = "SELECT * FROM {$this->table}";
    // si aucun nbre est indiqué alors on laisse la valeur par défaut 6
    !$nbre ?: $sql .= " LIMIT 0, $nbre";
    $req = $this->pdo->query($sql);
    $var = [];
    if($this->table == "works"){
      
      while($row = $req->fetch(PDO::FETCH_ASSOC)){
        $objPath = "Models\\".$obj;
        $var[] = new $objPath($data);
      }
    }else{
      $var = $req->fetchAll();
    }
    
    $req->closeCursor();
    return $var;
  }
  
  

  
  /**
  * Supprime un item grâce à son id
  *
  * @param integer $id
  * @return void
  */
  protected function delete(int $id): void
  {
    // 2. On exécute la suppression
    $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");
    $query->execute(['id' => $id]);
  }
  




  protected function createOne($table, $obj)
  {
    $this->getBdd();
    $req = self::$_bdd->prepare("INSERT INTO ".$table." (title, content, date) VALUES (?, ?, ?)");
    $req->execute(array($_POST['title'], $_POST['content'], date("d.m.Y")));

    $req->closeCursor();
  }
  
  
  // /**
  // * récupère tous les items
  // * @param integer $id
  // * @return array
  // */
  // public function findAll(): array 
  // {
  //   $req = $this->pdo->query("SELECT * FROM {$this->table}");

  //   if($this->table === "works"){
  //     $item = [];
  //     while($row = $req->fetch(\PDO::FETCH_ASSOC)){
  //       $array = new Work($row);
  //       $item[] = $array;
  //     }
  //     $req->closeCursor();
      
  //   }else{

  //     $item = $req->fetchAll();
  //     debug($item);
  //     $req->closeCursor();
  //   }

  //   return $item;
  // }
  

  
  
  
  
  
  
}