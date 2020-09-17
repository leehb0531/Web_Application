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
        <button onclick="window.location.href='cards.php'">Accounting</button>
        </li>
        <li>
        <button onclick="window.location.href='../php/comming_soon.php'">Securities</button>
        </li>
      </ul>
    </li>
    <li>
      <button onclick="toggleButton('subButton_ul2')">Programming Lanugage Syntax</button>
      <ul id="subButton_ul2">
        <li>
        <button onclick="window.location.href='../php/comming_soon.php'">Python</button>
        </li>
        <li>
        <button onclick="window.location.href='../php/comming_soon.php'">Javascript</button>
        </li>
      </ul>
    </li>
  </ul>
</main>

<?php include("../php/footer.php");?>