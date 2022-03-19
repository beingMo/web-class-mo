<?php
/*welcome_ajax.php
This page displays a welcome message in which the date and
time are refreshed every 60 seconds via AJAX communication
with the server. Initially the text color of the entire page
is black, but each refresh uses a randomly chosen text color
from red, green, blue or maroon just for the two lines containing
the date and time information. Because the color choice is
random, the same color may repeat after a refresh. The rest
of the page is not refreshed, so its text color remains black.
*/
session_start();
if (!isset($_SESSION['timedateRefreshCount']))
    $_SESSION['timedateRefreshCount'] = 0;
?>
<!DOCTYPE html>
<!--document_head.html-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <base href="http://home.ite.sfcollege.edu/~maureen.auguste/index.html">
    <link rel="stylesheet" href="css/index.css">
    <script>
    //This script sets up the AJAX infrastructure for requesting
    //date, time and random display color updates from the server.
    var request = null;
    function getCurrentTime()
    {
      request = new XMLHttpRequest();
      var url = "time.php";
      request.open("GET", url, true);
      request.onreadystatechange = updatePage;
      request.send(null);
    }
    function updatePage()
    {
        if (request.readyState == 4)
        {
            var dateDisplay = document.getElementById("datetime");
            dateDisplay.innerHTML = request.responseText;
            var hiddenParagraph = document.getElementById("colorChoice");
            dateDisplay.style.color = hiddenParagraph.innerHTML;
        }
    }
    </script>
