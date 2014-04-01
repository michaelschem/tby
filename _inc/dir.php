<?PHP

$dir = "http://www.the-boatyard.com/";

$messageBox = "<div class='message'><h1>Alert</h1><p>message</p><button type='button' class='btn btn-default btn-lg'>OK</button></div><div class='darkbox' ></div>";

$vals = array(
    "general_manager"=>
    array("name"=>"Victor Espino",
        "email"=>"victor@tbymdr.com")
    );

$nav = array(
    "Home"=>"/",
    "Services"=>array("welcome"=>"Welcome/Request Quote",
        "haulandlaunch"=>"Haul-Outs",
        "bottompainting"=>"Painting &amp; Finishing",
        "bottompeeling"=>"Fiberglass and Woodworking",
        "engine"=>"Engine &amp; Mechanical",
        "electrical"=>"Electrical",
        "mast"=>"Mast &amp; Rigging",
        "plumbing"=>"Plumbing",
        "mastsandrigging"=>"Running, Rigging &amp; Props",
        "accessories"=>"Accessories &amp; Toys"),
    "Slips"=>"?page=Slips",
    "Employment"=>"?page=Employment",
    "Resources"=>array("warranty"=>"Warranty Info",
        "team"=>"Our Team",
        "gallery"=>"Photo Gallery")
    );

$info = 
array("meta"=>"<meta charset='utf-8'>"
    . "<meta http-equiv='X-UA-Compatible' content='IE = edge'>"
    . "<meta name='viewport' content='width = 1190, initial-scale = 1'>"
    . "<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>",
    "link"=> "<link href='$dir/images/favicon.ico' rel='icon'>"
    . "<link href='$dir/style.css' rel='stylesheet'/>",
    "title"=>"<title>The Boat Yard | Marina Del Rey</title>",
    "script"=> "<script src = 'https://code.jquery.com/jquery.js'></script>",
    "pager"=> "<script src='$dir/js/pager.js' ></script>",
    "subPager"=> "<script src='$dir/js/subPager.js' ></script>",
    "bootstrap"=> "<!-- Bootstrap -->"
    . "<link href='$dir/css/bootstrap.css' rel='stylesheet'>"
    . "<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->"
    . "<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->"
    . "<!--[if lt IE 9]>"
    . "<script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>"
    . "<script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>"
    . "<![endif]-->",
    "maps"=> "<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places'></script>",
    "shadowbox"=>"<script src='$dir/js/shadowbox.js'></script>"
    . "<link rel='stylesheet' type='text/css' href='$dir/css/shadowbox.css'>"
    );

$googleMaps = "<script>
function initialize() {
    var tbyMdrLatLng = new google.maps.LatLng(33.9754476,-118.4432932);
    var tbyCiLatLng = new google.maps.LatLng(34.1665533, -119.2217454);
    var mapOptions = {
        zoom: 12,
        center: tbyMdrLatLng
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var image = 'images/custom_pin.PNG';
    var tbyMdrMarker = new google.maps.Marker({
        position: tbyMdrLatLng,
        map: map,
        title: 'The BoatYard',
        icon: image
    });

var tbyCiMarker = new google.maps.Marker({
    position: tbyCiLatLng,
    map: map,
    title: 'The BoatYard',
    icon: image
});
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>";

$bootstrapJS = "<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src='https://code.jquery.com/jquery.js'></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src='$dir/js/bootstrap.min.js'></script>
<script src='http://getbootstrap.com/assets/js/docs.min.js'></script>"
;

$all = array("maps"=>$googleMaps,"info"=>$info,"bootstrap"=>$bootstrapJS,"nav"=>$nav);
?>