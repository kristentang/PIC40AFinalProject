#!/usr/local/bin/php
<!DOCTYPE html>
<html lang = "en">

<head>
  <title>Kristen Tang</title>
  <meta charset = "UTF-8">
  <link rel="stylesheet" href="final.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma:light|Lovers+Quarrel|Roboto:thin|Open+Sans+Condensed:300|Open+Sans:300|Lora">
</head>

<body>
  <header>
    <div class="topnav">
        <div class = "dropdown">
          <a href = "<?php echo "main.php?username=".$_GET['username']."&token=".$_GET['token'];  ?>">PLAY</a>
        </div>
        <div class = "dropdown">
          <a href = "" class= "active">LEADERBOARD</a>
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
    <h1>YOUR HIGH SCORES</h1>
    <p id = "ind_high_score"></p>

    <section class = "index_text">
      <br>
      <center>
        <table>
          <thead>
            <th>username here</th>
          </thead>
          <tbody>
            <tr>
              <td>score</td>
            </tr>
            <tr>
              <td>score</td>
            </tr>
          </tbody>
        </table>
      </center>
    </section>

    <h1>ALL SCORES</h1>
    <p id = "high_score"></p>

    <section class = "index_text">
      <br>
      <center>
        <table>
          <thead>
            <th>Player</th>
            <th>Score</th>
          </thead>
          <tbody>
            <tr>
              <td>username</td>
              <td>score</td>
            </tr>
            <tr>
              <td>username</td>
              <td>score</td>
            </tr>
          </tbody>
        </table>
      </center>
    </section>

    <h1>HIGH PLAYERS</h1>
    <p id = "high_player"></p>

    <section class = "index_text">
      <br>
      <center>
        <table>
          <thead>
            <th>Player</th>
            <th>Average Score</th>
          </thead>
          <tbody>
            <tr>
              <td>username</td>
              <td>score</td>
            </tr>
            <tr>
              <td>username</td>
              <td>score</td>
            </tr>
          </tbody>
        </table>
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
