<link href="<?php echo HOST;?>templates/css/header/header.css" rel="stylesheet">
<header>
    <nav id="nav-fix">
        <div class="navfix-div navfix-divli"><!-- Nav -->
            <ul>
               <li title="Home" class="navfix-li">
                   <a href="<?php echo HOST;?>">
                       <i class="material-icons">home</i>
                    </a>
               </li>
               <li title="Friends requests" class="navfix-li">
                   <a href="<?php echo HOST;?>requests">
                       <i class="material-icons">person_add</i>
                   </a>
               </li> 
               <li title="Notifications" class="navfix-li">
                   <a href="<?php echo HOST;?>notifications">
                       <i class="material-icons">notifications</i>
                   </a>
               </li> 
               <li title="Settings" class="navfix-li">
                   <a href="#settings">
                       <i class="material-icons">settings</i>
                   </a>
               </li> 
               <li title="Search" class="navfix-li navfix-lisearch">
                   <a href="<?php echo HOST;?>search">
                       <i class="material-icons">search</i>
                   </a>
               </li>     
            </ul>
        </div>
        <div class="navfix-div navfix-divuser">
            <div class="navfix-user" title="Your profile">
                <a href="<?php echo HOST;?>user">
                    <img src="<?php echo HOST;?>media/profile/default.svg" alt="Default profile">
                </a>
            </div>   
        </div>
        <div class="navfix-div navfix-divform"><!-- Search -->
            <form action="<?php echo HOST;?>search" method="get" class="navfix-form" onsubmit="isEmpty('.navfix-form input')">
            <script>function isEmpty(e){var e=document.querySelector(e);if(e.value.trim()==='')event.preventDefault();e.focus();}</script>
                <div title="search">
                    <input type="search" name="q" placeholder="Search" maxlength="1000" spellcheck="true" autocomplete="off" />
                    <button type="submit">
                        <i class="material-icons">search</i>
                    </button>
                </div>
           </form>
        </div>        
    </nav>
</header>