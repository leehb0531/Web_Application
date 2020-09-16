<?php
function visiting($page) { ?>
  <p>Pages</p>
  <?php if($page =="MAIN"){ ?>
    <a href="index.php"><div id="visiting" class="navLink">MAIN</div></a>
    <a href="wordsMain.php"><div class="navLink">WORDS</div></a>
    <a href="form.php"><div class="navLink">CONTACT</div></a>
  <?php } elseif ($page =="WORDS"){ ?>
    <a href="index.php"><div class="navLink">MAIN</div></a>
    <a href="wordsMain.php"><div id="visiting" class="navLink">WORDS</div></a>
    <a href="form.php"><div class="navLink">CONTACT</div></a>
  <?php } elseif ($page=="CONTACT"){ ?>
    <a href="index.php"><div class="navLink">MAIN</div></a>
    <a href="wordsMain.php"><div class="navLink">WORDS</div></a>
    <a href="form.php"><div id="visiting" class="navLink">CONTACT</div></a>
  <?php } else {?>
    <a href="index.php"><div class="navLink">MAIN</div></a>
    <a href="wordsMain.php"><div class="navLink">WORDS</div></a>
    <a href="form.php"><div class="navLink">CONTACT</div></a>
  <?php }
} ?>