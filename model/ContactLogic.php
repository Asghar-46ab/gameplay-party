<?php
// ?
require 'DataHandler.php';

 class ContactsLogic {

  function __construct(){
      $this->DataHandler = new Datahandler("mysql","localhost", "gameplayparty", "root", "");
  }

  function __destruct(){
    // echo "destroying" . $this->DataHandler;
  }

  public function ReadBioscopen(){

    try {


      $sql = "SELECT * FROM `bioscopen`";

      $stmt = $this->DataHandler->Read($sql);
      return $stmt;

    } catch (Exception $e) {
        throw $e;
    }

  }

  public function DisplayBioscopen(){

    $array = $this->ReadBioscopen();

        $html = "<div class='row'>";
        
        foreach ($array as $k => $v) {
            $html .= "<div class='col-4' id='cardbody'>";
            $html .= "<div class='card' style='width: 18rem;'>";
            $naam = $v["bios_naam"];
            $id = $v["bios_id"];
            $html .= "<div class='card-body'>";

            $html .= "<ul class='list-group list-group-flush'>";
            $html .= "<li class='list-group-item'><a href='index.php?op=details&id=$id'> <h5 class='card-title'>$naam</h5></a></li>";

            $html .= "<li class='list-group-item'><a href='index.php?op=details&id=$id' class='btn btn-primary' id='details-button'>Details</a>
</li>";
            $html .= "</ul>";
            $html .= "</div>";
            $html .= "</div>";
            $html .= "</div>";
        }
        $html .= "</div>";

        return $html;
    }
    public function readAdminProducts()
    {

        $offset = isset($_GET['page']) ? ($_GET['page'] * 5) : 0;

        try {
            return $this->DataHandler->ReadData("SELECT image_path,EAN,price,platform,product_name,color,brand FROM `products` INNER JOIN `photos`  LIMIT 5 OFFSET $offset");
        } catch (Exeption $e) {
            throw $e;
        }
    }
    public function printTable($array)
    {
        $table = "<table class='table'>";

        foreach ($array as $key => $value) {
            $table .= "<thead class='thead-inverse'><tr>";

            foreach ($value as $k => $v) {
                $table .= "<th>" . $k . "</th>";
            }
            break;
        }
        foreach ($array as $k => $v) {
            $table .= "<tr>";
            foreach ($v as $key => $value) {
                $table .= "<td>" . $value . "</td>";
            }
        }
        $table .= "</table>";
        return $table;
    }
  }
?>
