<?php
class DataHandler {

public $conn;
  function __construct($dbtype,$servername,$dbname,$username, $password) {
      $this->conn = new PDO("$dbtype:host=$servername;dbname=$dbname", $username, $password);
  }

function CreateData($sql){
    try {
        $this->conn->exec($sql);
        return $this->conn->lastInsertId();
        }

    catch(PDOException $e) {

        echo $sql . "<br>" . $e->getMessage();

    }
  }

  function ReadData($sql){

    $stmt = $this->conn->prepare($sql);
    $stmt->execute();

    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $array;

  }

  function UpdateData($sql){
    $this->conn->exec($sql);
  }

  function DeleteData($sql){
    $this->conn->exec($sql);
  }
}
?>
