<?PHP
include("_inc/dir.php");

$NavContent = file_get_contents("$dir/_inc/head.php?page=" . $_GET['page']);
switch ($_GET['page']){

    case "Services":
    $headContent = $info['meta'] . $info['link'] . $info['bootstrap'] . $info['title'] . $info['script'] . $info['pager'] . $info['subPager'];
    $servicesContent = file_get_contents("$dir/_inc/service.php?sub=" . $_GET['sub']);
    break;

    case "Slips":
    //$headContent = $info['meta'] . $info['link'] . $info['title'] . $info['script'] . $info['subPager'] . $info['bootstrap'];
    $headContent = $info['meta'] . $info['link'] . $info['bootstrap'] . $info['title'] . $info['script'] . $info['pager'] . $info['subPager'] . $info['maps'];
    $slipsContent = file_get_contents("$dir/_inc/slips.php?sub=" . $_GET['sub']);
    break;

    case "Employment":
    $headContent = $info['meta'] . $info['link'] . $info['bootstrap'] . $info['title'] . $info['script'] . $info['pager'] . $info['subPager'];
    $AboutUsContent = file_get_contents("$dir/_inc/about.php?sub=" . $_GET['sub']);
    break;

    case "Resources":
    $headContent = $info['meta'] . $info['link'] . $info['bootstrap'] . $info['title'] . $info['script'] . $info['pager'] . $info['subPager'] . $info['shadowbox'];
    $AboutUsContent = file_get_contents("$dir/_inc/resources.php?sub=" . $_GET['sub']);
    break;

    default:
    $headContent = $info['shadowbox'] . $info['meta'] . $info['link'] . $info['title'] . $info['script'] . $info['pager'] . $info['subPager'] . $info['bootstrap'] . $info['maps'] . $googleMaps;
    $homeContent = file_get_contents("$dir/_inc/home.php");
    $bannerContent = file_get_contents("$dir/_inc/banner.php");
    break;
}

$footerContent = file_get_contents("$dir/_inc/footer.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?PHP
    
    echo $headContent;
    ?>

</head>
<body>
    <?PHP
    echo $messageBox;
    echo $NavContent;
    
    echo $bannerContent;

    echo $homeContent; 
    echo $servicesContent;
    echo $slipsContent;
    echo $AboutUsContent;

    echo $bootstrapJS;
    echo $footerContent;
    ?>

    <?php include_once("analyticstracking.php") ?>
</body>
</html>