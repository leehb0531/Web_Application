<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("../php/head.php");?>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <h1>Hongbin's Playground</h1>
            </header>
            <nav>
                <?php include("../php/nav.php");
                visiting("MAIN"); # make visiting link unclickable ?>
            </nav>
            <main>
                <p id="mainpic"><img src="../pngfiles/mainpic.jpg" alt="avatar"></p>
                <div id="pInfo-Box">
                    <div class="pPics"><img src="../pngfiles/redbin.png" alt="Redbin-pic" width="100" height="100"></div> <!-- 여기는 my 사진 -->
                    <div id="pInfo">
                        <div class="pInfo-category">Name:</div> <div class="pInfo-ans">Redbin Lee</div>
                        <div class="pInfo-category">Gender:</div> <div class="pInfo-ans">Male</div>
                        <div class="pInfo-category">DoB:</div> <div class="pInfo-ans">31st of May, 1994</div>
                        <div class="pInfo-category">Marital Status:</div> <div class="pInfo-ans">Married</div>
                        <div class="pInfo-category">Native:</div> <div class="pInfo-ans">Korean</div>                    
                    </div>
                </div>
                <div id="object">
                    <blockquote>
                        I am looking for a entry position of software engineer focusing on software development or data analyst.<br>
                        I have been studying about computer science, mathematics, and information system.<br>
                        I want to find a place to put my effort to help others and strengthen the team I work with.
                    </blockquote>
                </div>
                <div id="lifeEvent-Box">
                    <div class="left container">
                        <div class="content">
                            Picture 1
                        </div>
                    </div>
                    <div class="right container">
                        <div class="content">
                            <div class="content-title">Moonsung Middle School</div>
                        </div>
                    </div>
                    <div class="left container">
                        <div class="content">
                            Picture 2
                        </div>
                    </div>
                    <div class="right container">
                        <div class="content">
                            <div class="content-title">Insung High Shcool</div>
                        </div>
                    </div>
                    <div class="left container">
                        <div class="content">
                            Picture 3
                        </div>
                    </div>
                    <div class="right container">
                        <div class="content">
                            <div class="content-title">University - BYU-Hawaii</div>
                        </div>
                    </div>
                    <div class="left container">
                        <div class="content">
                            사진5
                        </div>
                    </div>
                    <div class="right container">
                        <div class="content">
                            <div class="content-title">Military Service</div>
                        </div>
                    </div>
                    <div class="left container">
                        <div class="content">
                            Picture 6
                        </div>
                    </div>
                    <div class="right container">
                        <div class="content">
                            <div class="content-title">Missionary Work</div>
                        </div>
                    </div>
                    <div class="left container">
                        <div class="content">
                            Picture 7
                        </div>
                    </div>
                    <div class="right container">
                        <div class="content">
                            <div class="content-title">Came back to the University</div>
                        </div>
                    </div>
                    <div class="left container">
                        <div class="content">
                            Picture 8
                        </div>
                    </div>
                    <div class="right container">
                        <div class="content">
                            <div class="content-title">Marriage</div>
                        </div>
                    </div>
                    <div class="left container">
                        <div class="content">
                            Picture 9
                        </div>
                    </div>
                    <div class="right container">
                        <div class="content">
                            <div class="content-title">Graduation</div>
                        </div>
                    </div>
                </div>
                <div id="links" class="linkIvisit">
                    <ul>
                        <li> Links of Korea, Republic of
                            <ul>
                                <li><a href="#">Programmers</a></li>
                                <li><a href="#">Saramin</a></li>
                            </ul>
                        </li>
                        <li> Links of United States
                            <ul>
                                <li><a href="#">HackerRank</a></li>
                                <li><a href="#">LinkedIn</a></li>
                                <li><a href="#">Handshake</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </main>
        <?php include("../php/footer.php"); // import footer php?> 