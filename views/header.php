<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get Lucid</title>

    <!--                            SCRIPT FILES                                                         -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.0/semantic.min.js"></script>
     <script scr="../js/main.js"></script>

    <!--                            CSS FILES                                                         -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.0/semantic.min.css">
    <link rel="stylesheet" href="/get-lucid/css/styles.css">

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
        <a href="/get-lucid/" class="item"><h2 class="ui header inverted">Get Lucid</h2></a>
        <?php if(isset($_SESSION['username'])) { ?>
            <div class="ui sub header item">Logged in as <?php echo $_SESSION['username']; ?></div>
        <?php }; ?>
        <div class="right menu">
          <a href="/get-lucid/" class="item">Home</a>
          <a href="/get-lucid/dreams" class="item">Dreams</a>
          <?php if(isset($_SESSION['username'])) { ?>
             <a href="/get-lucid/logout" class="item">Logout</a>
          <?php } else { ?>
             <a href="/get-lucid/login" class="item">Login</a>
          <?php } ?>
        </div>
      </nav>
    </header>
