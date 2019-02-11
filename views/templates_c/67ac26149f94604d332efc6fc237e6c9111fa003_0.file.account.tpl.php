<?php
/* Smarty version 3.1.33, created on 2019-02-11 11:55:50
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6154b662fcc4_93501172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67ac26149f94604d332efc6fc237e6c9111fa003' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/account.tpl',
      1 => 1549483845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alert.inc.tpl' => 1,
  ),
),false)) {
function content_5c6154b662fcc4_93501172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3640017895c6154b6628114_04365274', "css");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10288625925c6154b6629682_72740491', "bodyclass");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11611946605c6154b662a342_01092782', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_3640017895c6154b6628114_04365274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_3640017895c6154b6628114_04365274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="css/moncompte.css" type="text/css" rel="stylesheet" /><?php
}
}
/* {/block "css"} */
/* {block "bodyclass"} */
class Block_10288625925c6154b6629682_72740491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyclass' => 
  array (
    0 => 'Block_10288625925c6154b6629682_72740491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
moncompte<?php
}
}
/* {/block "bodyclass"} */
/* {block "main"} */
class Block_11611946605c6154b662a342_01092782 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_11611946605c6154b662a342_01092782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container bton">
	
	<?php $_smarty_tpl->_subTemplateRender("file:alert.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
	<div class="row boutn align-items-start justify-content-center">
		<div class="col-md-6 pb-2">
			<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/compte/profil" class="btn-link"><button class="btn btn-primary button1 buttonmoncompte ml-md-auto mr-md-2 btn-lg "><h4><strong>MES DONNEES</strong></h4></button></a>
		</div>
		<div class="col-md-6 pb-2">
			<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/compte/modeles" class="btn-link"><button class="btn btn-primary button2 buttonmoncompte ml-md-2 mr-md-2  btn-lg "><h4><strong>MES MODÈLES</strong></h4></button></a>
		</div>
	</div>
</div>
<?php
}
}
/* {/block "main"} */
}
