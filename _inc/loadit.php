<?PHP
include("dir.php");
echo $all;
if ($handle = opendir('.')) {
    echo "Directory handle: $handle\n<br>";
    echo "Entries:<br><br>";

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle)) && !in_array($entry,array("..",".","error_log","dir.php"))) {
        echo "<a href='$dir/_inc/loadit.php?page=$entry' >$entry</a><br>";
    }

    closedir($handle);
}

if(isset($_GET['page'])){
    echo "<div id='showcase'>";
    include("$dir/_inc/" . $_GET['page']);
    echo "</div>";
}
?>