<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="0">
        <tr>
            <td>
                 <h1>PHP with Ajax</h1>
            </td>
        </tr>
        <tr>
            <td>
                 <input type="button" value="Load Data">
            </td>
        </tr>
        <tr>
            <td id="table-data">
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr> 
                </table>                 
            </td>
        </tr>
    </table>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#load_button").("click",function(e){
                $.ajax({
                    url:"",
                    type:"POST",
                    success: function(data){
                        $("#table-data").html(data);
                    }
                });
            });
        });
    </script>

</body>
</html>