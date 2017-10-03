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
      <section id="main-content" class="view-material">
        <img src="images/alpha.jpg" alt="pumpe">
        <p class="product-nr">Product nr. 0087637392</p>
        <p class="Last-updated">Last updated 13/9.17</p>
        <button><p>Add to MyPumps</p><img src="images/addpumpicon.png" alt="lock"></button>
          <a href="">Link to technical specifications</a>
          <p id="image-tab" class="material-tab tab-active">Images</p>
          <p id="film-tab" class="material-tab tab-nonactive">Film</p>
          <p id="casestory-tab" class="material-tab tab-nonactive">Casestory</p>
          <p id="sellingpoints-tab" class="material-tab tab-nonactive">Selling ponits</p>
          <p id="publications-tab" class="material-tab tab-nonactive">Publications</p>
          <p id="webbanners-tab" class="material-tab tab-nonactive">Webbanners</p>
          <img src="images/materialtypes/imagesicon.png" alt="icon" id="image-tab1">
          <img src="images/materialtypes/videosicon.png" alt="icon" id="film-tab1">
          <img src="images/materialtypes/casestoriesicon.png" alt="icon" id="casestory-tab1">
          <img src="images/materialtypes/sellingpointsicon.png" alt="icon" id="sellingpoints-tab1">
          <img src="images/materialtypes/publicationsicon.png" alt="icon" id="publications-tab1">
          <img src="images/materialtypes/webbannersicon.png" alt="icon" id="webbanners-tab1">

          <section id="tab-images" class="opacity-one">
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
          <section id="tab-film" class="opacity-null">
          <p>Film</p>
          <iframe width="550" height="305" src="https://www.youtube.com/embed/Pv9j-h54wGA" frameborder="0" allowfullscreen></iframe>
            <button>Download</button>
          </section>
          <section id="tab-casestory" class="opacity-null">
          <p>Casestory</p>
          <object data="files/alpha.pdf" type="application/pdf">
             </object>
            <button>Download</button>
          </section>
          <section id="tab-sellingpoints" class="opacity-null">
          <p>Sellingpoints</p>
          <object data="files/selling.pdf" type="application/pdf"></object>
            <button>Download</button>
          </section>
          <section id="tab-publications" class="opacity-null">
          <p>Publications</p>
          <object data="files/1.pdf" type="application/pdf" id="pub-content1" class="bordergrey"></object>
          <object data="files/2.pdf" type="application/pdf" id="pub-content2" class="bordergrey"></object>
          <a href="files/1.pdf" target="_blank">Preview</a>
          <a href="files/2.pdf" target="_blank">Preview</a>
          <object data="files/3.pdf" type="application/pdf" id="pub-content3" class="bordergrey"></object>
          <object data="files/4.pdf" type="application/pdf" id="pub-content4" class="bordergrey"></object>
          <a href="files/3.pdf" target="_blank">Preview</a>
          <a href="files/4.pdf" target="_blank">Preview</a>
          <object data="files/5.pdf" type="application/pdf" id="pub-content5" class="bordergrey"></object>
          <object data="files/6.pdf" type="application/pdf" id="pub-content6" class="bordergrey"></object>
          <a href="files/5.pdf" target="_blank">Preview</a>
          <a href="files/6.pdf" target="_blank">Preview</a>
            <button>Download</button>
          </section>
          <section id="tab-webbanners" class="opacity-null">
          <p>webbanners</p>
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


  $("#pub-content1").click(
      function() {
  $("#pub-content1").toggleClass('borderblue');
    });
  $("#pub-content2").click(
      function() {
  $("#pub-content2").toggleClass('borderblue');
    });
  $("#pub-content3").click(
      function() {
  $("#pub-content3").toggleClass('borderblue');
    });
  $("#pub-content4").click(
    function() {
  $("#pub-content4").toggleClass('borderblue');
    });
  $("#pub-content5").click(
      function() {
  $("#pub-content5").toggleClass('borderblue');
    });
  $("#pub-content6").click(
      function() {
  $("#pub-content6").toggleClass('borderblue');
    });


$("#image-tab, #image-tab1").click(
    function() {
$("#tab-images").addClass('opacity-one');
$("#tab-images").removeClass('opacity-null');
$("#tab-film, #tab-casestory, #tab-webbanners, #tab-publications, #tab-sellingpoints").removeClass('opacity-one');
$("#tab-film, #tab-casestory, #tab-webbanners, #tab-publications, #tab-sellingpoints").addClass('opacity-null');
$("#image-tab").addClass('tab-active');
$("#image-tab").removeClass('tab-nonactive');
$("#film-tab, #casestory-tab, #webbanners-tab, #publications-tab, #sellingpoints-tab").addClass('tab-nonactive');
$("#film-tab, #casestory-tab, #webbanners-tab, #publications-tab, #sellingpoints-tab").removeClass('tab-active');
});

