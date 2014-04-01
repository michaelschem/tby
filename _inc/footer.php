<?PHP
include("dir.php");
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col col-3">
                &copy; Harbor Real Estate Group, LLC all rights reserved.
                <br/>
                <br/>
                <h5>AFFILIATIONS</h5>
                <br/>
                <div id="affiliations">
                    <a href="http://www.abycinc.org/"><img src="<?PHP echo $dir; ?>/images/abyc.png" alt="ABYC" /></a>
                    <a href="https://marinaassociation.org/"><img src="<?PHP echo $dir; ?>/images/ami.png" alt="Association of Marine Industries" /></a>
                    <a href="#"><img src="<?PHP echo $dir; ?>/images/clean_marina.png" alt="Clean Marina" /></a>
                    <a href="http://www.marina.org/"><img src="<?PHP echo $dir; ?>/images/mra.png" alt="MRA" /></a>
                </div>
            </div>
            <?PHP
            $i=0;
            foreach($nav as $menu){

                if(!is_array($menu)){
                    echo("<div class='col col-3>");
                    echo("<li class='h1'>
                        <a href='?page=" . array_keys($nav)[$i] . "'>" 
                        . array_keys($nav)[$i] 
                        . "</a>
                        ");
                } else {
                    echo("<div class='col col-3>");
                    echo("<li class='h1'>
                        <a href='?page=" . array_keys($nav)[$i] . "'>" 
                        . array_keys($nav)[$i] 
                        . "</a>
                        <ul class=''>
                        ");
                    $x=0;
                    foreach($menu as $submenu){
                        //$pageNav[array_keys($nav)[$i]] = "<li id='array_keys($menu)[$x]'>$submenu</li>";
                        //echo "<li id='array_keys($menu)[$x]'>$submenu</li>";
                            //echo $submenu;
                        echo("<li><a href='?page=Services&sub=" . array_keys($menu)[$x] . "'>$submenu</a></li>");
                        $x++;
                    }
                    echo("</ul></li>");
                    
                    
                }
                echo("</div>");
                $i++;
            }
            ?>

        </div>
    </div>
</footer>