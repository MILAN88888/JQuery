<button id="btn">submit</button>



<script src="js/jquery-3.6.0.min.js"></script>
<script>
    $('#btn').click(function()
    {
        $.ajax(
            {
                url : "https://dummyjson.com/products",
                success:function(result)
                {
                    console.log(result);
                }
            }
        );
    });

</script>