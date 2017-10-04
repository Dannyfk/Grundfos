<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/searchresult.1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <img src="images/header.png" alt="header" id="header-grundfos">
    <section id="wrapper-content">
    <?php include 'aside.php'; ?>
    <section id="content" class="search-for-pump1">
      <section id="main-content" class="search-for-pump">
        <h2>Search for pumpname to get marketing materials</h2>
        <form>
  <input type="text" autocomplete="off" id="pumpinput" onkeyup="searchpump()" placeholder="Search for pump"> <img src="images/search-btn.png" class="search-btn" alt="btn">
</form>

        <ul id="pumpUL">
          <div class="show_hide">
          <li class="display-none"><?php include 'listsearchresult/listsearchresult1.php'; ?></li>
          <li class="display-none"><?php include 'listsearchresult/listsearchresult2.php'; ?></li>
          <li class="display-none"><?php include 'listsearchresult/listsearchresult3.php'; ?></li>
          <li class="display-none"><?php include 'listsearchresult/listsearchresult4.php'; ?></li>
          <li class="display-none"><?php include 'listsearchresult/listsearchresult5.php'; ?></li>
          <li class="display-none"><?php include 'listsearchresult/listsearchresult6.php'; ?></li>
          <li class="display-none"><?php include 'listsearchresult/listsearchresult7.php'; ?></li>
          <li class="display-none"><?php include 'listsearchresult/listsearchresult8.php'; ?></li>
          <li class="display-none"><?php include 'listsearchresult/listsearchresult9.php'; ?></li>
        </div>
        </ul>
</section>
    </section>
    </section>
    <?php include 'footer.php'; ?>
    <script src="js/search.js">
    </script>
  </body>
</html>
