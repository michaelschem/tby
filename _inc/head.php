<?PHP
include 'dir.php';
if($_GET['page'] != ""){
    $Active[htmlspecialchars_decode($_GET['page'])] = "active";
} else {
    $Active['Home'] = "active";
}

?>

<header>

    <div class="container">
        <div id="logo">
            <a href="index.php" ><img src="<?PHP echo $dir; ?>/images/TBY%20Logo.gif" alt="TBY Logo" ></a>
        </div>
        <p>Marina Del Rey</p>
        <a href="index.php" ><img id="boatyardTitle" src="<?PHP echo $dir; ?>/images/BoatYard.png" alt="The Boat Yard"></a>
        <ul class="nav nav-tabs">
            <?PHP
        //print_r($all);
            $i=0;
            foreach($nav as $menu){
                if(!is_array($menu)){
                        //echo($menu);
                    echo("<li class='$ " . $Active[array_keys($nav)[$i]] . "' >
                        <a href='$dir" . $menu . "'>" . array_keys($nav)[$i] . "</a>
                        </li>");
                    $i++;
                } else {

                    //print_r(key($nav[0]));
                    echo("<li class='dropdown " . $Active[array_keys($nav)[$i]] . "'>
                        <a class='dropdown-toggle' data-toggle='dropdown disabled' href='?page=" . array_keys($nav)[$i] . "'>
                        " . array_keys($nav)[$i] . "<span class='caret'></span>
                        </a>
                        <ul class='dropdown-menu'>
                        ");
                    $x=0;
                    foreach($menu as $submenu){
                        $pageNav[array_keys($nav)[$i]] = "<li id='array_keys($menu)[$x]'>$submenu</li>";
                        //echo "<li id='array_keys($menu)[$x]'>$submenu</li>";
                            //echo $submenu;
                        echo("<li><a href='?page=" . array_keys($nav)[$i] . "&sub=" . array_keys($menu)[$x] . "'>$submenu</a></li>");
                        $x++;
                    }
                    echo("</ul></li>");
                    $i++;
                }

            }
            ?>



        </ul>
    </div>
</header>