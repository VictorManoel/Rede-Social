<link href="<?php echo HOST;?>templates/css/header/header.css" rel="stylesheet">
<header class="header">
    <!-- Navigation -->
    <div class="header-row header-row-links">
        <nav class="header-nav header-nav-links">
            <a href="<?php echo HOST;?>" class="nav-element-home" title="Home">
                <i class="material-icons">home</i>
            </a>
            <ul class="nav-list">
                <li class="nav-element">
                    <a href="<?php echo HOST;?>" class="nav-link" title="Home">
                        <i class="material-icons">home</i>
                    </a> 
                </li>
                <li class="nav-element">
                    <a href="<?php echo HOST;?>requests" class="nav-link" title="Friends Requests">
                        <i class="material-icons">person_add</i>
                    </a>  
                </li>
                <li class="nav-element">
                    <a href="<?php echo HOST;?>notifications" class="nav-link" title="Notifications">
                        <i class="material-icons">notifications</i>
                    </a>
                </li>
                <li class="nav-element nav-element-search">
                    <a href="<?php echo HOST;?>search" class="nav-link" title="Search">
                        <i class="material-icons">search</i>
                    </a>
                </li>
                <li class="nav-element">
                    <span class="nav-link header-nav-menu-btn" title="More...">
                        <i class="material-icons">expand_more</i>
                    </span>
                    <div class="header-menu header-nav-menu">
                        <ul class="header-menu-list">
                            <li class="header-menu-item" title="Settings">
                                <a href="<?php echo HOST;?>settings" class="header-menu-link">
                                    <i class="material-icons">settings</i>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li class="header-menu-item" title="Help">
                                <a href="<?php echo HOST;?>help" class="header-menu-link">
                                    <i class="material-icons">help_outline</i>
                                    <span>Help</span>
                                </a>
                            </li>
                            <li class="header-menu-item" title="Exit">
                                <a href="?logout=true" class="header-menu-link">
                                    <i class="material-icons">exit_to_app</i>
                                    <span>Exit</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Navigation Right -->
    <div class="header-row header-row-right">
        <nav class="header-nav header-nav-right">
            <ul class="nav-right-list">
                <li class="nav-right-element nav-right-search">
                    <a href="<?php echo HOST;?>search" class="nav-right-link" title="Search">
                        <i class="material-icons">search</i>
                    </a>
                </li>
                <li class="nav-right-element">
                    <a href="<?php echo HOST;?>user" title="Your profile">
                        <img src="<?php echo HOST;?>media/profile/default.svg" class="nav-right-image" alt="Name Name">
                    </a>
                </li>
                <li class="nav-right-element nav-right-menu">
                   <!-- context menu -->
                    <button class="header-navright-btn" title="Menu">
                      <i class="material-icons">more_vert</i>
                    </button>
                    <div class="header-menu header-navright-menu">
                        <ul class="header-menu-list">
                            <li class="header-menu-item" title="Friends Requests">
                                <a href="<?php echo HOST;?>requests" class="header-menu-link">
                                    <i class="material-icons">person_add</i>
                                    <span>Friends Requests</span>
                                </a>
                            </li>
                            <li class="header-menu-item" title="Notifications">
                                <a href="<?php echo HOST;?>notifications" class="header-menu-link">
                                    <i class="material-icons">notifications</i>
                                    <span>Notifications</span>
                                </a>
                            </li>
                            <li class="header-menu-item" title="Settings">
                                <a href="<?php echo HOST;?>settings" class="header-menu-link">
                                    <i class="material-icons">settings</i>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li class="header-menu-item" title="Exit">
                                <a href="?logout=true" class="header-menu-link">
                                    <i class="material-icons">exit_to_app</i>
                                    <span>Exit</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Navigation Search -->
    <div class="header-row header-row-search">
        <form action="<?php echo HOST;?>search" class="header-search" method="get">
            <input type="search" class="header-search-input" name="q" placeholder="Search" maxlength="1000" spellcheck="true" autocomplete="off" title="Search">
            <button type="submit" class="header-search-submit" title="Submit search">
                <i class="material-icons">search</i>
            </button>
        </form>
    </div>
</header>
<script>(function () {  
        
    document.addEventListener('DOMContentLoaded', function(){
        
        activeHeaderMenu();
        SearchIsEmpty();
    
    }, false );
 
    function activeHeaderMenu(){ 
 
        HeaderNavRightBtn = document.querySelector('.header-navright-btn');
        HeaderNavRightMenu = document.querySelector('.header-navright-menu');
        HeaderNavBtn = document.querySelector('.header-nav-menu-btn');
        HeaderNavMenu = document.querySelector('.header-nav-menu');
        
        HeaderNavBtn.addEventListener('click', function(event){

            event.stopPropagation();
            HeaderNavMenu.classList.toggle('header-menu--visible');
        });

        HeaderNavRightBtn.addEventListener('click', function(event){

            event.stopPropagation();
            HeaderNavRightMenu.classList.toggle('header-menu--visible');
        });

        document.addEventListener('click', function(){

            HeaderNavMenu.classList.remove('header-menu--visible');
            HeaderNavRightMenu.classList.remove('header-menu--visible');

        });
        
        window.addEventListener('resize', function(){

            HeaderNavMenu.classList.remove('header-menu--visible');
            HeaderNavRightMenu.classList.remove('header-menu--visible');

        });
        
    }
        
    function SearchIsEmpty(){
        HeaderSearch = document.querySelector('.header-search');
        HeadersearchText = document.querySelector('.header-search-input'); 
        
        HeaderSearch.addEventListener('submit', function(event){

            if(HeadersearchText.value.trim()===''){ 

                event.preventDefault();
                HeadersearchText.focus();
            }

        });
    
    }
})();</script>