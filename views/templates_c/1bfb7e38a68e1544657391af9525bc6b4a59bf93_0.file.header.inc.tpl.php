<?php
/* Smarty version 3.1.33, created on 2019-02-11 14:04:51
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/header.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6172f331a178_07405709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bfb7e38a68e1544657391af9525bc6b4a59bf93' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/header.inc.tpl',
      1 => 1549019329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6172f331a178_07405709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6460113295c6172f32b33e9_21173071', "title");
?>
</title>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0" />
		<meta name="theme-color" content="399CCF">
        <?php if (isset($_smarty_tpl->tpl_vars['page']->value['meta_description']) && !empty($_smarty_tpl->tpl_vars['page']->value['meta_description'])) {?><meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['meta_description'];?>
" /><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['page']->value['meta_robots']) && !empty($_smarty_tpl->tpl_vars['page']->value['meta_robots'])) {?><meta name="robots" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['meta_robots'];?>
"><?php }?>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/css/main.css" type="text/css" rel="stylesheet" />
		<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
		<?php if (isset($_smarty_tpl->tpl_vars['theme']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['theme']->value == "flat") {?>
		<link href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/css/flat.css" type="text/css" rel="stylesheet" />
		<?php }?>
		<?php }?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12963115305c6172f3305627_32607940', "css");
?>

        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <body class='<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134674935c6172f33073a7_67021537', "bodyclass");
?>
'>
		<header class="">
			<div class="container">
				<div class="logo float-left">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10343725525c6172f3308865_24865977', "logo");
?>

				</div>
				
				<nav class="nav-user float-right">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3804080785c6172f330a9d2_63155843', "nav-user");
?>

				</nav>
				
				<div class="clear"></div>
			</div>
		</header><?php }
/* {block "title"} */
class Block_6460113295c6172f32b33e9_21173071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6460113295c6172f32b33e9_21173071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['page']->value['title'];
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_12963115305c6172f3305627_32607940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_12963115305c6172f3305627_32607940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "bodyclass"} */
class Block_134674935c6172f33073a7_67021537 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyclass' => 
  array (
    0 => 'Block_134674935c6172f33073a7_67021537',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "bodyclass"} */
/* {block "logo"} */
class Block_10343725525c6172f3308865_24865977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'logo' => 
  array (
    0 => 'Block_10343725525c6172f3308865_24865977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/compte"><img src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/img/logo-simstudio.png" alt="logo simstudio" class="img-fluid" /></a><?php
}
}
/* {/block "logo"} */
/* {block "nav-user"} */
class Block_3804080785c6172f330a9d2_63155843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav-user' => 
  array (
    0 => 'Block_3804080785c6172f330a9d2_63155843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/compte/profil" class="nav-item"><img src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/img/picto-account.png" alt="account" title="Mon compte" /></a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/faq" class="nav-item"><img src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/img/picto-faq.png" alt="msg" title="FAQ" /></a>
					<?php if (isset($_smarty_tpl->tpl_vars['session']->value)) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/contact" class="nav-item"><img src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/img/picto-mail.png" alt="mail" title="Contact" /></a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/logout" class="nav-item"><img src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/img/picto-logout.png" alt="logout" title="Déconnexion" /></a>
					<?php }?>
					<?php
}
}
/* {/block "nav-user"} */
}
