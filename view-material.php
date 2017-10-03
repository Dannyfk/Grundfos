<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <img src="images/header.png" alt="header" id="header-grundfos">
    <section id="wrapper-content">
    <?php include 'aside.php'; ?>
    <section id="content" >
      <section id="main-content" >
        <img src="images/alpha.jpg" alt="pumpe">
        <p class="product-nr">Product nr. 0087637392</p>
        <p class="Last-updated">Last updated 13/9.17</p>
        <button><p>Add to MyPumps</p><img src="images/addpumpicon.png" alt="lock"></button>
          <a href="">Link to technical specifications</a>
          <p class="material-tab">Images</p>
          <p class="material-tab">Film</p>
          <p class="material-tab">Casestory</p>
          <p class="material-tab">Selling ponits</p>
          <p class="material-tab">Publications</p>
          <p class="material-tab">Webbanners</p>
          <img src="images/materialtypes/imagesicon.png" alt="icon">
          <img src="images/materialtypes/videosicon.png" alt="icon">
          <img src="images/materialtypes/casestoriesicon.png" alt="icon">
          <img src="images/materialtypes/sellingpointsicon.png" alt="icon">
          <img src="images/materialtypes/publicationsicon.png" alt="icon">
          <img src="images/materialtypes/webbannersicon.png" alt="icon">
          <section id="tab-images">
          <p>Print</p>
            <img src="images/alpha.jpg" alt="pummp" id="images-content1" class="bordergrey">
            <img src="images/alpha.jpg" alt="pummp" id="images-content2" class="bordergrey">
            <img src="images/alpha.jpg" alt="pummp" id="images-content3" class="bordergrey">
          <p>Web</p>
            <img src="images/alpha.jpg" alt="pummp" id="images-content4" class="bordergrey">
            <img src="images/alpha.jpg" alt="pummp" id="images-content5" class="bordergrey">
            <img src="images/alpha.jpg" alt="pummp" id="images-content6" class="bordergrey">
            <button>Download</button>
      </section>
    </section>
    </section>
    <script>
$("#images-content1").click(
  function() {
    $("#images-content1").toggleClass('borderblue');
  });
    $("#images-content2").click(
  function() {
    $("#images-content2").toggleClass('borderblue');
  });

    $("#images-content3").click(
  function() {
    $("#images-content3").toggleClass('borderblue');
  });

    $("#images-content4").click(
  function() {
    $("#images-content4").toggleClass('borderblue');
  });

    $("#images-content5").click(
  function() {
    $("#images-content5").toggleClass('borderblue');
  });

    $("#images-content6").click(
  function() {
    $("#images-content6").toggleClass('borderblue');
  });
</script>
  </body>
</html>
