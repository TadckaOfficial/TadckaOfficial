$(document).ready(function() {

// navbar smooth scrolling
var retroNavHeight = $('.navbar').outerHeight();

    $('.slide-section').click(function(e) {

        var linkHref = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(linkHref).offset().top - retroNavHeight
        }, 700);

        e.preventDefault();
    });
        // accordian about-me
        var acc = document.getElementsByClassName("accordion");
            var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function(){
                /* Toggle between adding and removing the "active" class,
                to highlight the button that controls the panel */ 
                this.classList.toggle("active");

                /* Toggle between hiding and showing the active panel */ 
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            }
        }

        $('.send-submit').click(function() {
            $.ajax({
                url: "php/message.php",
                type: "post",
                data: {
                    request: true,
                    name: $('#name').val(),
                    email: $('#email').val(),
                    subject: $('#subject').val(),
                    sendMessage: $('#send-message').val()    
                } ,
                success: function (msg) {
                   // you will get response from your php page (what you echo or print)                 
                    console.log(msg);
                },
            });
        });
});
