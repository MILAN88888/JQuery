// //val or html or text

// $('#btn').click(function ()
// {   
//     // all for get operation
// //    let y = $('#box_1').text();
// //    let x = $('#box_1').html();
// //    let z = $('#name').val();
// //    console.log(x);
// //    console.log(y);
// //    alert(z);
// //    console.log($('a').attr('href'));

// //all for set operation
// //  $('#box_1').text('Programming with Hari');
// //  $('#box_2').html('Programming with Ram');
// //  $('#name').val('Enter you name');   
// //  $('a').attr('href','get_data.php');
// //  console.log($('a').attr('href'));

//     name1 = $('#name').val();
//     console.log(name1);
//     $('#box_2').html(name1);


// });

// // key up

// $('#name2').keyup( function(){
//     let txt = $('#name2').val();
//     if(txt==''){
//     $('#msg').html('');
//     }
//     else
//     {
//         $('#msg').html('Welcome '+txt);
//     }
// })
$('#btn2').click(function(){

    let txt1 = $('#name3').val();
    if(txt1 == "")
    {
        $('#msg2').html('please enter your name');
    }
    else{
        $('#frm').hide();
        $('#msg2').html("Thank you " + txt1);
    }

});