<?php
// ?
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

  function Read($sql){
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }



function Create($sql){
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();

}

}
?>
