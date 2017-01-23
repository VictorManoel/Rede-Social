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
    <link href="<?php echo HOST;?>templates/css/postForm.css" rel="stylesheet">
    
</head>
<body>
    <?php 
        include 'layout/header/header.php';
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
           
            <section class="postform-content">
                <form action="" method="post" class="postform">
                    <textarea class="postform-text" name="pit-clan" rows="2" placeholder="What are you doing? ;)" title="What are you doing? ;)"></textarea>
                    <input type="file" id="postform-inputpic" name="pip-clan" style="display:none;">

                    <div class="postform-filelist">
                        <i class="material-icons">image</i>
                            <span class="postform-file-name">Img.jpg</span>
                        <i class="material-icons clear">clear</i>
                    </div>

                    <div class="postform-error">
                        <i class="material-icons">error</i>
                        <span class="postform-error-text">Write something... :/</span>
                    </div>

                    <footer class="postform-options">
                        <label for="postform-inputpic" class="postform-piclabel" title="An image is worth a thousand words! ;)"> 
                            <i class="material-icons">add_a_photo</i>
                        </label>
                        <button type="submit" class="postform-submit" title="Send now!">
                            <span>Send</span>
                            <i class="material-icons">send</i>
                        </button>
                    </footer>
                </form>
            </section>
            
            <article class="feed">
                <section class="feed-post">
                   
                    <div class="feed-post-header">
                      
                       <div class="post-header-pic">
                           <img src="" alt="">
                       </div>
                       <div class="post-header-profile">
                            <div class="post-header-profile-name">
                               <a href="<?php echo HOST;?>user" title="Nome Nome">
                                   Name Name
                               </a> 
                            </div>
                            <div class="post-header-profile-date">11 - 02 - 2001</div>
                       </div>
                       <div class="post-header-menu">
                           
                       </div> 
                                              
                    </div>
                    <div class="feed-post-text-container">
                        <p class="post-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet maxime tempore, dolore necessitatibus fugiat vero repellendus, officiis modi, doloremque inventore error quisquam. Tenetur vitae vero officiis voluptatem nemo ducimus error?
                        </p>
                    </div>
                    <div class="feed-post-footer">
                        
                    </div>
                    
                </section>
            </article>
        </section>  
    </section>
    <script async src="<?php echo HOST;?>templates/js/PostFormControl.js"></script>