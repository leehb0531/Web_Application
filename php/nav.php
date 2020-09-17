<?php
function visiting($page) { ?>
  <p>Pages</p>
  <div class="navLink">
  <?php if($page =="MAIN"){ ?>
    <div id="visiting" class="subnav"><a href="index.php">MAIN</a></div>
    <div class="subnav"><a href="wordsMain.php">WORDS</a></div>
    <div class="subnav"><a href="form.php">SIGNUP&CONTACT</a>
      <div class="sub_content"><a href="../pages/userlist.php">Userlist</a></div>
    </div>
  <?php } elseif ($page =="WORDS"){ ?>
    <div class="subnav"><a href="index.php">MAIN</a></div>
    <div id="visiting" class="subnav"><a href="wordsMain.php">WORDS</a></div>
    <div class="subnav"><a href="form.php">SIGNUP&CONTACT</a>
      <div class="sub_content"><a href="../pages/userlist.php">Userlist</a></div>
    </div>
  <?php } elseif ($page=="otherDir"){?>
    <div class="subnav"><a href="../pages/index.php">MAIN</a></div>
    <div class="subnav"><a href="../pages/wordsMain.php">WORDS</a></div>
    <div class="subnav"><a href="../pages/form.php">SIGNUP&CONTACT</a>
      <div class="sub_content"><a href="../pages/userlist.php">Userlist</a></div>
    </div>
  <?php }  else{?>
    <div class="subnav"><a href="../pages/index.php">MAIN</a></div>
    <div class="subnav"><a href="../pages/wordsMain.php">WORDS</a></div>
    <div class="subnav"><a href="../pages/form.php">SIGNUP&CONTACT</a>
      <div class="sub_content"><a href="../pages/userlist.php">Userlist</a></div>
    </div>
  <?php } ?>
  </div>
<?php } ?>