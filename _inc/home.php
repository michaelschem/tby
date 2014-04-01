<?PHP
include("dir.php");
?>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col col-7">
                <div id="slipInfo" class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        Panel content
                    </div>
                </div>
                <h1>Welcome to The BoatYard</h1>

                <p>Located in beautiful Marina Del Rey, The BoatYard-Marina Del Rey is the Marina’s most trusted full-service boat yard and marina. At the BoatYard we are focused on providing the highest level of personal service to every customer. We want to be your boating resource center where all marine questions can be answered. Our senior managers include licensed USCG Captains with decades of boating experience and local knowledge. Stop by and check us out! There’s always a smile and a pot of fresh coffee waiting for you.</p>

                <h1>Our Promise</h1>

                <p>We want to provide our customers with a one-stop boat yard and marina where all of your boating needs can be addressed. We endeavor to provide the highest level of workmanship and service available. It's that simple; we take the hassle out of your maintenance and repair work so that you can get back out on the water quickly. <strong>"Get it right the first time"</strong> is our motto. Our sister facility, <a href="http://tbyci.com/" >The BoatYard - Channel Islands</a> will honor all warranties as well when you are cruising up north.</p>
                <h1>Recent News</h1>
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="newsImage" src="http://2.bp.blogspot.com/-332sgQCdEHs/UAe4ULVKo-I/AAAAAAAAArQ/iEpFZr6rzUA/s1600/0_ZoomlionRT55yellow.jpg" width="40" />
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Major Renovation Scheduled this Winter</h4>
                        The BoatYard will be undergoing a major renovation scheduled for this winter.  Improvements will include new slips, new haul-out ways with 26 foot beam, new 100-ton Marine Travelift, private enclosed garage parking, new boater restroom facilities with showers and laundry room, and state of the art environmental clarifier system. <a href="<?PHP echo $dir; ?>images/A1-SITE-PLAN.png" rel="shadowbox"> view site plans...</a>
                    </div>
                </div>

                <h1>On-site Yacht Sales</h1>
                <a href="http://naosyachts.com/" ><button type="button" class="btn btn-default btn-lg onSite"><img width="150" src="<?PHP echo $dir; ?>images/NaosYachtslogo1.png" title="Go to Naos Yachts Sales website" ></button></a>
                <a href="http://www.denisonyachtsales.com/"><button type="button" class="btn btn-default btn-lg onSite"><img width="180" src="<?PHP echo $dir; ?>images/dennisin.jpg" title="Go to Dennisin Yachts Sales website" ></button></a>
            </div>
            <div class="col col-5" >
                <h1>Location</h1>
                <div id="map-canvas"></div>
                <div id="contactInfo">
                    <div class="row">
                        <img class="icon" src="<?PHP echo $dir; ?>images/glyph/glyphicons_442_earphone.png" width="20" />
                        <p class="info"><strong id="mainPhoneNumber">(310)823-8964</strong></p>
                    </div>
                    <div class="row">
                        <img class="icon" src="<?PHP echo $dir; ?>images/glyph/glyphicons_089_building.png" width="20" />
                        <p class="info">13555 Fiji Way<br/>Marina Del Rey, CA 90929</p>
                    </div>
                    <div class="row">
                        <img class="icon" src="<?PHP echo $dir; ?>images/glyph/glyphicons_010_envelope.png" width="20" />
                        <p class="info"><a href="mailto:<?PHP echo $vals['general_manager']['email'] ?>"><?PHP echo $vals['general_manager']['email'] ?></a></p>
                    </div>
                    <div class="row">
                        <img class="icon" src="<?PHP echo $dir; ?>images/glyph/glyphicons_054_clock.png" width="20" />
                        <p class="info">Mon-Fri 7:30 AM to 4:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
</div>

<script type="text/javascript">
$('document').ready(function(){
        //startSlider();
        Shadowbox.init({ handleOversize: 'drag', modal: false, displayNav: true });
        startNav();
    });
</script>
</div>