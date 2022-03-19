<!-- contact.html for authentic_gainz -->
<?php include("../common/document_head.html"); ?>

<title>Authentic Gainz - Cultivating Authentic Gainz for all</title>
</head>

<body>
    <header>

        <?php include("../common/document_logo.php");?>
        <?php include("../common/document_mainmenu.html");?>

        <script src="scripts/contactform_validate.js"></script>
    </header>
    <main id="contact_page">
        <h4>We Want to Hear from You!</h4>
        <form id="contactForm" action="scripts/feedbackFormProcess.php" method="post">
            <fieldset>
                <legend>Racks</legend>
                <table>
                    <tr>
                        <td><input id="power_rack" type="checkbox" name="racks"></td>
                        <td><label for="power_rack">AG Power Rack<br><img src="images/power_rack.png"
                                    alt="AG Power Rack" height="150" width="200"></label></td>
                        <td><input id="wall_mount" type="checkbox" name="racks"></td>
                        <td colspan="30"><label for="wall_mount">AG Wall Mount<br><img src="images/wall_mount.png"
                                    alt="AG Wall Mount" height="150" width="200"></label></td>
                        <td><input id="squat_rack" type="checkbox" name="racks"></td>
                        <td><label for="squat_rack">AG Squat Rack<br><img src="images/squat_rack.png"
                                    alt="AG Wall Mount" height="150" width="200"></label></td>

                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <input id="love_rack" type="radio" name="rack_satisfaction"><label
                                            for="love_rack">I Love It!</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input id="okay_rack" type="radio" name="rack_satisfaction"><label
                                            for="okay_rack">It's Okay...</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input id="hate_rack" type="radio" name="rack_satisfaction"><label
                                            for="hate_rack">I Hate It!</label>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr class="comment_section">
                        <td></td>
                        <td>
                            <h2 id="rackCommentError" class="contactFormErrors"></h2>
                            <p>Can You Elaborate?</p><textarea id="rackComment" name="rackComment" rows="6"
                                cols="30"></textarea>
                        </td>
                    </tr>

                </table>
            </fieldset>
            <fieldset>
                <legend>Benches</legend>
                <table>
                    <tr>
                        <td><input id="westside_bench" type="checkbox" name="benches"></td>
                        <td><label for="westside_bench">Westside Bench<br><img src="images/westside_bench.png"
                                    alt="Westside Bench" height="150" width="200"></label></td>
                        <td><input id="incline_bench" type="checkbox" name="benches"></td>
                        <td><label for="incline_bench">Incline Bench<br><img src="images/incline_bench.png"
                                    alt="Incline Bench" height="150" width="200"></label></td>
                        <td><input id="flat_bench" type="checkbox" name="benches"></td>
                        <td><label for="flat_bench">Flat Bench<br><img src="images/flat_bench.png" alt="Flat Bench"
                                    height="150" width="200"></label></td>

                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <input id="love_bench" type="radio" name="bench_satisfaction"><label
                                            for="love_bench">I Love It!</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input id="okay_bench" type="radio" name="bench_satisfaction"><label
                                            for="okay_bench">It's Okay...</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input id="hate_bench" type="radio" name="bench_satisfaction"><label
                                            for="hate_bench">I Hate It!</label>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr class="comment_section">
                        <td></td>
                        <td>
                            <h2 id="benchCommentError" class="contactFormErrors"></h2>
                            <p>Can You Elaborate?</p><textarea id="benchComment" name="benchComment" rows="6"
                                cols="30"></textarea>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <fieldset>
                <legend>Contact Information</legend>

                <table>
                    <tr>
                        <h2 id="firstNameError" class="contactFormErrors"></h2>
                        <td>First Name:</td>
                        <td><input type="text" name="firstName" size="40"></td>
                    </tr>
                    <tr>
                        <h2 id="lastNameError" class="contactFormErrors"></h2>
                        <td>Last Name:</td>
                        <td><input type="text" name="lastName" size="40"></td>
                    </tr>
                    <tr>
                        <h2 id="emailError" class="contactFormErrors"></h2>
                        <td>E-mail Address:</td>
                        <td><input type="text" name="email" size="40"></td>
                    </tr>
                    <tr>
                        <h2 id="mainCommentError" class="contactFormErrors"></h2>
                        <td>Comments:</td>
                        <td><textarea name="mainComment" rows="6" cols="40"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="button" onclick="validateContactForm()" value="Let Us Know!"></td>
                        <td class="rightAligned"><input type="reset" value="Start Over"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </main>
    <footer>
        <?php include("../common/document_footer.html");?>
    </footer>
</body>

</html>