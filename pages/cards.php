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
      <span id="leftBtnWrapper" onclick="preCard()">
        <div id="leftBtn">
          <img src="../pngfiles/back.png" alt="LeftBtn" width="30" height="30">
        </div>
      </span>
      <div id="cardWord" onclick="flipCard()">
        <div id="card_front">
          단어
        </div>
        <div id="card_back">
          <div id="word_def">Meaning</div>
          <div id="word_exp">Explanation</div>
        </div>
      </div>
      <span id="rightBtnWrapper" onclick="nextCard()">
        <div id="rightBtn">
          <img src="../pngfiles/nextbtn.png" alt="RightBtn" width="30" height="30">
        </div>
      </span>
    </div>
  </main>
  
  <footer>
    <div id="copyright"><sapan>&copy; Redbin Lee</sapan></div>
    <div>
        <span class = "footer_logo"><a href="https://www.facebook.com/profile.php?id=100008562494600"><i class="fab fa-facebook-square fa-2x"></i></a><!-- sns logo 삽입 -->
        <a href="www.linkedin.com/in/hongbin-lee"><i class="fab fa-linkedin fa-2x"></i></a></span>
    </div>
</footer>
</body>
</html>