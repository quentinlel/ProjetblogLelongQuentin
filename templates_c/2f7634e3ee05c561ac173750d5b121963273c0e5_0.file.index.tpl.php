<?php
/* Smarty version 3.1.30, created on 2017-12-06 10:06:51
  from "H:\BOOTSTRAP\UwAmp\www\ProjetBlog\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a27c13b57f426_11078300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f7634e3ee05c561ac173750d5b121963273c0e5' => 
    array (
      0 => 'H:\\BOOTSTRAP\\UwAmp\\www\\ProjetBlog\\templates\\index.tpl',
      1 => 1512554808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a27c13b57f426_11078300 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
    <link rel="stylesheet" href="css/style.css" />

</head>
<div class="container"> 

    <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['notification_connexion']))) {?>
        <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['connexion_result']->value;?>
 alert-dismissible fade show col-md-6" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>
                <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['notification_connexion'];?>

            </strong>
        </div>

    <?php }?>
    <br>
    <div class="row justify-content-center " >
        <h1 class="mt-3">Bienvenue</h1>
    </div>
    <div class="row justify-content-center " >
        <form class="form-inline my-2 my-lg-0 " method="GET" action="index.php">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="recherche">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Recherche</button>
        </form>
    </div>

    <br>

    <?php if (!isset($_GET['recherche'])) {?> 
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_articles']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <div class="row justify-content-center ">
                <div class="card border border-secondary col-md-6" >
                    <img class="card-img-top" src="img/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['titre'];?>
 </h4>
                        <p class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['texte'];?>
 </p>
                        <br>
                        <h4>Publié le <?php echo $_smarty_tpl->tpl_vars['value']->value['date_fr'];?>
</h4>
                        <?php if ($_smarty_tpl->tpl_vars['is_connect']->value == TRUE) {?>
                            <a href="articles.php?action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn btn-warning" name="Modifier">Modifier</a>
                            <a href="index.php?action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn btn-danger" name="Supprimer" onclick="return confirm('Etes vous sûre de vouloir supprimer cette valeur ?');">Supprimer</a>
                            <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['page_courante']->value;?>
&action=commentaire&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn btn-info" name="commentaire">Commentaire</a>

                            </br></br>
                            <?php if (($_smarty_tpl->tpl_vars['get']->value['action'] == "commentaire")) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_articles_commentaire']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <div class="card" style="background-color:#E6E6E6">
                                        <div class="card-body">
                                            <h6 class="card-title font-weight-bold">Publié par <font color="DarkCyan"><?php echo $_smarty_tpl->tpl_vars['value']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['prenom'];?>
</font> le <?php echo $_smarty_tpl->tpl_vars['value']->value['date'];?>
 :</h6>
                                            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['txt'];?>
</p>
                                        </div>
                                    </div>
                                    <br>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
                                <form action="index.php?action=ajouter_commentaire&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" method="POST" enctype="multipart/form-data" id="form_commentaire">
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
                            <?php } else { ?>
                            <?php }?>
                        <?php }?>
                    </div>
                </div> 
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php } else { ?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_articles_recherche']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <div class="container col-md-6">
                <div class="card">
                    <img class="card-img-top" src="img/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['titre'];?>
 </h4>
                        <p class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['texte'];?>
 </p>
                        <br>
                        <?php echo $_smarty_tpl->tpl_vars['value']->value['date_fr'];?>

                        <br><br>
                        <a href="articles.php?action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn btn-warning" name="Modifier">Modifier</a>
                        <a href="index.php?action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn btn-danger" name="Supprimer" onclick="return confirm('Etes vous sûre de vouloir supprimer cet article ?');">Supprimer</a>
                        <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['page_courante']->value;?>
&action=commentaire&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
&recherche=<?php echo $_smarty_tpl->tpl_vars['get']->value['recherche'];?>
" class="btn btn-info" name="commentaire">Commentaire</a>
                        <br><br><br>
                        <?php if (($_smarty_tpl->tpl_vars['get']->value['action'] == "commentaire")) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_articles_commentaire']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                <div class="card" style="background-color:#E6E6E6">
                                    <div class="card-body">
                                        <h6 class="card-title font-weight-bold">Publié par <font color="DarkCyan"><?php echo $_smarty_tpl->tpl_vars['value']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['prenom'];?>
</font> le <?php echo $_smarty_tpl->tpl_vars['value']->value['date'];?>
 :</h6>
                                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['txt'];?>
</p>
                                    </div>
                                </div>
                                <br>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
                            <form action="index.php?action=ajouter_commentaire&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" method="POST" enctype="multipart/form-data" id="form_commentaire">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="nom" class="col-form-label">nom</label>
                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                                    </div>
                                    <div class="form-group">
                                        <label for="prenom" class="col-form-label">prenom</label>
                                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-form-label">email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="exemple@mail.com">
                                    </div>
                                    <label for="commentaire" class="col-form-label">Commentaire</label>
                                    <textarea type="text" class="form-control" id="commentaire" name="commentaire" required="required" rows="4" ></textarea>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="submit" value="ajouter_commentaire">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        <?php } else { ?>
                        <?php }?>

                    </div>
                </div> 
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
        
    <?php }?>

    <br>
    <div class="row justify-content-center " >
        <nav aria-label="Page navigation example">
            <ul class="pagination">

                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nb_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                    <div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">
                        <ul class="pagination">
                            <li class="pagination-item first-number page-item <?php if ($_smarty_tpl->tpl_vars['page_courante']->value == $_smarty_tpl->tpl_vars['i']->value) {?>is-active<?php }?>"> <a class="pagination-link " href="?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a> </li>
                        </ul>
                    </div>
                <?php }
}
?>
   
            </ul>

        </nav>
    </div>

</div>
<!-- Bootstrap core JavaScript -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/popper/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/dist/localization/messages_fr.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
     $(document).ready(function() {
     $("#form_commentaire").validate();
         errorElement: 'div'
     });
<?php echo '</script'; ?>
>   <?php }
}
