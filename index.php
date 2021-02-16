<!DOCTYPE html>
<html>
<head>
    <title> CORS </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
</head>
<body>

<h1>CORS CHECKER </h1>

<p style="color:red"> Check out your console</p>
<script type="text/javascript">
    let url = 'http://127.0.0.1:8000/api/teste'

    console.log("LINK: " + url)

    $.ajax({
        type: "GET",
        dataType: "json",
        url: url,
        success: function(data){
            console.log(data);
        }
    });

</script>

</body>
</html>

