// Add active class to the current page's navigation link
$(document).ready(function() {
    $('nav ul li a[href="' + location.pathname.split("/").slice(-1) + '"]').addClass('active');
});