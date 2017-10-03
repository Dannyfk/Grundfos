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


  $("#pub-select1").click(
      function() {
  $("#pub-content1").toggleClass('borderblue');
    });
  $("#pub-select2").click(
      function() {
  $("#pub-content2").toggleClass('borderblue');
    });
  $("#pub-select3").click(
      function() {
  $("#pub-content3").toggleClass('borderblue');
    });
  $("#pub-select4").click(
    function() {
  $("#pub-content4").toggleClass('borderblue');
    });
  $("#pub-select5").click(
      function() {
  $("#pub-content5").toggleClass('borderblue');
    });
  $("#pub-select6").click(
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
$("#pub-content6, #pub-content5, #pub-content4, #pub-content3, #pub-content2, #pub-content1").addClass('display-none');
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
$("#pub-content6, #pub-content5, #pub-content4, #pub-content3, #pub-content2, #pub-content1").addClass('display-none');
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
$("#pub-content6, #pub-content5, #pub-content4, #pub-content3, #pub-content2, #pub-content1").addClass('display-none');
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
$("#pub-content6, #pub-content5, #pub-content4, #pub-content3, #pub-content2, #pub-content1").addClass('display-none');
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
$("#pub-content6, #pub-content5, #pub-content4, #pub-content3, #pub-content2, #pub-content1").removeClass('display-none');
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
$("#pub-content6, #pub-content5, #pub-content4, #pub-content3, #pub-content2, #pub-content1").addClass('display-none');
});
