  </section>
    <footer>
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
    </footer>

     <script scr="/get-lucid/js/main.js"></script>
  </body>
</html>
