<!DOCTYPE html>
<html>
<head>
    <title> CORS </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
</head>
<body>

<h1>CORS CHECKER </h1>

<p style="color:red"> Also check out your console</p>

<!--<button type="button" onclick="click()"> Clica aqui</button>-->

<p id="list"></p>
<script type="text/javascript">
    let url = 'http://127.0.0.1:8100/api/respostas'

    console.log("LINK: " + url)

    $.ajax({
        type: "GET",
        dataType: "json",
        url: url,
        success: function(data){
            console.log(data);

            let array = JSON.stringify(data)
            document.getElementById("list").innerHTML = array;

        }
    });

</script>

</body>
</html>

