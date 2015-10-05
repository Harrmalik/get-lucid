<article id="dream">
  <div class="ui inverted segments">
    <div>
      <img class="ui image" id="homeImage" src="<?php echo $d['image']; ?>" alt="<?php echo $d['dreamName']; ?>" />
    </div>
    <div class="ui inverted raised segment">
      <h2 class="ui header" id="dreamHeader"><?php echo $d['dreamName']; ?></h2>

      <a class="ui teal ribbon label"><?php echo date("F j, Y \a\\t g:iA",strtotime($d['created'])); ?></a>
    <br /><br />
      <p><?php echo $d['dreamContent']; ?></p>
    </div>
  </div>
</article>
