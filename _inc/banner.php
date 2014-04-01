<?PHP
include 'dir.php';
?>

<div id="banner">

    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
            <li data-target="#carousel" data-slide-to="4"></li>
            <li data-target="#carousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?PHP echo $dir; ?>images/banner/1.png" alt="...">
                <!-- <div class="carousel-caption">
                    ...
                </div> -->
            </div>
            <div class="item">
                <img src="<?PHP echo $dir; ?>images/banner/victor_truck.png" alt="...">
                <!-- <div class="carousel-caption">
                    ...
                </div> -->
            </div>
            <div class="item">
                <img src="<?PHP echo $dir; ?>images/banner/DSC02416.png" alt="...">
                <!-- <div class="carousel-caption">
                    ...
                </div> -->
            </div>
            <div class="item">
                <img src="<?PHP echo $dir; ?>images/banner/2.png" alt="...">
                <!-- <div class="carousel-caption">
                    ...
                </div> -->
            </div>
            <div class="item">
                <img src="<?PHP echo $dir; ?>images/banner/niceBoat.png" alt="...">
                <!-- <div class="carousel-caption">
                    ...
                </div> -->
            </div>
            <div class="item">
                <img src="<?PHP echo $dir; ?>images/banner/sm_boat.png" alt="...">
                <!-- <div class="carousel-caption">
                    ...
                </div> -->
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>