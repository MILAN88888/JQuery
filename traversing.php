<div class="p div">
    <div class="c1 div"></div>
    <div class="c2 div">
        <div class="c22 div"></div>
    </div>
    <div class="c3 div abc" ></div>
    <div class="c4 div"></div>
    <div class="c5 div abc"></div>

</div>
<button id="btn">submit</button>



<script src="js/jquery-3.6.0.min.js"></script>
<script>
$('#btn').click(function()
{   //parent
    // $('.c22').parent().css(
    //     {
    //         'background-color':'red',


    //     }
    // );

    //parents
    // $('.c22').parents().css(
    //     {
    //         'background-color':'red',


    //     }
    // );
    // let x=$('.c22').parent().html();
    // console.log(x);

    //parentsUntil()
    // $('.c22').parentsUntil('body').css(
    //     {
    //         'background-color':'red',


    //     }
    // );


    //children....
//     $('.c2').children().css(
//         {
//             'background-color':'red',


//         }
//     );
// });

//find.....
// $('.c2').find('.c22').css(
//         {
//             'background-color':'green',


//         }
//     );

//next and nextAll........................
// $('.c1').next().css(
//         {
//             'background-color':'yellow',


//         }
//     );
// next all apply at same level tag 

// $('.c1').nextAll().css(
//         {
//             'background-color':'yellow',


//         }
//     );
// nextUntil................
// $('.c1').nextUntil('.c5').css(
//         {
//             'background-color':'black',


//         }
//     );

//prevUntil...................
// $('.c3').prevUntil('.c1').css(
//         {
//             'background-color':'yellow',


//         }
//     );
// first and div first.............................
// $('div').first().css(
//         {
//             'background-color':'aqua',


//         }
//     );
// $('.p div').first().css(
//         {
//             'background-color':'aqua',


//         }
//     );

// last....................
// $('div').last().css(
//         {
//             'background-color':'aqua',


//         }
//     );

//.......eq()..........

// $('.p div').eq(5).css(
//         {
//             'background-color':'aqua',


//         }
//     );

// .............filter............................
// $('.p div').filter('.abc').css(
//         {
//             'background-color':'blue',


//         }
//     );

//........not......
$('.p div').not('.abc').css(
        {
            'background-color':'gray',


        }
    );



});

</script>
<style>
    .div{
        width: 100px;
        height: 100px;
    }

</style>