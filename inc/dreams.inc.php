<?php

class Dreams {
  // Our database connection
  private $db;

  public $dreams;

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
  public function getDreams() {
    $sql = "SELECT *
            FROM dreams
            ORDER BY created DESC";

    $q = $this->db->prepare($sql);
    $q->execute();

    $d = NULL; // Declare the variable to avoid errors;

    $d = $q->fetchAll();

    return $d;
  }









  /**
  * Resizes/resamples an image uploaded via a web form
  *
  * @param array $upload the array contained in $_FILES
  * @param bool $rename whether or not the image should be renamed
  * @return string the path to the resized uploaded file
  */
  public function getDream($url = NULL, $id = NULL){
      // if dream url was supplied was supplied, load the associated dream
      if(isset($url)) {
        // Load the dream
        $sql = "SELECT *
                FROM dreams
                WHERE url=?
                LIMIT 1";
        $q = $this->db->prepare($sql);
        $q->execute(array($url));

        $d = $q->fetch();

        return $d;
      } else if (isset($id)) {
        // Load the dream
        $sql = "SELECT *
                FROM dreams
                WHERE id=?
                LIMIT 1";
        $q = $this->db->prepare($sql);
        $q->execute(array($id));

        $d = $q->fetch();

        return $d;
      } else {
        return $d = NULL;
      }
  }









  /**
  * Resizes/resamples an image uploaded via a web form
  *
  * @param array $upload the array contained in $_FILES
  * @param bool $rename whether or not the image should be renamed
  * @return string the path to the resized uploaded file
  */
  public function addDream($d, $img = NULL) {
    // Sanitize the data and store it in variables
    $dreamName = htmlentities(strip_tags($d['dreamName']), ENT_QUOTES);
    $dreamContent = htmlentities(strip_tags($d['dreamContent']), ENT_QUOTES);
    // Keep formatting of comments and remove extra whitespace
    $dreamContent = nl2br(trim($dreamContent));

    if(!empty($_POST['id'])) {
      $sql ="UPDATE dreams
             SET dreamName=?, dreamContent=?, url=?
             WHERE id=?
             LIMIT 1";

      $q = $this->db->prepare($sql);
      $q->execute(array(
         $dreamName,
         $dreamContent,
         $url = $this->makeURL($dreamName),
         $_POST['id']
      ));

      $q->closeCursor();

      return $url;
   } else {
       $sql ="INSERT INTO dreams (id, dreamName, dreamContent, image, tag, url, username)
              VALUES (?, ?, ?, ?, ?, ?, ?)";

       $q = $this->db->prepare($sql);
       $q->execute(array(
         $id = SHA1(uniqid()),
         $dreamName,
         $dreamContent,
         $img,
         $tags = 'General',
         $url = $this->makeURL($dreamName),
         $username = 'Harrmalik'
       ));

       $q->closeCursor();

       // Get the ID of the entry we just saved
       $id_obj = $this->db->query("SELECT LAST_INSERT_ID()");
       $id = $id_obj->fetch();
       $id_obj->closeCursor();

       return $id_obj;
   }

  }


















    private function makeURL($name) {
      $patterns = array(
        '/\s+/',
        '/(?!-)\W+/'
      );

      $replacements = array('-', '');

      return preg_replace($patterns, $replacements, strtolower($name));
    }



}

 ?>