$("#film-tab, #film-tab1").click(
    function() {
$("#tab-film").addClass('opacity-one');
$("#tab-film").removeClass('opacity-null');
$("#tab-images, #tab-casestory, #tab-webbanners, #tab-publications, #tab-sellingpoints").removeClass('opacity-one');
$("#tab-images, #tab-casestory, #tab-webbanners, #tab-publications, #tab-sellingpoints").addClass('opacity-null');
$("#film-tab").addClass('tab-active');
$("#film-tab").removeClass('tab-nonactive');
$("#image-tab, #casestory-tab, #webbanners-tab, #publications-tab, #sellingpoints-tab").addClass('tab-nonactive');
$("#image-tab, #casestory-tab, #webbanners-tab, #publications-tab, #sellingpoints-tab").removeClass('tab-active');
});

$("#casestory-tab, #casestory-tab1").click(
    function() {
$("#tab-casestory").addClass('opacity-one');
$("#tab-casestory").removeClass('opacity-null');
$("#tab-film, #tab-images, #tab-webbanners, #tab-publications, #tab-sellingpoints").removeClass('opacity-one');
$("#tab-film, #tab-images, #tab-webbanners, #tab-publications, #tab-sellingpoints").addClass('opacity-null');
$("#casestory-tab").addClass('tab-active');
$("#casestory-tab").removeClass('tab-nonactive');
$("#film-tab, #image-tab, #webbanners-tab, #publications-tab, #sellingpoints-tab").addClass('tab-nonactive');
$("#film-tab, #image-tab, #webbanners-tab, #publications-tab, #sellingpoints-tab").removeClass('tab-active');
});

$("#webbanners-tab, #webbanners-tab1").click(
    function() {
$("#tab-webbanners").addClass('opacity-one');
$("#tab-webbanners").removeClass('opacity-null');
$("#tab-film, #tab-casestory, #tab-images, #tab-publications, #tab-sellingpoints").removeClass('opacity-one');
$("#tab-film, #tab-casestory, #tab-images, #tab-publications, #tab-sellingpoints").addClass('opacity-null');
$("#webbanners-tab").addClass('tab-active');
$("#webbanners-tab").removeClass('tab-nonactive');
$("#film-tab, #casestory-tab, #image-tab, #publications-tab, #sellingpoints-tab").addClass('tab-nonactive');
$("#film-tab, #casestory-tab, #image-tab, #publications-tab, #sellingpoints-tab").removeClass('tab-active');
});

$("#publications-tab, #publications-tab1").click(
    function() {
$("#tab-publications").addClass('opacity-one');
$("#tab-publications").removeClass('opacity-null');
$("#tab-film, #tab-casestory, #tab-webbanners, #tab-images, #tab-sellingpoints").removeClass('opacity-one');
$("#tab-film, #tab-casestory, #tab-webbanners, #tab-images, #tab-sellingpoints").addClass('opacity-null');
$("#publications-tab").addClass('tab-active');
$("#publications-tab").removeClass('tab-nonactive');
$("#film-tab, #casestory-tab, #webbanners-tab, #image-tab, #sellingpoints-tab").addClass('tab-nonactive');
$("#film-tab, #casestory-tab, #webbanners-tab, #image-tab, #sellingpoints-tab").removeClass('tab-active');
});

$("#sellingpoints-tab, #sellingpoints-tab1").click(
    function() {
$("#tab-sellingpoints").addClass('opacity-one');
$("#tab-sellingpoints").removeClass('opacity-null');
$("#tab-film, #tab-casestory, #tab-webbanners, #tab-publications, #tab-images").removeClass('opacity-one');
$("#tab-film, #tab-casestory, #tab-webbanners, #tab-publications, #tab-images").addClass('opacity-null');
$("#sellingpoints-tab").addClass('tab-active');
$("#sellingpoints-tab").removeClass('tab-nonactive');
$("#film-tab, #casestory-tab, #webbanners-tab, #publications-tab, #image-tab").addClass('tab-nonactive');
$("#film-tab, #casestory-tab, #webbanners-tab, #publications-tab, #image-tab").removeClass('tab-active');
    });
</script>
  </body>
</html>
