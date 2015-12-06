<?php include_once 'header.php'; ?>

<article id="dream">
   <div class="ui breadcrumb">
     <a class="section" href="/get-lucid/">Home</a>
     <i class="right angle icon divider"></i>
     <a class="section" href="/get-lucid/dreams">Dreams</a>
     <i class="right angle icon divider"></i>
     <div class="active section"><?php echo $d['dreamName']; ?></div>
   </div>

   <?php if($message != NULL) { echo $message; } ?>

  <div class="ui inverted segments">
    <div>
      <img class="ui image" id="homeImage" src="<?php echo $d['image']; ?>" alt="<?php echo $d['dreamName']; ?>" />
    </div>
    <div class="ui inverted raised segment">
      <h2 class="ui header" id="dreamHeader"><?php echo $d['dreamName']; ?>
         <?php if(isset($_SESSION['username']) && $d['username'] == $_SESSION['username']) { ?>
            <span><a href="/get-lucid/editdream/<?php echo $d['url']; ?>/<?php echo $d['id']; ?> ">Edit Dream</a></span>
         <?php } ?>
      </h2>

      <a class="ui blue ribbon label"><?php echo date("F j, Y \a\\t g:iA",strtotime($d['created'])); ?></a>
    <br /><br />
      <p><?php echo $d['dreamContent']; ?></p>
    </div>
  </div>
</article>

<article>
   <div class="ui threaded comments">
      <h3 class="ui dividing header"><span class="ui blue circular label"><?php echo count($c); ?></span> Comments</h3>
      <?php if ($c == NULL) { ?>
         <p>There are currently no comments</p>
         <p>Be the first to comment</p>
      <?php } else { ?>
         <?php foreach($c as $comment) { ?>
            <div class="comment">
               <div class="content">
                <a class="author"><?php echo $comment['userName']; ?></a>
                <div class="metadata">
                    <div class="date"><?php echo "Posted " .date("F j, Y \a\\t g:iA",strtotime($comment['postDate'])); ?></div>
                </div>
                <div class="text">
                  <?php echo $comment['content']; ?>
                </div>
                <div class="actions">
                   <?php if(isset($_SESSION['username']) && $_SESSION['username'] == $comment['userName']) { ?>
                     <span><a class="ui button basic green mini" href="/get-lucid/editcomment/<?php echo $comment['commentID']; ?>">Edit</a>
                        <a class="ui button basic red mini" href="/get-lucid/deletecomment/<?php echo $comment['commentID']; ?>">Delete</a></span>
                  <?php } elseif (isset($_SESSION['username'])) { ?>
                     <a href="#">Like</a>
                  <?php } ?>
                </div>
               </div>
            </div>
         <?php } ?>
      <?php } ?>

      <?php if(isset($_SESSION['username'])) { ?>
         <!-- <button id="addCommentBtn" class="ui blue button right aligned">Add Comment</button> -->
         <div id="addCommentForm">
            <form class="ui form ui container"  method="post"
            action="/get-lucid/addcomment" enctype="multipart/form-data">
              <div class="field">
                <label>Comment</label>
                <textarea name="content" placeholder="What happened in the dream" rows="5">
                  <?php echo $c['content'] = isset($c['content']) ? $c['content'] : NULL ; ?>
               </textarea>
              </div>

              <input type="hidden" name="action" value="addcomment" />
              <input type="hidden" name="url" value="<?php echo $d['url'] ?>" />
              <input type="hidden" name="dreamID" value="<?php echo $d['id'] ?>" />
              <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>" />
              <input class="ui basic blue button" type="submit" name="submit" value="Add Comment" />
              <button id="addCommentBtn" class="ui basic blue button" type="submit" name="submit">Cancel</button>
            </form>
         </div>
      <?php } else { ?>
         <a href="/get-lucid/login" class="ui blue button right aligned">Log in to Comment<a>
      <?php } ?>


</article>

<?php include_once 'footer.php'; ?>
