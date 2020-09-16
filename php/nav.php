<?php
function visiting($page) { ?>
  <p>Pages</p>
  <?php if($page =="MAIN"){ ?>
    <a href="index.php"><div id="visiting" class="navLink">MAIN</div></a>
    <a href="wordsMain.php"><div class="navLink">WORDS</div></a>
    <a href="form.php"><div class="navLink">SIGNUP&CONTACT</div></a>
    <div class="subnav">
      <a href="../pages/userlist.php"></a>
      <a href="../pages/userprofile.php"></a>
    </div>
  <?php } elseif ($page =="WORDS"){ ?>
    <a href="index.php"><div class="navLink">MAIN</div></a>
    <a href="wordsMain.php"><div id="visiting" class="navLink">WORDS</div></a>
    <a href="form.php"><div class="navLink">SIGNUP&CONTACT</div></a>
    <div class="subnav">
      <a href="../pages/userlist.php"></a>
      <a href="../pages/userprofile.php"></a>
    </div>
  <?php } elseif ($page=="CONTACT"){ ?>
    <a href="index.php"><div class="navLink">MAIN</div></a>
    <a href="wordsMain.php"><div class="navLink">WORDS</div></a>
    <a href="form.php"><div id="visiting" class="navLink">SIGNUP&CONTACT</div></a>
    <div class="subnav">
      <a href="../pages/userlist.php"></a>
      <a href="../pages/userprofile.php"></a>
    </div>
  <?php } else {?>
    <a href="index.php"><div class="navLink">MAIN</div></a>
    <a href="wordsMain.php"><div class="navLink">WORDS</div></a>
    <a href="form.php"><div class="navLink">SIGNUP&CONTACT</div></a>
    <a href="../pages/userlist.php">Users</a>
    <div class="subnav">
      <a href="../pages/userprofile.php">User Profile</a>
    </div>
  <?php }
} ?>