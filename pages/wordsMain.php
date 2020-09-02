<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("../php/head.php");?>
  <link rel="stylesheet" href="../css/wordsMain.css">
  <script async src="../js/redbin.js"></script>
</head>
<body>
  <div id="wrapper">
    <header>
      <h1>
        <span class="pPics"><img src="../pngfiles/redbin.png" alt="Redbin-pic" width="100" height="100"></span>
        Hongbin's Playground
      </h1>
      <p>Words Make the Person</p>
    </header>
    <nav>
      <?php include("../php/nav.php");
      visiting("WORDS");?>
    </nav>
    <main>
      <ul>
        <li>
          <button onclick="toggleButton('subButton_ul1')">Humanities Words</button>
          <ul id="subButton_ul1">
            <li>
              <a href="../pages/cards.php"><button>Accounting</button></a>
            </li>
            <li>
              <button>Securities</button>
            </li>
          </ul>
        </li>
        <li>
          <button onclick="toggleButton('subButton_ul2')">Programming Lanugage Syntax</button>
          <ul id="subButton_ul2">
            <li>
              <button>Python</button>
            </li>
            <li>
              <button>Javascript</button>
            </li>
          </ul>
        </li>
      </ul>
    </main>
    
    <?php include("../php/footer.php");?>