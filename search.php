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
    <section id="content" >
      <section id="main-content" class="search-for-pump">
        <form>
  <input type="text" id="pumpinput" onkeyup="searchpump()" placeholder="Search for pump"> <img src="images/search-btn.png" class="search-btn" alt="btn">
</form>

        <ul id="pumpUL">
          <li class="list-pump display-none"><?php include 'listsearchresult/listsearchresult1.php'; ?></li>
        </ul>
</section>
    </section>
    </section>
    <script>
    function searchpump() {
        // Declare variables
        var pump = document.getElementById("pumpinput").value;
        var input, filter, ul, li, a, i;
        input = document.getElementById('pumpinput');
        filter = input.value.toUpperCase();
        ul = document.getElementById("pumpUL");
        li = ul.getElementsByTagName('li');

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("h4")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "block";
            } else {
                li[i].style.display = "none";
            }
        }
    }
    </script>
  </body>
</html>
