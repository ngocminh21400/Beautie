    <div class="container">
        <div class="logo-nav animated lightSpeedIn">
                
                <a href='../../beautie'><img src="<?php echo base_url();?>Files/cssPic/logo1.png" alt="Logo" class="logo-pic animated tada"></a>
                    <!-- <a href='./beautie'><div class="logo animated shake" >BEaUtie</div></a> -->
                    <a href='#' class="location"><img class="icon" src="<?php echo base_url();?>Files/cssPic/location-icon.jpg" alt="location-icon"></a>
                    <a href='#' class="login"><img class="icon" src="<?php echo base_url();?>Files/cssPic/profile-icon.png" alt="user-icon">Log in/Sign up</a>
    
                </div>
                <nav class="nav navbar-expand-md menu-nav animated lightSpeedIn">
    
    
                    <button onclick="ShowMenu()" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon bg-info"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                    <a id="loadview_makeup" href="<?php echo base_url();?>beautie/loadview_makeup" class="menu-nav-item animated jello">Make up</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>beautie/" class="menu-nav-item animated jello">Skin care</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>beautie/" class="menu-nav-item animated jello">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a id="loadview_tipList" href="<?php echo base_url();?>beautie/loadview_tipList" class="menu-nav-item animated jello">Tips</a>
                                </li> 
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>beautie/" class="menu-nav-item animated jello">About us</a>
                                </li>  
                                <li class="nav-item">
                                    <div class="search">
                                        <img class="search-icon" src="<?php echo base_url();?>Files/cssPic/search.png" alt="search-icon">
                                        <input class="search-text" name="search" id="search" placeholder="Search...">
                                    </div>
                                </li>  
                            </ul>
                        </div>  
                </nav>
    <?php 
    $URI = $_SERVER['REQUEST_URI'];
    $uri = explode("/",$URI);
    $current = end($uri);
    
    echo '<script> $(document).ready(function(){
        $("#';
    echo $current;
    echo '").addClass("current-tab");
}); </script>' ;
     ?>

</div>
