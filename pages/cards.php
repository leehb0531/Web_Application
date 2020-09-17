  <?php include("../php/head.php");?>
  <link rel="stylesheet" href="../css/wordsMain.css">
  <script async src="../js/cards.js"></script>
  <?php include("../php/header.php");?>
    <nav>
    <?php include("../php/nav.php");
    visiting("CARDS");?>
    </nav>
  </div>
  <main>
    <div id="cardWrapper">
      <div id="leftBtnWrapper" onclick="preCard()">
        <div id="leftBtn">
          <img src="../pngfiles/back.png" alt="LeftBtn" width="30" height="30">
        </div>
      </div>
      <div id="cardWord" onclick="flipCard()">
        <div id="card_front">
          단어
        </div>
        <div id="card_back">
          <div id="word_def">Meaning</div>
          <div id="word_exp">Explanation</div>
        </div>
      </div>
      <div id="rightBtnWrapper" onclick="nextCard()">
        <div id="rightBtn">
          <img src="../pngfiles/nextbtn.png" alt="RightBtn" width="30" height="30">
        </div>
      </div>
    </div>
  </main>
  <?php  include('../php/footer.php'); ?>