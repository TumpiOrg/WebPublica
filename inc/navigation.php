<div class="navbar-wrapper">
    <div class="container">
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                </button>
                <a class="brand" href="index.php?page=home" style="color:white;">Tumpi</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
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
        </div>
    </div>
</div>
