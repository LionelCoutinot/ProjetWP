<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Event-Managing</title>
         <?php
            wp_head();
         ?>
    </head>
	<body>
   <div class="custom-background">
        <div class="container-fluid dark-color">
            <div class="row">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <div class="col-sm-12 menu-color">
                        <!--<a class="navbar-brand mx-3 uppercase title" style="color:navy">Marque</a> -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>               
				        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0  ps-5 largeur">
                                <li class="nav-item"> 
                                    <a class="nav-link active text-warning uppercase"  aria-current="page" href="http://localhost/ProjetWP/">Accueil</a></span>
                                </li>
                          
                                <li class="nav-item dropdown">
                                    <a  href="#"  class="nav-link  dropdown-toggle  uppercase text-warning" id="navbarDropdown" role="button"    aria-expanded="false">
                                        Prestations
                                    </a>
                                    <ul class="dropdown-menu  uppercase" aria-labelledby="navbarDropdown">
                                        <li class="largeur"><a class="dropdown-item" href="http://localhost/ProjetWP/index.php/mariage/">Mariage</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item " href="http://localhost/ProjetWP/index.php/organisation/">Salon</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="http://localhost/ProjetWP/index.php/team-building/">Team Building</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle uppercase text-warning" href="http://localhost/ProjetWP/index.php/blog/" id="navbarDropdown" role="button"  aria-expanded="false">
                                        Blog
                                    </a>
                                    <ul class="dropdown-menu uppercase" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="http://localhost/ProjetWP/index.php/category/actu/">Actu</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="http://localhost/ProjetWP/index.php/category/equipe/">Équipe</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="http://localhost/ProjetWP/index.php/category/produits/">Produits</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-warning uppercase" href="http://localhost/ProjetWP/index.php/contact/">Contact</a>
                                </li>
                            </ul>
                            <div class="me-5">
                                <button class="btn btn-outline-primary text-end uppercase me-5 pb-2" id="link" target="_blank"><?php wp_loginout()?></button>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    
    
        
       
      
            


    
