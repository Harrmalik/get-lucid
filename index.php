<?php include_once 'views/header.php'; ?>

  <section>
    <!-- <div class="ui breadcrumb">
      <a class="section">Home</a>
      <i class="right angle icon divider"></i>
      <div class="active section">Dreams</div>
    </div> -->

    <?php
      // Include the models needed
      include_once 'inc/config.inc.php';
      include_once 'inc/dreams.inc.php';
      include_once 'inc/images.inc.php';

      // Declare variables
      $error = '';

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

      switch($action) {
        case 'adddream':
          if(isset($_GET['action'])){
            include_once 'views/editDream.php';
          } else {
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

              include_once 'views/home.php';
              exit;
            }
          }
          break;

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

        default:
          // If not action is found return the user to the main page
          include('views/home.php');
      }
    ?>

  </section>

<?php include_once 'views/footer.php'; ?>
