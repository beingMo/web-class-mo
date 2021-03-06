<!-- catalog.html for authentic_gainz -->
<?php include("../common/document_head.html");?>

<title>Authentic Gainz - Cultivating Authentic Gainz for all</title>
</head>

<body>
    <header>
        <?php include("../common/document_logo.php");?> <?php include("../common/document_mainmenu.html");?>
        <script src="scripts/orderform_validate.js"></script>
        <script src="scripts/process_order.js"></script>
    </header>
    <main class="catalog">
        <h4 class="Centered">AG Catalog</h4>
        <p>Please select your gym items starting with a particular rack, next choose a bench and finally supplement with
            any number of attachments you would like!</p>
        <form id="order_form">
            <h2 id="rack_error" class="orderForm_error_message"></h2>
            <fieldset>
                <legend>Racks</legend>
                <table>
                    <tr>
                        <td><input id="power_rack" type="radio" name="racks" value="AG Power Rack 1215"></td>
                        <td><label for="power_rack">AG Power Rack<br><img src="images/power_rack.png"
                                    alt="AG Power Rack" height="150" width="200"></label>
                            <p id="powerrack_price">$1,215.00</p>
                            <p id="powerrackTax">$0.00</p>
                        </td>
                        <td><input id="wall_mount" type="radio" name="racks" value="AG Wall Mount 600"></td>
                        <td><label for="wall_mount">AG Wall Mount<br><img src="images/wall_mount.png"
                                    alt="AG Wall Mount" height="150" width="200"></label>
                            <p id="wallmount_price">$600.00</p>
                            <p id="wallmountTax">$0.00</p>
                        </td>
                        <td><input id="squat_rack" type="radio" name="racks" value="AG Squat Rack 535"></td>
                        <td><label for="squat_rack">AG Squat Rack<br><img src="images/squat_rack.png"
                                    alt="AG Squat Rack" height="150" width="200"></label>
                            <p id="squatrack_price">$535.00</p>
                            <p id="squatrackTax">$0.00</p>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <h2 id="bench_error" class="orderForm_error_message"></h2>
            <fieldset>
                <legend>Benches</legend>
                <table>
                    <tr>
                        <td><input id="westside_bench" type="radio" name="benches" value="Westside Bench 825"></td>
                        <td><label for="westside_bench">Westside Bench<br><img src="images/westside_bench.png"
                                    alt="Westside Bench" height="150" width="200"></label>
                            <p id="westsidebench_price">$825.00</p>
                            <p id="westsidebenchTax">$0.00</p>
                        </td>
                        <td><input id="incline_bench" type="radio" name="benches" value="Incline Bench 595"></td>
                        <td><label for="incline_bench">Incline Bench<br><img src="images/incline_bench.png"
                                    alt="Incline Bench" height="150" width="200"></label>
                            <p id="inclinebench_price">$595.00</p>
                            <p id="inclinebenchTax">$0.00</p>
                        </td>
                        <td><input id="flat_bench" type="radio" name="benches" value="Flat Bench 210"></td>
                        <td><label for="flat_bench">Flat Bench<br><img src="images/flat_bench.png" alt="Flat Bench"
                                    height="150" width="200"></label>
                            <p id="flatbench_price">$210.00</p>
                            <p id="flatbenchTax">$0.00</p>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <fieldset>
                <legend>Attachments</legend>
                <table>
                    <tr>
                        <td><input id="land_mine" type="checkbox" name="attachments" value="Land Mine 140 landmine_qty">
                        </td>
                        <td><label for="land_mine">Land Mine<br><img src="images/land_mine.png" alt="Land Mine"
                                    height="150" width="200"></label>
                            <p id="landmine_price" class="attachment_price">$140.00</p>
                            <p id="landmineTax">$0.00</p><select id="landmine_qty">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </td>
                        <td><input id="dip_bar" type="checkbox" name="attachments" value="Dip Bar 105 dipbar_qty"></td>
                        <td><label for="dip_bar">Dip Bar<br><img src="images/dip_bar.png" alt="Dip Bar" height="150"
                                    width="200"></label>
                            <p id="dipbar_price" class="attachment_price">$105.00</p>
                            <p id="dipbarTax">$0.00</p><select id="dipbar_qty">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </td>
                        <td><input id="lat_pulldown_seat" type="checkbox" name="attachments"
                                value="Lateral Pulldown 310 latpulldown_qty"></td>
                        <td><label for="lat_pulldown_seat">Lateral Pulldown Seat<br><img
                                    src="images/lat_pulldown_seat.png" alt="Lateral Pulldown Seat" height="150"
                                    width="200"></label>
                            <p id="latpulldown_price" class="attachment_price">$310.00</p>
                            <p id="latpulldownTax">$0.00</p><select id="latpulldown_qty">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </td>
                        <td><input id="plate_holder" type="checkbox" name="attachments"
                                value="Plate Holder 65 plateholder_qty"></td>
                        <td><label for="plate_holder">Plate Holder<br><img src="images/plate_holder.png"
                                    alt="Plate Holder" height="150" width="200"></label>
                            <p id="plateholder_price" class="attachment_price">$65.00</p>
                            <p id="plateholderTax">$0.00</p><select id="plateholder_qty">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input id="j_cup" type="checkbox" name="attachments" value="J Cup 139 jcup_qty"></td>
                        <td><label for="j_cup">J Cup<br><img src="images/jcup_pairs.png" alt="J Cup" height="150"
                                    width="200"></label>
                            <p id="jcup_price" class="attachment_price">$139.00</p>
                            <p id="jcupTax">$0.00</p><select id="jcup_qty">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </td>
                        <td><input id="spotter_arms" type="checkbox" name="attachments"
                                value="Spotter Arms 155 spotterarms_qty"></td>
                        <td><label for="spotter_arms">Spotter Arms<br><img src="images/spotter_arms.png"
                                    alt="Spotter Arms" height="150" width="200">
                            </label>
                            <p id="spotterarms_price" class="attachment_price">$155.00</p>
                            <p id="spotterarmsTax">$0.00</p><select id="spotterarms_qty">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <fieldset>
                <legend>Processing</legend>
                <table>
                    <tr>
                        <td><input type="button" value="Buy Now!" onclick="processOrder()"></td>
                        <td><input type="reset" value="Start Over"></td>
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