<?php
/* Smarty version 3.1.30, created on 2020-03-02 19:59:59
  from "C:\xampp\htdocs\gestionBP\src\view\User\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5d57af3c9289_92914586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20ec76f6e5fc1dd83c900d2fd221a6d051fb8568' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gestionBP\\src\\view\\User\\edit.html',
      1 => 1583172767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5d57af3c9289_92914586 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<!-- integration de javascript dans le moteur de rendu de vue Smarty -->
		
	</head>
	<body onload="load_design()">
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Agence/liste">GESTION DES AGENCES </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Roles/liste/"> GESTION DES PROFILES </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Employer/liste"> GESTION DES UTILISATEURS </a></li>
			
			</ul>
		</div>
		<div class="container"style="margin-top:80px;">
		
		<div class="col-md-10 col-xs-9 " >
			<div class="panel panel-info">
				<div class="panel-heading">Liste des DES UTILISATEURS</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<tr>
						<th>identifient</th>
						<th>NOM</th>
						<th>PRENOM</th>
						<th>LOGIN</th>
						<th>MOT DE PASSE</th>
						<th>PROFILE</th>
						<th>AGENCE</th>
						<th>Action</th>
						<th>Action</th>
					   </tr>
					   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeEmployer']->value, 'employe');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['employe']->value) {
?>
						
					   <tr>
						   <td><?php echo $_smarty_tpl->tpl_vars['employe']->value->getId();?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['employe']->value->getNom();?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['employe']->value->getPrenom();?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['employe']->value->getlogin();?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['employe']->value->getPwd();?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['employe']->value->getRole()->getLibelle();?>
</td>
						   <td><?php echo $_smarty_tpl->tpl_vars['employe']->value->getAgence()->getNumero();?>
</td>
						  
						   <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Employer/edit/<?php echo $_smarty_tpl->tpl_vars['employe']->value->getId();?>
 ">Editer</a></td>
						   <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Employer/delete/<?php echo $_smarty_tpl->tpl_vars['employe']->value->getId();?>
"onclick="confirm('voulez-vous supprimer ?');">supprimer</a></td>
						
												 
					   </tr>
					   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</table>	
					</div>
					
				</div>
			</div>
			<div class="col-md-6 col-xs-12 ">
				<div class="panel panel-info">
					<div class="panel-heading">FORMILAIRE DE GESTION DES UTILISATEURS</div>
					<div class="panel-body">
					   <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Employer/update">
						   <div class="form-group">
							   <label>id</label>
							   <input  class="form-control" type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['emplyer']->value->getId();?>
">
						   </div>
						   <div class="form-group">
							<label>NOM</label>
							<input  class="form-control" type="text" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['emplyer']->value->getNom();?>
">
						</div>
						   <div class="form-group">
							<label>PRENOM</label>
							<input  class="form-control" type="text" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['emplyer']->value->getPrenom();?>
" >
						</div>
						<div class="form-group">
							<label>LOGIN</label>
							<input  class="form-control" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['emplyer']->value->getLogin();?>
">
						</div>
						<div class="form-group">
							<label>MOT DE PASSE</label>
							<input  class="form-control" type="text" name="pwd" value="<?php echo $_smarty_tpl->tpl_vars['emplyer']->value->getPwd();?>
">
						</div>
						<div class="form-group">
							<label>AGENCE</label>
							<select  class="form-control"  name="idAgence">
								<option value="">faite un choix</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listAgence']->value, 'agence');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['agence']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['emplye']->value->getId() == $_smarty_tpl->tpl_vars['emplye']->value->getAgence()->getId()) {?>
                                <option selected  value="<?php echo $_smarty_tpl->tpl_vars['agence']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['agence']->value->getNumero();?>
</option>
                                <?php } else { ?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['agence']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['agence']->value->getNumero();?>
</option>
                                <?php }?>
								
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
						</div>
						<div class="form-group">
							<label>PROFILE</label>
							<select  class="form-control"  name="idAgence">
								<option value="">faite un choix</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeRoles']->value, 'role', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['role']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['emplye']->value->getId() == $_smarty_tpl->tpl_vars['emplye']->value->getRole()->getId()) {?>
                                <option selected  value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</option>
                                <?php } else { ?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value->getLbelle();?>
</option>
                                <?php }?>
								
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
						</div>
						<div class="form-group">
							
							<input  class="btn btn-success" type="submit" name="valider" value="Envoyer">
							<input  class="btn btn-danger" type="reset" name="annuller" value="Annuller">
						</div>
					   </form>
								
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
	</body>
</html>
<?php }
}
