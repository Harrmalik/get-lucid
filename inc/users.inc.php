<?php

class Users {
   // Our database connection
   private $db;

   public function __construct($db) {
     // Open a database connection and store it
     $this->db = $db;
   }









   /**
   * Resizes/resamples an image uploaded via a web form
   *
   * @param array $upload the array contained in $_FILES
   * @param bool $rename whether or not the image should be renamed
   * @return string the path to the resized uploaded file
   */
   public function addUser($u) {
     // Sanitize the data and store it in variables
     $username = htmlentities(strip_tags($u['username']), ENT_QUOTES);
     $password = htmlentities(strip_tags($u['password']), ENT_QUOTES);

     $sql ="INSERT INTO users (username, password, isAdmin)
            VALUES (?, ?, ?)";

     $q = $this->db->prepare($sql);
     $q->execute(array(
       $username,
       SHA1($password),
       $u['isAdmin']
     ));
   }









   public function login($u) {
     $sql = "SELECT COUNT(*) AS num_users
             FROM users
             WHERE username=?
             AND password=SHA1(?)";

     $q = $this->db->prepare($sql);
     $q->execute(array($_POST['username'], $_POST['password']));
     $response = $q->fetch();

     return $response;

   }





}

?>
