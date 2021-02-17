<!DOCTYPE html>
<html>
<head>
    <title> CORS </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
</head>
<body>

<h1>CORS CHECKER </h1>

<h2>Insert the URL and Check all the data below!!!</h2>
<p></p>
<form id="idForm" method="post">
    <input type="text" id="url" placeholder="URL">
    <button type="submit">Submit</button>
</form>

<hr>
<h3 id="data"></h3>
<p id="list"></p>
<h4 id="error"></h4>


<script type="text/javascript">
    $('#idForm').submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var url = $("#url").val();
        console.log("LINK: " + url)

        $.ajax({
            type: "GET",
            dataType: "json",
            url: url,
            success: function (data) {
                console.log(data);
                    $('#data').text('Response Success => ' + url);
                    $('#list').text(JSON.stringify(data));
            },
            error: function(error) {
                $('#data').text('Response Error => ' + url);
                $('#list').text(error.statusText != 'error' ? error.statusText : "Blocked by CORS policy");
                $('#error').text('Open your Console');
            },
        });
    });
</script>

</body>
</html>

