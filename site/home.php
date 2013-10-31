<div id="carousel_home" class="carousel slide visible-md visible-lg">
    <ol class="carousel-indicators">
        <li data-target="#carousel_home" data-slide-to="0" class="active"></li>
        <li data-target="#carousel_home" data-slide-to="1"></li>
        <li data-target="#carousel_home" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
	<?php
		include("site/slidesCarousel/tumpiAndroid.php");	
		include("site/slidesCarousel/tumpiPc.php");	
		include("site/slidesCarousel/quienesSomos.php");	
    ?>
	</div>
	<a class="left carousel-control" href="#carousel_home" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel_home" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>
<div class="visible-sm">
	<?php
		include("site/slidesCarousel/tumpiAndroid.php");	
		include("site/slidesCarousel/tumpiPc.php");	
		include("site/slidesCarousel/quienesSomos.php");	
    ?>		
</div>
<div class="visible-xs">
	<?php
		include("site/slidesCarousel/tumpiAndroid.php");	
		include("site/slidesCarousel/tumpiPc.php");	
		include("site/slidesCarousel/quienesSomos.php");	
    ?>		
</div>
<script>
	//$("#carousel_home").carousel({ interval:10000 });
</script>