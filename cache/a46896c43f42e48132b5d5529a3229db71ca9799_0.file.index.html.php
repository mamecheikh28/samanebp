<?php
/* Smarty version 3.1.30, created on 2020-03-02 19:14:26
  from "C:\xampp\htdocs\gestionBP\src\view\User\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5d4d0219e3a8_72316394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a46896c43f42e48132b5d5529a3229db71ca9799' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gestionBP\\src\\view\\User\\index.html',
      1 => 1583172768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5d4d0219e3a8_72316394 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Index</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<?php if ($_smarty_tpl->tpl_vars['user']->value->getRole()->getId() == 1) {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/user/index"> Admins</a></li>
				<?php }?>
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index"> fair un depot </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getId/1">fair un retrait</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">faire un virment </a></li>
				
				
			</ul>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE DANS LE MENU TRANSACTION</div>
			
			</div>
		</div>
		
	</body>
</html>
		
<?php }
}
