#!/usr/local/bin/php

<!DOCTYPE html>
<html lang = "en">

<head>
  <title>Kristen Tang</title>
  <meta charset = "UTF-8">
  <script src="balloon.js" defer ></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" defer></script>
  <link rel="stylesheet" href="final.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:thin|Open+Sans+Condensed:300|Open+Sans:300|Lora">
</head>

<body>
  <header>
    <div class="topnav">
        <div class = "dropdown">
          <a href = "" class= "active">PLAY</a>
        </div>
        <div class = "dropdown">
          <a href = "<?php echo "leaderboard.php?username=".$_GET['username']."&token=".$_GET['token'];  ?>">LEADERBOARD</a>
        </div>
        <div class = "dropdown_right">
          <a href = "logout.php">LOGOUT</a>
        </div>
        <div class = "dropdown_right">
          <a href = "" class= "active">Welcome, <?php echo $_GET['username'];  ?></a>
        </div>
    </div>

    <div class = "banner_out">
      <p></p>
    </div>

    <div class = "banner_in">
      <br><br><br><br>
      <p1>BALLOON&nbsp;&nbsp;&nbsp;POP</p1>
      <br><br><br><br><br>
    </div>
  </header>

  <main>
      <section class = "two_elements_black_backgound">
          <br><br><br><br><br><br>
        <section class = "element1" id = "arcade_img">
        </section>
        <section class = "element2">
          <br>
          <h2>Instructions</h2>
          <p>
            How big can you blow up your balloon with popping it?
            <br><br>
            1. Select a balloon color and click LET'S PLAY
            <br>
            2. Begin blowing up your balloon, one random-sized blow at a time, by clicking BLOW
            <br>
            3. If your balloon pops on the spikes on the sides of the box, you lose. Take your chances - How big can you blow up your balloon?
            <br>
            4. Click STOP to stop blowing your balloon and save your score
          </p>
          <br>
        </section>
      </section>
      <section class = "index_text">
        <br>
        <h2>Pick Your Balloon Color:</h2>
        <form>
          <fieldset><center>
            <input type="radio" id="red" value="#A53855" name="color" checked="checked"/>
            <label for="red">Red</label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="orange" value="#C97C58" name="color"/>
            <label for="orange">Orange</label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="yellow" value="#DDD280" name="color"/>
            <label for="yellow">Yellow</label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="green" value="#66B0A3" name="color"/>
            <label for="green">Green</label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="blue" value="#217092" name="color"/>
            <label for="blue">Blue</label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="purple" value="#9281A1" name="color" />
            <label for="purple">Purple</label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="pink" value="#AF7492" name="color"/>
            <label for="pink">Pink</label>
          </center></fieldset>
        </form>
        <br>
        <center><button class="button" onclick="color();">LET'S PLAY!</button></center>
        <br>

        <center>
          <div class="card">
            <div class = "box">
              <div class = "circle">
              </div>
            </div>
            <div class="container">
              <span id = "span_one">&nbsp;</span><br><span id = "span_two">&nbsp;</span><br><span id = "span_three">&nbsp;</span><br><br>
              <center><button class="button" onclick="play_game();" target = "_blank" rel="noopener">BLOW</button><button class="button" onclick="stop();" target = "_blank" rel="noopener">STOP</button></center>
              <br><br>
            </div>
          </div>
        </center>
      </section>



  </main>

  <footer>
    <br>
    <small>
      &copy; This website was created by Kristen Tang and last updated on December 10, 2018.
      <br><br>
      Photos by <a href = "https://www.pexels.com/@spemone-62171" target = "_blank" rel = "noopener">spemone</a> on <a href = "https://www.pexels.com" target = "_blank" rel = "noopener">Pexels</a> and <a href = "https://unsplash.com/photos/zvBT4eOtlkY?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target = "_blank" rel = "noopener">Carl Raw</a> on <a href = "https://unsplash.com" target = "_blank" rel = "noopener">Unsplash</a>.
    </small>
    <br>
  </footer>

</body>
</html>
