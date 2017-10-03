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
          <p class="name-pump-material">Alpha</p>
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
          <object data="files/1.pdf" type="application/pdf" id="pub-content1" class="bordergrey display-none"></object>
          <object data="files/2.pdf" type="application/pdf" id="pub-content2" class="bordergrey display-none"></object>
          <p class="select-pub" id="pub-select1">select</p>
          <p class="select-pub" id="pub-select2">select</p>
          <a href="files/1.pdf" target="_blank">Preview</a>
          <a href="files/2.pdf" target="_blank">Preview</a>
          <object data="files/3.pdf" type="application/pdf" id="pub-content3" class="bordergrey display-none"></object>
          <object data="files/4.pdf" type="application/pdf" id="pub-content4" class="bordergrey display-none"></object>
          <p class="select-pub" id="pub-select3">select</p>
          <p class="select-pub" id="pub-select4">select</p>
          <a href="files/3.pdf" target="_blank">Preview</a>
          <a href="files/4.pdf" target="_blank">Preview</a>
          <object data="files/5.pdf" type="application/pdf" id="pub-content5" class="bordergrey display-none"></object>
          <object data="files/6.pdf" type="application/pdf" id="pub-content6" class="bordergrey display-none"></object>
          <p class="select-pub" id="pub-select5">select</p>
          <p class="select-pub" id="pub-select6">select</p>
          <a href="files/5.pdf" target="_blank">Preview</a>
          <a href="files/6.pdf" target="_blank">Preview</a>
            <button>Download</button>
          </section>
          <section id="tab-webbanners" class="opacity-null">
          <p>webbanners</p>
          <img src="images/webbanner.jpg" alt="banner">
            <button>Download</button>
          </section>
    </section>
    </section>
    <script src="js/viewmaterial.js">
</script>
  </body>
</html>
