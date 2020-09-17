<?php include("../php/head.php");?>
<link rel="stylesheet" href="../css/wordsMain.css">
<script async src="../js/redbin.js"></script>
<?php include("../php/header.php");?>
<nav>
  <?php include("../php/nav.php");
  visiting("WORDS");?>
</nav>
</div>
<main>
  <ul>
    <li>
      <button onclick="toggleButton('subButton_ul1')">Humanities Words</button>
      <ul id="subButton_ul1">
        <li>
          <a href="cards.php"><button>Accounting</button></a>
        </li>
        <li>
        <a href="../php/comming_soon.php"><button>Securities</button></a>
        </li>
      </ul>
    </li>
    <li>
      <button onclick="toggleButton('subButton_ul2')">Programming Lanugage Syntax</button>
      <ul id="subButton_ul2">
        <li>
        <a href="../php/comming_soon.php"><button>Python</button></a>
        </li>
        <li>
        <a href="../php/comming_soon.php"><button>Javascript</button></a>
        </li>
      </ul>
    </li>
  </ul>
</main>

<?php include("../php/footer.php");?>