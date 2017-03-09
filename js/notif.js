$(function(){
    $('.show-info').on('click', function(){
        $(this).toggleClass('active');
        if($(this).hasClass('active')){
            $(this).siblings('.fleche').removeClass('fa-angle-down').addClass('fa-angle-up');
        }else{
            $(this).siblings('.fleche').removeClass('fa-angle-up').addClass('fa-angle-down');
        }
        $(this).siblings('.hidden').slideToggle();
    })
})