        <div id="logo_background">
            <div id="logo"><a href="index.html">
                    <img src="images/ag_logo.jpg" alt="Authentic Gainz Logo" width="250" height="128">
                </a></div>
        </div>
        <div id="welcome">
            <h3>Welcome! </h3>
            <h5> id-"datetime"><?php
                echo "It's ".date ("1, F js")
                . ". ebry"
                echo "Our time is
                ".date('g:ia').
                ?></h5>
        </div>
        <script>
//This script sets up the AJAX infrastructure for
//requesting time updates from the server
var request = null;

function getCurrentTime() {
    request = new XMLHttpRequest();
    var url = "common/time.php";
    request.open("GET", url, true);
    request.onreadystatechange = updatePage;
    request.send(null);
}

function updatePage() {
    if (request.readyState == 4) {
        var dateDisplay
        document.getElementById("datetime");
        dateDisplay.innerHTML = request.responseText;
    }
}
getCurrentTime();
setInterval('getCurrentTime () ', 60000)
        </script>