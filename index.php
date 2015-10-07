 <section>

    <?php
      // Include the models needed
      include_once 'inc/config.inc.php';
      include_once 'inc/dreams.inc.php';
      include_once 'inc/images.inc.php';
      include_once 'inc/users.inc.php';
      include_once 'inc/messages.inc.php';

      session_start();

      // Declare variables
      $error = "";
      $message = "";

      if (isset($_GET['action'])){
      		$action = $_GET['action'];
      } else if(isset($_POST['action'])){
      		$action = $_POST['action'];
      }
    	else {
    		$action = NULL;
    	}

      if (isset($_GET['url'])){
          $url = $_GET['url'];
      } else if(isset($_POST['url'])){
          $url = $_POST['url'];
      }
      else {
        $url = NULL;
      }


      if (isset($_GET['dream'])){
        $action = 'editdream';
      }

      $loc = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '../';



      switch($action) {
        case 'adddream':
             if(isset($_GET['action'])){
               include_once 'views/editDream.php';
             } else {
                if($_POST['submit'] == "Cancel") {
                   // Check if the user clicked cancel, if so don't submit
                   header('location: '. $loc);
                   exit;
                }
               if(!empty($_POST['dreamName']) && !empty($_POST['dreamContent'])) {
                 // Include database connection
                 $db = new PDO(DB_INFO, DB_USER, DB_PASS);

                 if(isset($_FILES['image']['tmp_name'])) {
                   try {
                       // Instantiate the class and set a save path
                       $img = new ImageHandler("/get-lucid/imgs");

                       // Process the file and store the returned path
                       $img_path = $img->processUploadedImage($_FILES['image']);
                   }
                   catch(Exception $e) {
                       // If an error occurred, output your custom error message
                       die($e->getMessage());
                   }
                 } else {
                     // Avoids a notice fi no image was uploaded
                     $img_path = NULL;
                 }

                 $dreams = new Dreams($db);

                 $id = $dreams->addDream($_POST, $img_path);

                 header('location: /get-lucid/dreams/'.$url);
                 exit;
               }
             }
          break;
        case 'editdream':

             // Include database connection
           $db = new PDO(DB_INFO, DB_USER, DB_PASS);
           $dreams = new Dreams($db);
         if(isset($_GET['action'])){

             $d = $dreams->getDream(NULL, $_GET['dream']);

            include_once 'views/editDream.php';
            break;
         } else {
            if($_POST['submit'] == "Cancel") {
               // Check if the user clicked cancel, if so don't submit
               header('location: '. $loc);
               exit;
            }
            $dreams->addDream($_POST);
            header('location: /get-lucid/dreams/'.$url);
         }


        case 'dreams':
             // Include database connection
             $db = new PDO(DB_INFO, DB_USER, DB_PASS);
             $dreams = new Dreams($db);

             if($url == NULL) {
               $d = $dreams->getDreams();
               include_once 'views/list.php';
             } else {
               $d = $dreams->getDream($url);
               include_once 'views/dream.php';
             }

          break;

         case 'adduser' :
               if(isset($_GET['action'])){
                 include_once 'views/adduser.php';
               } else {
                  if($_POST['submit'] == "Cancel") {
                     // Check if the user clicked cancel, if so don't submit
                     header('location: '. $loc);
                     exit;
                  }
                  // Include database connection
                  $db = new PDO(DB_INFO, DB_USER, DB_PASS);
                  $users = new Users($db);
                  $dreams = new Dreams($db);

                  $d = $dreams->getDreams();

                  $user = $users->addUser($_POST);

                  $_SESSION['loggedin'] = ($user['num_users'] == 1) ? 0 : NULL;

                  $_SESSION['username'] = $_POST['username'];

                  $message = msgUserCreated($_POST['username']);
                  include_once 'views/list.php';
                 exit;
               }

            break;

         case 'login' :
            if(isset($_GET['action'])){
             include_once 'views/login.php';
            } else {
               // Include database connection
               $db = new PDO(DB_INFO, DB_USER, DB_PASS);
               $users = new Users($db);
               $dreams = new Dreams($db);

               $d = $dreams->getDreams();

               $user = $users->login($_POST);

               $_SESSION['loggedin'] = ($user['num_users'] == 1) ? 0 : NULL;

               if(isset($_SESSION['loggedin'])) {
                 $_SESSION['username'] = $_POST['username'];
                 $message = msgSignedIn($_POST['username']);
                  include_once 'views/list.php';
              } else {
                 $error =  "Username or password is not correct";
                 include_once 'views/login.php';
              }

               exit;
            }
            break;

         case 'logout' :
            session_destroy();
            session_start();
            $db = new PDO(DB_INFO, DB_USER, DB_PASS);
            $dreams = new Dreams($db);

            $d = $dreams->getDreams();

            // Send the user back to their last location

            $message = msgSignedOut();
            include_once 'views/list.php';

            break;


        default:
          // If not action is found return the user to the main page
          include_once ('views/home.php');
      }
    ?>

  </section>
