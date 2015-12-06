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
        <p>How about getting started by writing a comment on some of the recent dreams</p>
      </div>';

      return $msg;
   }

   function msgSignedIn($username) {
      $msg = '<div class="ui floating container teal message">
        <i class="close icon"></i>
        <div class="header">
          Welcome back '. $username . '!
        </div>
        <p>You are now viewing the recent dream posts, feel free to browse and comment on dreams that inspire you.</p>
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
