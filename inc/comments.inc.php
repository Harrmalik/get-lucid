<?php

class Comments {
  // Our database connection
  private $db;

  public $comments;

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
  public function getComments($id = NULL){
      // if Comment id was supplied was supplied, load the associated Comment
      if(isset($id)) {
        // Load the Comment
        $sql = "SELECT *
                FROM comments
                WHERE dreamID=?
                ORDER BY postDate DESC";
        $q = $this->db->prepare($sql);
        $q->execute(array($id));

       $c = $q->fetchAll();

        return $c;
      }  else {
        return $c = NULL;
      }
  }










  public function getComment($id){
      // if Comment id was supplied was supplied, load the associated Comment
        // Load the Comment
        $sql = "SELECT *
                FROM comments
                WHERE commentID=?
                LIMIT 1";
        $q = $this->db->prepare($sql);
        $q->execute(array($id));

       $c = $q->fetch();

        return $c;
  }









  /**
  * Resizes/resamples an image uploaded via a web form
  *
  * @param array $upload the array contained in $_FILES
  * @param bool $rename whether or not the image should be renamed
  * @return string the path to the resized uploaded file
  */
  public function addComment($c) {
    // Sanitize the data and store it in variables
    $CommentContent = htmlentities(strip_tags($c['content']), ENT_QUOTES);
    // Keep formatting of comments and remove extra whitespace
    $CommentContent = nl2br(trim($CommentContent));

    if(!empty($c['id'])) {
      $sql ="UPDATE comments
             SET content=?
             WHERE commentID=?
             LIMIT 1";

      $q = $this->db->prepare($sql);
      $q->execute(array(
         $CommentContent,
         $c['id']
      ));

      $q->closeCursor();

   } else {
       $sql ="INSERT INTO comments (commentID, content, dreamID, userName, url)
              VALUES (?, ?, ?, ?, ?)";

       $q = $this->db->prepare($sql);
       $q->execute(array(
         $id = SHA1(uniqid()),
         $CommentContent,
         $c['dreamID'],
         $c['username'],
         $c['url']
       ));

       $q->closeCursor();
   }

  }









  public function deleteComment($id){
     $sql = "DELETE FROM comments
             WHERE commentID=?
             LIMIT 1";
     if($q = $this->db->prepare($sql)) {
         // Execute teh command, free used memory, and return true
         $q->execute(array($id));
         $q->closeCursor();
         return TRUE;
     } else {
         // If somehting went wrong, return false
         return FALSE;
     }
  }





}

 ?>
