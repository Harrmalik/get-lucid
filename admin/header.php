<?php include_once 'inc/config.inc.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get Lucid</title>

    <!--                            SCRIPT FILES                                                         -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.12.3/semantic.min.js"></script>

    <!--                            CSS FILES                                                         -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.0/semantic.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <nav class="ui pointing menu inverted">
        <a href="<?php echo ROOT_PATH ?>" class="item"><h2 class="ui header inverted">Get Lucid</h2></a>
        <div class="ui sub header item">Logged in as</div>
        <div class="right menu">
          <a href="<?php echo ROOT_PATH ?>" class="item">Home</a>
          <a href="<?php echo ROOT_PATH ?>" class="item">Dream</a>
          <a href="<?php echo ROOT_PATH ?>" class="item">Log In</a>
        </div>
      </nav>
    </header>
