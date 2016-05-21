$(document).ready(function() {
  $('.first').on('mouseenter', function() {
    $(this).addClass('highlight');
    $(this).find('.second').animate({'top': '-14px', 'opacity': '1'}, 'fast');
  });
  $('.first').on('mouseleave', function() {
    $(this).removeClass('highlight');
  });
});
