<div id="box">programming with milan</div>
<button id="btn">addClass</button>
<button id="btn_1">removeClass</button>
<button id="btn_2">toggleClass</button>
<button id="btn_3">css</button>

<script src="js/jquery-3.6.0.min.js"></script>
<script>
$('#btn').click(function()
{
    $('#box').addClass('test');
    console.log($('box').css('font-size'));
});
$('#btn_1').click(function()
{
    $('#box').removeClass('test');
    
});

$('#btn_2').click(function()
{
    $('#box').toggleClass('test');
});

$('#btn_3').click(function()
{
    $('#box').css(
        {
            'border':'1px',
            'color':'green'
        }
    );
});





</script>
<style>
.test
{
color:red;
font-size: 30px;
}

</style>