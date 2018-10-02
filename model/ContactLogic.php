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
  }
?>
