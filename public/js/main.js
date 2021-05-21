var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
};

$(document).ready(function() {

  $('ul.tabs li').click(function() {
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#" + tab_id).addClass('current');
  });

  $('ul.hutan-tabs li').click(function() {
    var tab_id = $(this).attr('data-tab');

    $('ul.hutan-tabs li').removeClass('current');
    $('.hutan-tab-content').removeClass('current');

    $(this).addClass('current');
    $("#" + tab_id).addClass('current');
  });
  $('ul.tani-tabs li').click(function() {
    var tab_id = $(this).attr('data-tab');

    $('ul.tani-tabs li').removeClass('current');
    $('.tani-tab-content').removeClass('current');

    $(this).addClass('current');
    $("#" + tab_id).addClass('current');
  });
  $('ul.ikan-tabs li').click(function() {
    var tab_id = $(this).attr('data-tab');

    $('ul.ikan-tabs li').removeClass('current');
    $('.ikan-tab-content').removeClass('current');

    $(this).addClass('current');
    $("#" + tab_id).addClass('current');
  });
});