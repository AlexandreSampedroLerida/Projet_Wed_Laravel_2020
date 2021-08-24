$(function(){

    var offsetCalcule = 5;

    var baseUrl = $('body').attr('data-baseUrl');

    $('.page-link').click(function(e){
        e.preventDefault();
        $.ajax({
            url: baseUrl + '/ajax/more-posts',
            data: {
                offset: offsetCalcule
            },
            method: 'get',
            success: function(reponsePHP) {
                $('#liste-posts').append(reponsePHP)
                                 .find('.blog-item:nth-last-of-type(-n+5)')
                                 .hide()
                                 .fadeIn();
                //offsetCalcule = offsetCalcule + 5;
                offsetCalcule += 5;
            },
            error: function(){
                alert("Problème durant la transaction !");
            }
        });
    });
})