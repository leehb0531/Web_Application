<?php include('head.php');?>
<?php include("header.php");?>
    <nav>
      <?php include('nav.php');
      visiting("otherDir");?>
    </nav>
  </div>
  <main>
  <h1>Sorry</h1>
  <p><?php
    $wait = 10000; // number of days to be done
    echo "<h2>This page will be prepared in $wait days</h2>";
  ?></p>
  <p><?php
    echo "<h2>Maybe this page will be prepared to come in ".$_GET['days']."</h2>";
  ?></p>
</main>
<?php  include('../php/footer.php'); ?>