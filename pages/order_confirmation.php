<!-- featured.html for authentic_gainz -->
<?php include("../common/document_head.html");?>

<title>Authentic Gainz - Cultivating Authentic Gainz for all</title>
</head>

<body onload="showSummary()">
    <header>
        <?php include("../common/document_logo.php");?> <?php include("../common/document_mainmenu.html");?>

        <script>
        function showSummary() {
            var priceColumn = sessionStorage.getItem("priceColumn");
            var titleColumn = sessionStorage.getItem("titleColumn");
            var total = sessionStorage.getItem("total");

            console.log(priceColumn);
            console.log(titleColumn);
            document.getElementById("priceColumn").innerHTML = priceColumn + total;
            document.getElementById("titleColumn").innerHTML = titleColumn + "Total: ";

            sessionStorage.removeItem("priceColumn");
            sessionStorage.removeItem("titleColumn");
            sessionStorage.removeItem("total");
            sessionStorage.clear();
        }
        </script>

    </header>
    <main>
        <h1 class="coming_soon">Order Summary</h1>
        <table id="orderSummary">
            <td id="titleColumn"></td>
            <td id="priceColumn"></td>
        </table>
    </main>
    <footer>
        <?php include("../common/document_footer.html");?>
    </footer>
</body>

</html>