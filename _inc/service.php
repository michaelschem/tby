<?PHP
include 'dir.php';
?>

<div id="content" class="subPage">
    <div class="container">
        <div class="row">
            <div class="col col-7">
                <h1>Services / <span id="subpagetitle">General</span></h1>
                <div id="slideArea">
                    <div class="subslide" id="welcomeSlide" title="Welcome/Request Quote" >
                        <img alt="Service Image" src="<?PHP echo $dir ?>/images/service.jpg" >
                        <p>Welcome to The BoatYard-Marina del Rey! Here at the Marina’s oldest and most trusted full-service boat yard and marina we want todo everything we can to earn your business. We will strive to become your full-service boat yard of choice with the most friendly and experienced team in the area. Our on-site staff and exclusive sub-contractor team in combination withour sister property professionals in Channel Islands Harbor are available to provide an unparalleled level of service and support for all of your boating needs. Please drop by and check us out, or request a quote on the form below.<br>Happy Boating!</p>
                        <br>
                    </div>
                    <div class="subslide" id="haulandlaunchSlide" title="Haul-Outs">

                        <img src="<?PHP echo $dir ?>/images/subpages/haulandlaunch.png" >
                    </div>
                    <div class="subslide" id="bottompaintingSlide" title="Painting &amp; Finishing">
                        <img src="<?PHP echo $dir ?>/images/subpages/bottompainting.png" >
                    </div>
                    <div class="subslide" id="bottompeelingSlide" title="Fiberglass and Woodworking">
                        <img src="<?PHP echo $dir ?>/images/subpages/bottompeeling.png" >
                    </div>
                    <div class="subslide" id="engineSlide" title="Engine &amp; Mechanical">
                        <img src="<?PHP echo $dir ?>/images/subpages/engine.png" >
                    </div>
                    <div class="subslide" id="electricalSlide" title="Electrical">
                        <img src="<?PHP echo $dir ?>/images/subpages/electrical.png" >
                    </div>
                    <div class="subslide" id="mastglassSlide" title="Mast &amp; Rigging">
                        <img src="<?PHP echo $dir ?>/images/subpages/mast.png" >
                    </div>
                    <div class="subslide" id="plumbingSlide" title="Plumbing">
                        <img src="<?PHP echo $dir ?>/images/subpages/plumbing.png" >
                    </div>
                    <div class="subslide" id="mastsandriggingSlide" title="Running Rigging &amp; Props">
                        <img src="<?PHP echo $dir ?>/images/subpages/mastsandrigging.png" >
                    </div>
                    <div class="subslide" id="mastSlide" title="Mast &amp; Rigging">
                        <img src="<?PHP echo $dir ?>/images/subpages/mast.png" >
                    </div>
                    <div class="subslide" id="accessoriesSlide" title="Accessories &amp; Toys">
                        <img src="<?PHP echo $dir ?>/images/subpages/accessories.png" >
                    </div>
                    <div class="subslide" id="engineSlide" title="BoatYard Specials">
                        <img src="<?PHP echo $dir ?>/images/subpages/engine.png" >
                    </div>
                </div>
                <div class="tb2" >
                    <div id="details" class="top">
                        <div id="welcomeDetails" class="detail" >
                            <form>
                                <input type="hidden" value="Request for Service" name="type">
                                <table>
                                    <tr>
                                        <td colspan="2">
                                            <h1>Get a Free Quote Now</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="left">
                                                <legend>Your Name:</legend>
                                                <input name="Name" required />
                                            </div>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div  class="right">
                                            <legend>Email:</legend>
                                            <input name="Email" required />
                                        </td>
                                        <td>
                                            <div class="right">
                                                <ledgend>Phone: </ledgend>
                                                <input type="tel" name="Phone" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="left">
                                                <legend>Boat Name:</legend>
                                                <input name="BoatName" required/>
                                            </td>
                                        </td>
                                        <td>
                                            <div class="right">
                                                <legend>Service Requested:</legend>
                                                <select name="Service" required>
                                                    <option>---Choose One---</option>
                                                    <option value="Haul-out">Haul-out</option>
                                                    <option value="Painting &amp; Finishing">Painting &amp; Finishing</option>
                                                    <option value="Fiberglass repair" >Fiberglass repair</option>
                                                    <option value="Engine &amp; Mechanical">Engine &amp; Mechanical</option>
                                                    <option value="Electrical">Electrical</option>
                                                    <option value="Mast &amp; Rigging">Mast &amp; Rigging</option>
                                                    <option value="Plumbing">Plumbing</option>
                                                    <option value="Running Gear">Running Gear</option>
                                                </select>
                                            </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <legend>Comments:</legend>
                                            <textarea name="Comments" required></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <input type="submit" />
                                        </td>
                                    </tr>
                                </table>
                            </form>

                        </div>
                        <div class="detail" id="haulandlaunchDetails" >
                            <h3>Haul-Outs</h3>
                            <ul>
                                <li>35-Ton Marine Travelift</li>
                                <li>60-Ton Marine Travelift</li>
                                <li>20-Ton Mobile Boom Crane</li>
                                <li>Max Beam 17.5 feet</li>
                            </ul>
                        </div>
                        <div class="detail" id="bottompaintingDetails" >
                            <h3>Painting &amp; Finishing</h3>
                            <ul>
                                <li>Bottom Painting with Copper or Alternative Biocide Paints</li>
                                <ul>
                                    <li>Petit Paints with copper, low copper, or Econea biocides</li>
                                    <li>Interlux Paints with biocide or biocide free silicone paints</li>
                                </ul>
                                <li>Gelcoat Repairs</li>
                                <li>Topside Painting</li>
                                <li>Varnishing</li>
                                <li>Deck Paint and Teak Treatments</li>
                                <li>Buffing and Waxing</li>
                                <li>Detailing and Brightwork</li>

                            </ul>
                        </div>
                        <div class="detail" id="bottompeelingDetails" >
                            <h3>Fiberglass and Woodworking</h3>
                            <ul>
                                <li>Hull Repairs</li>
                                <li>Topside Repairs and Custom Fabrication</li>
                                <li>New Teak Decks and Resurfacing</li>
                                <li>Bait Tanks</li>
                                <li>Fire Damage Repairs</li>
                                <li>Cabinetry</li>
                                <li>Equipment Installations</li>
                            </ul>
                        </div>
                        <div class="detail" id="engineDetails" >
                            <h3>Engine &amp; Mechanical</h3>
                            <ul>
                                <li>Engine Re-Power and Overhauls</li>
                                <li>Fuel &amp; Exhaust Systems</li>
                                <li>HVAC Systems</li>
                                <li>Pumps and Fans</li>
                                <li>Refrigeration  and Freezers</li>

                            </ul>
                        </div>
                        <div class="detail" id="electricalDetails" >
                            <h3>Electrical</h3>
                            <ul>
                                <li>Electrical Repairs and Troubleshooting</li>
                                <li>Batteries and Chargers</li>
                                <li>Generator Repairs, Sales and Installation</li>
                                <li>Lighting and LED Upgrades</li>

                            </ul>
                        </div>
                        <div class="detail" id="mastDetails" >
                            <h3>Mast &amp; Rigging</h3>
                            <ul>
                                <li>Rigging Inspection and Tuning</li>
                                <li>Mast Stepping and Unstepping (30-Ton Mobile Boom Crane)</li>
                                <li>Standing Rigging (Rod and Wire)</li>
                                <li>Running Rigging</li>
                                <li>Furling Systems</li>
                                <li>Hydraulic Systems</li>
                                <li>Winch Servicing and Repairs</li>
                                <li>Custom Splicing </li>
                                <li>Mast Repairs</li>

                            </ul>
                        </div>
                        <div class="detail" id="plumbingDetails" >
                            <h3>Plumbing</h3>
                            <ul>
                                <li>Fresh Water Systems</li>
                                <li>Heads and Waste Systems</li>
                                <li>Bilge Pumps</li>
                                <li>Washdown Systems and Showers</li>
                                <li>Water Heaters</li>
                                <li>Watermaker Installations and Sales</li>
                                <li>Bait Tanks</li>

                            </ul>
                        </div>
                        <div class="detail" id="mastsandriggingDetails" >
                            <h3>Running Rigging &amp; Props</h3>
                            <ul>
                                <li>Propeller Repair and Balancing</li>
                                <li>Cutlass Bearing Replacement</li>
                                <li>Shaft Straightening  and Replacement</li>
                                <li>Rudder and Shaft Log</li>
                                <li>Dripless and Conventional Bearings</li>
                                <li>Trim Tabs</li>
                                <li>Stabilizer Repair and Installation</li>
                                <li>Galvanic Protection Systems</li>

                            </ul>
                        </div>
                        <div class="detail" id="accessoriesDetails" >
                            <h3>Accessories &amp; Toys</h3>
                            <ul>
                                <li>Underwater Lights</li>
                                <li>Thruster Sales and Installations</li>
                                <li>Decorative Lighting</li>
                                <li>Electric BBQ Installations</li>
                                <li>Hot Tubs</li>
                                <li>Underwater Cameras</li>
                                <li>FLIR Installations</li>

                            </ul>
                        </div>


                        <div class="bottom">
                            For more information or to schedule your haul-out appointment, please contact <?PHP echo $vals['general_manager']['name'] ?> at <span>(310) 823-8964</span> or complete the on-line scheduling request under the Resources Section of this website and someone from the BoatYard will be in touch with you shortly.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-5">
                <br clear="all">
                <div class="tb1 subNav">
                    <ul>
                        <?PHP
                        //print_r($pageNav);
                        //foreach($pageNav as $item){
                        //    echo $item;
                        //}
                        ?>
                        <li id="welcome">Welcome/Request Quote</li>
                        <li id="haulandlaunch">Haul-Outs</li>
                        <li id="bottompainting">Painting &amp; Finishing</li>
                        <li id="bottompeeling">Fiberglass and Woodworking</li>
                        <li id="engine">Engine &amp; Mechanical</li>
                        <li id="electrical">Electrical</li>
                        <li id="mast">Mast &amp; Rigging</li>
                        <li id="plumbing">Plumbing</li>
                        <li id="mastsandrigging">Running Rigging &amp; Props</li>
                        <li id="accessories">Accessories &amp; Toys</li>
                        <!--- <li id="struts">BoatYard Specials</li> -->
                    </ul>
                </div>
                <u><br clear="all">
                </u>
            </div>


        </div>
        <br/>
    </div>
