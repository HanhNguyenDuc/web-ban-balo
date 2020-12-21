$('.bill-header').click(function (){
    $(this).closest('.bill').find('.bill-content').slideToggle();
    // if (contentElement.is(":visible")){
    //     contentElement.hide();
    // }
    // else{
    //     contentElement.slideDown("slow");
    // }
})

// $(document).ready(function () {
//     $('.bill-content').hide();
// });