$('.navItem').click(
function() {
if ($(this).hasClass('dropdownOpen')) {
  $(this).removeClass('dropdownOpen');
}
else {
  $(this).addClass('dropdownOpen');
}
}
);