</div>
<?PHP
$pageIndex = "";
$sub = $_GET['sub'];
switch ($sub ) {
   case 'welcome':
   $pageIndex = 1;
   break;
   case 'haulandlaunch':
   $pageIndex = 2;
   break;
   case 'bottompainting':
   $pageIndex = 3;
   break;
   case 'bottompeeling':
   $pageIndex = 4;
   break;
   case 'engine':
   $pageIndex = 5;
   break;
   case 'electrical':
   $pageIndex = 6;
   break;
   case 'mast':
   $pageIndex = 7;
   break;
   case 'plumbing':
   $pageIndex = 8;
   break;
   case 'mastsandrigging':
   $pageIndex = 9;
   break;
   case 'accessories':
   $pageIndex = 10;
   break;
   case 'spec':
   $pageIndex = 11;
   break;
   default:
   $pageIndex = 1;
   $sub = "welcome";
   break;
}

$script = ("<script>
    $('document').ready(function(){
        submitForm();
        startNav();
        console.log('service.php > document > ready');
        $('.subNav li').click(function(event) {
            var id = $(this).attr('id');
            loadSub(id);
            $('.subNav li#' + id).css({'background': '#b58743', 'color': 'white'});
            $('#generalDetails').show();
        });

loadSub('$sub');
$('.subNav li:nth-child(" . $pageIndex . ")').css({'background': '#b58743', 'color': 'white'});
$('#generalDetails').show();
});
</script>

");
echo $script;
?>