<nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="./">Tumpi</a>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
		<?php 
			foreach(array_keys($navbar) as $key){
				echo "<li id=\"$key\" class=\"";
				if($page_name==$key)
					echo "active";
				echo "\"><a href=\"index.php?page=$key\">".$navbar[$key]."</a></li>";
			} 
		?>
			</ul>
		</div>
	</div>
</nav>
