<?php
   // Success messages

   function getMessage ($message) {
      $msg = '<div class="ui success floating message container">
        <i class="close icon"></i>
        <div class="header">
          You have successfully logged out
        </div>
        <p>' . $message . '</p>
      </div>';

      return $msg;
   }

   function msgUserCreated($username) {
      $msg = '<div class="ui success floating message container">
        <i class="close icon"></i>
        <div class="header">
          Welcome '. $username . '
        </div>
        <p>How about getting started with writing about your favorite dream <a href="/get-lucid/adddream" class="ui blue button">New Dream!</a></p>
      </div>';

      return $msg;
   }

   function msgSignedIn($username) {
      $msg = '<div class="ui floating container teal message">
        <i class="close icon"></i>
        <div class="header">
          Welcome back '. $username . '!
        </div>
        <p>Care to share a new dream? <a href="/get-lucid/adddream" class="ui blue button tiny">New Dream!</a></p>
      </div>';

      return $msg;
   }

   function msgSignedOut() {
      $msg = '<div class="ui yellow floating message container">
        <i class="close icon"></i>
        <div class="header">
          Till next time
        </div>
        <p>We look forward to hearing your future dreams =).</p>
      </div>';

      return $msg;
   }


   // Error messages


 ?>
