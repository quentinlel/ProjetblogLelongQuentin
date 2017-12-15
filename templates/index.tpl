<head>
    <link rel="stylesheet" href="css/style.css" />

</head>
<div class="container"> 

    <br>
    <div class="row justify-content-center " >
        <h1 class="mt-3">Bienvenue sur mon Blog</h1>
    </div>
    
    <!-- Barre de recherche  -->
    <div class="row justify-content-center " >
        <form class="form-inline my-2 my-lg-0 " method="GET" action="index.php">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="recherche">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Recherche</button>
        </form>
    </div>
    
    <!-- Notification de connexion -->
    <br>
    {if (isset($_SESSION['notification_connexion']))}
        <div class="alert alert-{$connexion_result} alert-dismissible fade show col-md-6" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>
                {$_SESSION['notification_connexion']}
            </strong>
        </div>

    {/if}
    
    <!-- Affichage des articles dans l'index si il n'y a pas de recherche -->
    {if !isset($smarty.get.recherche)} 
        {foreach from=$tab_articles item=$value}
            <div class="row justify-content-center ">
                <div class="card border border-secondary col-md-6" >
                    <img class="card-img-top" src="img/{$value['id']}.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{$value['titre']} </h4>
                        <p class="card-title">{$value['texte']} </p>
                        <br>
                        <h4>Publié le {$value['date_fr']}</h4>
                        <a href="index.php?page={$page_courante}&action=commentaire&id={$value['id']}" class="btn btn-info" name="commentaire">Commentaire</a>
                        {if $is_connect == TRUE}
                            <a href="articles.php?action=modifier&id={$value['id']}" class="btn btn-warning" name="Modifier">Modifier</a>
                            <a href="index.php?action=supprimer&id={$value['id']}" class="btn btn-danger" name="Supprimer" onclick="return confirm('Etes vous sûre de vouloir supprimer cette valeur ?');">Supprimer</a>
                        {/if}
                        </br></br>
                        
                        <!-- Affichage des commentaires et de la zone de saisi si le bouton "commentaire" est cliqué -->
                        {if ($get['action']=="commentaire")}
                            {foreach from=$tab_articles_commentaire item=$value}
                                <div class="card" style="background-color:#E6E6E6">
                                    <div class="card-body">
                                        <h6 class="card-title font-weight-bold">Publié par <font color="DarkCyan">{$value['nom']} {$value['prenom']}</font> le {$value['date']} :</h6>
                                        <p class="card-text">{$value['txt']}</p>
                                    </div>
                                </div>
                                <br>

                            {/foreach} 
                            
                            <!-- Formulaire des commentaires -->
                            <form action="index.php?action=ajouter_commentaire&id={$value['id']}" method="POST" enctype="multipart/form-data" id="form_commentaire">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="nom" class="col-form-label">nom</label>
                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="prenom" class="col-form-label">prenom</label>
                                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-form-label">email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="exemple@mail.com" required="required">
                                    </div>
                                    <label for="commentaire" class="col-form-label">Commentaire</label>
                                    <textarea type="text" class="form-control" id="commentaire" name="commentaire" required="required" rows="4" ></textarea>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="submit" value="ajouter_commentaire">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        {/if}

                    </div>
                </div> 
            </div>
        {/foreach}
    {else}
        
        <!-- Affichage d'un article dans l'index à l'aide de la recherche -->
        {foreach from=$tab_articles_recherche item=$value}
            <div class="row justify-content-center ">
                <div class="card border border-secondary col-md-6" >
                    <img class="card-img-top" src="img/{$value['id']}.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{$value['titre']} </h4>
                        <p class="card-title">{$value['texte']} </p>
                        <br>
                        <h4>Publié le {$value['date_fr']}</h4>
                        <a href="index.php?page={$page_courante}&action=commentaire&id={$value['id']}" class="btn btn-info" name="commentaire">Commentaire</a>
                        {if $is_connect == TRUE}
                            <a href="articles.php?action=modifier&id={$value['id']}" class="btn btn-warning" name="Modifier">Modifier</a>
                            <a href="index.php?action=supprimer&id={$value['id']}" class="btn btn-danger" name="Supprimer" onclick="return confirm('Etes vous sûre de vouloir supprimer cette valeur ?');">Supprimer</a>
                        {/if}
                        </br></br>
                        {if ($get['action']=="commentaire")}
                            {foreach from=$tab_articles_commentaire item=$value}
                                <div class="card" style="background-color:#E6E6E6">
                                    <div class="card-body">
                                        <h6 class="card-title font-weight-bold">Publié par <font color="DarkCyan">{$value['nom']} {$value['prenom']}</font> le {$value['date']} :</h6>
                                        <p class="card-text">{$value['txt']}</p>
                                    </div>
                                </div>
                                <br>

                            {/foreach}
                            
                            <!-- Formulaire des commentaires -->
                            <form action="index.php?action=ajouter_commentaire&id={$value['id']}" method="POST" enctype="multipart/form-data" id="form_commentaire">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="nom" class="col-form-label">nom</label>
                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="prenom" class="col-form-label">prenom</label>
                                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-form-label">email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="exemple@mail.com" required="required">
                                    </div>
                                    <label for="commentaire" class="col-form-label">Commentaire</label>
                                    <textarea type="text" class="form-control" id="commentaire" name="commentaire" required="required" rows="4" ></textarea>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="submit" value="ajouter_commentaire">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        {/if}
                    </div>
                </div> 
            </div>
        {/foreach}        
    {/if}
    <br>
    <div class="row justify-content-center " >
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                
                <!-- Pagination limité à 1 article par page -->
                {for $i=1 to $nb_pages}
                    <div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">
                        <ul class="pagination">
                            <li class="pagination-item first-number page-item {if $page_courante == $i}is-active{/if}"> <a class="pagination-link " href="?page={$i}">{$i}</a> </li>
                        </ul>
                    </div>
                {/for}   
            </ul>

        </nav>
    </div>
</div>
            
<!-- Bootstrap core JavaScript -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/dist/jquery.validate.min.js"></script>
<script src="js/dist/localization/messages_fr.min.js"></script>

<!-- script pour mettre en avant les champs non rempli -->
<script>
                                $(document).ready(function () {
                                    $("#form_commentaire").validate();
                                    errorElement: 'div'
                                });
</script>   