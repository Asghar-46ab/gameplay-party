<?php
require 'DataHandler.php';

 class ContactsLogic {

 function __construct(){
    $this->DataHandler = new Datahandler("mysql","localhost", "mvc", "root", "");
 }

 function __destruct(){
  // echo "destroying" . $this->DataHandler;
 }

 function createContact($name, $phone, $email, $location){
   try {

     return $this->DataHandler->CreateData("INSERT INTO `contacts` (`name`, `phone`, `email`, `location`) VALUES ('$name', '$phone', '$email', '$location');");
   } catch (Exception $e) {
     throw $e;
   }
 }

 function readContact($id){
   try {

     return $this->DataHandler->ReadData("SELECT * FROM contacts where id = '$id'");

   } catch (Exception $e) {
     throw $e;
   }

 }

 function readContacts(){
   try {

       return $this->DataHandler->ReadData("SELECT * FROM contacts");

   } catch (Exception $e){
     throw $e;
   }
 }

 public function updateContact($name, $phone, $email, $location, $id) {
   try {

       return $this->DataHandler->UpdateData("UPDATE contacts SET `name` = '$name', `phone` = '$phone', `email` = '$email', `location` = '$location' WHERE id = '$id'");

   } catch (Exception $e){
     throw $e;
   }
 }
 public function deleteContact($id) {
   try {

     return $this->DataHandler->DeleteData("DELETE FROM contacts where id = '$id'");

   } catch (Exception $e) {
     throw $e;
   }
 }
}


?>
