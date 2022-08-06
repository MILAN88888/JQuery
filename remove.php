<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table id="table">
<tr id="tr1"><td><label>Name</label><input type="text" id="name"></td><td ><button id="add">Add
</button></td></tr>
</table>
</body>
</html>


<script src="js/jquery-3.6.0.min.js"></script>
<script>
    id=1;
$('#add').click(function()
{   id++;
    $('table').append("<tr id='tr"+id+"'><td><label>Name</label><input type='text' /></td><td><button class='rmv' data-id='"+id+"'>remove</button></td></tr>")
});

$('body').on('click','.rmv',function()
{
    let tid = $(this).attr('data-id');
    $("#tr"+tid).remove();
})


</script>