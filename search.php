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
<input type="text" id="pumpInput" onkeyup="searchpump()" placeholder="Search for pump" title="Type in a pump">
<ul>
  <li><?php include 'skabelosearch2.php'; ?></li>
  <li><?php include 'skabelosearch2.php'; ?></li>
  <li><?php include 'skabelosearch2.php'; ?></li>
  <li><?php include 'skabelosearch2.php'; ?></li>
  <li><?php include 'skabelosearch2.php'; ?></li>
</ul>
</section>
    </section>
    </section>
    <script type="text/javascript">
    function searchpump() {
  var input, filter, ul, li, h4, i;
  input = document.getElementById("pumpInput");
  filter = input.value.toUpperCase();
  ul = document.getElementById("ul-pumps");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
      h4 = li[i].getElementsByTagName("h4")[0];
      if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
      } else {
          li[i].style.display = "none";

      }
  }
}
    </script>
  </body>
</html>
