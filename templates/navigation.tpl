<div class="navbar-wrapper">
    <div class="container">
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                </button>
                <a class="brand seleccionado" id="" href="index.php?page=home">Tumpi</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                    {foreach key=key item=nav_element from=$navbar}
                        <li id="{$key}"><a class="
                            {if $page eq $key}
                                 seleccionado
                            {/if}
                        " href="index.php{$nav_element.url}">{$nav_element.texto}</a></li>
                    {/foreach}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
