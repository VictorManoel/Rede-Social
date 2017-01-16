<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Clan | Home</title>
    <meta name="theme-color" content="#1ABC9C"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo HOST;?>templates/css/home.css" rel="stylesheet">
    <link href="<?php echo HOST;?>templates/css/content.css" rel="stylesheet">
    
</head>
<body>
    <?php 
        include 'layout/header/headerOn.php';
    ?>
    
    <section id="container">
        <section class="sidebar-container">
            <aside class="side-bar"> 
                <div class="sidebar-panel">
                </div>
                <div class="sidebar-profile">
                    <div class="sidebar-profileimg">
                        <a href="<?php echo HOST;?>user" title="Your profile">
                            <img src="<?php echo HOST;?>media/profile/default.svg" alt="Default profile">
                        </a>
                    </div>
                    <a href="<?php echo HOST;?>user" title="Your profile">
                        <span class="sidebar-username">Nome Nome</span>
                    </a>
                </div>
                <nav class="sidebar-nav">
                    <ul class="sidebar-list">
                        <li>
                            <a href="<?php echo HOST;?>friends" title="See your friends!">
                                <i class="material-icons">group</i>
                                <span>Friends</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo HOST;?>photos" title="See your photos!">
                                <i class="material-icons">photo</i>
                                <span>Photos</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>
        </section>
        
        <section class="content-container">
            <div class="postform-box">
                <form>
                    <textarea placeholder="Whats on your mind?" name="pit" rows="2"></textarea>
                    <input type="file" id="postform-inputpic" name="pip" style="display:none;">

                    <div class="postform-filelist">
                        <i class="material-icons">image</i>
                        <span></span>
                        <i class="material-icons clear">clear</i>
                    </div>

                    <div class="postform-error">
                        <i class="material-icons">error</i>
                        <span>Write something...</span>
                    </div>

                    <footer class="postform-options">
                        <label for="postform-inputpic" title="Choose a photo"> 
                            <i class="material-icons postform-lbl">photo_camera</i>
                        </label>
                        <button type="submit" class="postform-btn" title="Send">
                            <i class="material-icons">send</i>
                        </button>
                    </footer>
                </form>
            </div>
            
            <article class="feed">

            </article>
        </section>  
    </section>
    <script async src="<?php echo HOST;?>templates/js/PostFormControl.js"></script>