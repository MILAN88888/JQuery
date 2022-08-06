<table border="1" id="table">

<tr><td><div id="box">Milan </div></td></tr>
</table>
<input type="text" id="name">
<button id="btn"> submit</button>




<script src="js/jquery-3.6.0.min.js"></script>
<script>

$('#btn').click(
    function(){

        let txt = $('#name').val();
        html="<tr><td>"+txt+"</td></tr>";
        $('#table').append(html);
    }
)
    
</script>