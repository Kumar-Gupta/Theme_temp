    (function($){
        $(document).ready(function () {
            //class for sidebar
            $('.default-sidebar > ul').addClass('list-group list-group-flush')
            $('.default-sidebar > ul > li').addClass('list-group-item')
            $('.default-sidebar > ul > li > a').addClass('text-decoration-none text-dark')

            //class for footer
            $('.footer_widget > .wp-widget-group__inner-blocks > .wp-block-group > ul').addClass('list-decoration-none small')
            $('.wp-widget-group__inner-blocks > .wp-block-group  > ul > li > a').addClass('text-decoration-none text-light')
            $('.main-header img').addClass('rounded')
            
            // comment title
            $('#comments #reply-title').addClass('fs-5 fw-600 text-dark')
            $('#commentform > p').addClass('m-2')
            $('#commentform #comment').addClass('form-control')
            
            //about page field title
            $('.who-we-are-text h2').addClass('fs-4 fw-600')

            //front page dynamic feature 
            $('.features h2').addClass('fs-6 fw-600 mt-3')


        })
    })(jQuery);