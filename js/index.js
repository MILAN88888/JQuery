// $('#box_1').slideUp(5000);
// $('#box').slideUp(5000);
// or
// $('div').slideUp(5000);

// effect

// $('#btn').click(function (){
//     $('#box').hide();

// });
//hide

$('#hide').click(function (){
    $('#box').hide(2000);

});
//show
$('#show').click(function (){
    $('#box').show(2000);

});
// toggle
$('#toggle').click(function (){
    $('#box').toggle(2000);

});
//fadeIn && fadeOut && fadeToggle

$('#fadein').click(function (){
    $('#box').fadeIn(2000);

});
$('#fadeout').click(function (){
    $('#box').fadeOut(2000);

});
$('#fadetoggle').click(function (){
    $('#box').fadeToggle(2000);

});
//slideUp && slideDown &&  slideToggle
$('#slideup').click(function (){
    $('div').slideUp(2000);

});
$('#slidedown').click(function (){
    $('div').slideDown(2000);

});
$('#slidetoggle').click(function (){
    $('div').slideToggle(2000);

});
//animate
$('#animate').click(function (){
    $('div').animate(
{
    width:'40px',
    height:'50px',  

}

    );

});