<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modules.css">
    <link rel="stylesheet" href="js/popup.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <img src="images/header.png" alt="header" id="header-grundfos">
    <section id="wrapper-content">
    <?php include 'aside.php'; ?>
    <section id="content" >

      <div id="wrapper">

      <div id="replacepumps" class="my-button">
        <div id="element_to_pop_up">
          <a class="bClose">X<a/>

          <div id="right">
            <h1>NEW</h1>
            <h2>Alpha 3 Beta</h2>
            <ul>
              <li>New features</li>
              <li>100% waterproof</li>
              <li>App combined</li>
              <li>25 years guarantee</li>
            </ul>
          <div id="border">
            <div id="leftBut"><a href="http://uk.grundfos.com/my-grundfos/replace-pump.html?_charset_=UTF-8&searchstring=ALLWEILER%2C%20Alpha%2B%2015-40"><p>INFORMATION</p></a></div>
          </div>
            <a href="#" id="showmessage">Do not show again</a>
        </div>

        <div id="left">
        </div>




      </div>

      </div>

      <div class="moduleBox">
        <div class="productBar">
          <h2>FIND MARKETING CONTENT</h2>
        </div>
        <div class="content">
          <p>Search by product number or name</p>
          <div id="searchBorder">

            <form>
          <input class="search" autocomplete="off" type="text" name="firstname" onkeyup="searchpumpindex()" id="input-search-index">
          </form>
          <img src="images/modules/search.jpg" id="searchicon" alt="">

          <ul id="pumpUL-index">
            <div class="show_hide">
            <li class="display-none"><a href="view-materiel.php">Alpha</a></li>
            <li class="display-none"><a href="view-material.php">Comfort</a></li>
            <li class="display-none"><a href="view-material.php">Magna3</a></li>
            <li class="display-none"><a href="view-material.php">Alpha2</a></li>
            <li class="display-none"><a href="view-material.php">CMBE</a></li>
            <li class="display-none"><a href="view-material.php">SOLOLIFT2</a></li>
            <li class="display-none"><a href="view-material.php">SQE</a></li>
            <li class="display-none"><a href="view-material.php">UNILIFT KP</a></li>
            <li class="display-none"><a href="view-material.php">SCALA2</a></li>
          </div>
          </ul>

          </div>
        </div>
      </div>

      <div id="listprice">
        <!-- <div class="productBar">
        <h2>LIST PRICE FINDER</h2></div>
      <div class="content"></div> -->
      </div>

      <div id="availability">
        <!-- <div class="productBar">
      <h2>LIST PRICE FINDER</h2></div>
    <div class="content"></div> -->
      </div>

      <div id="spareparts">
        <!-- <div class="productBar">
        <h2>LIST PRICE FINDER</h2></div>
      <div class="content"></div> -->
      </div>

      <div id="orderstatus">
        <!-- <div class="productBar">
          <h2>LIST PRICE FINDER</h2></div>
        <div class="content"></div> -->
      </div>



      </div>

    </section>
    </section>
    <script src="js/search.js">
    </script>
  </body>
</html>
