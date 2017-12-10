$(document).ready(function() {

// navbar smooth scrolling
var retroNavHeight = $('.navbar').outerHeight();

    $('.slide-section, .slide-section li a').click(function(e) {

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
        /* Ajax function load posts without refresh */
    $(document).on('click','.show-more-posts', function(){
        
        var that = $(this);
        var page = that.data('page');
        var newPage = page+1;
        var ajaxurl = that.data('url');
        
        $.ajax({
            
            url : ajaxurl,
            type : 'post',
            data : {
                
                page : page,
                action: 'show_more_posts',
                
                
            },
            error : function( response ){
                console.log(response);
            },
            success : function( response ){

                if( response == 0 ){
                    
                    $('.show-more-posts-container').append('<div class="no-more-posts"><h3>NO MORE POSTS!</h3>');
                    that.slideUp(320);
                }
                
                that.data('page', newPage);
                $('.show-more-posts-container').append( response );
                
            }  
        });
    });
});
