<?php
include 'functions.php';

if (isset($_GET['code']) && !empty($_GET['code'])) // Check whether the code has been set / not empty.
{
    $code = $_GET['code']; // Retrive the code.
    redirect($code);  // Redirect to the original link.
    die();
}
?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="style.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> <!-- Use JQuery support -->
<script type="text/javascript">
    $(document)
        .ready(function() {
            $('$url').focus();
        });


    function go(url) // Function to validate the URL
    {
        $.post('url_validation.php', // Send the entered URL to url_validation.php for validation
            {
                url: url
            },
            function(data) {
                if (data == 'error_no_url') // Show this error if no URL has been entered.
                {
                    $('#message').html('<p>No URL has been entered.</p>');
                } else if (data == 'error_invalid_url') // Show this error if the entered URL is invalid.
                {
                    $('#message').html('<p>This is not a valid URL!</p>');
                } else if (data == 'error_is_min') // Show this error if the URL appears to be shortened already.
                {
                    $('#message').html('<p>This link appears to be shortened.</p>');
                } else // If it's a valid URL, show the shortened URL to the user.
                {
                    $('#url').val(data);
                    $('#url').select();
                    $('#message').html('<p>Sucessfully shortened your URL!</p>');
                }
            });
    }
</script>
</head>

<body>

    <header>

    </header>

    <div id="container">
        <h1>PendekInn: a URL Shortener Service</h1>
        <p>Enter a long URL and have it shortened.</p>
        <p><input type="text" name="url" id="url" size="60" onkeydown="if (event.keyCode == 13 || event.which == 13) 
            {
                go($('#url').val());
            }"><input type="button" value="Shorten" onclick="go($('#url').val())"></p>
        <div id="message">
            <p>&nbsp;</p>
        </div>
    </div>
</body>

</html>