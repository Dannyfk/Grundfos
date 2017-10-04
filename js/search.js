function searchpump() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('pumpinput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("pumpUL");
    li = ul.getElementsByTagName('li');

    // Bind keyup event on the input
$('#pumpUL').keyup(function() {

  // If value is not empty
  if ($('#pumpinput').val().length == 0) {
    // Hide the element
    $('.show_hide').hide();
  } else {
    // Otherwise show it
    $('.show_hide').show();
  }
}).keyup(); // Trigger the keyup event, thus running the handler on page load

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
function searchpumpindex() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('input-search-index');
    filter = input.value.toUpperCase();
    ul = document.getElementById("pumpUL-index");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 1; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > 0) {
            li[i].style.display = "block";
            ul.style.display = "block";
        } else {
            li[i].style.display = "none";
            ul.style.display = "none";
        }
    }
}
