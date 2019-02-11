<?php
/* Smarty version 3.1.33, created on 2019-02-11 11:55:46
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6154b2f075a7_43718909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b80eab67a14e6586b7684aac67e41db51394f9ea' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/profile.tpl',
      1 => 1549017620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alert.inc.tpl' => 1,
  ),
),false)) {
function content_5c6154b2f075a7_43718909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_266918525c6154b2efb223_03098583', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4582033965c6154b2efc7a7_82375868', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_266918525c6154b2efb223_03098583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_266918525c6154b2efb223_03098583',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="css/mesdonnees.css" type="text/css" rel="stylesheet" /><?php
}
}
/* {/block "css"} */
/* {block "main"} */
class Block_4582033965c6154b2efc7a7_82375868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_4582033965c6154b2efc7a7_82375868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			
			<?php $_smarty_tpl->_subTemplateRender("file:alert.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			
			<h1 class="text-center">Mes données</h1>
			
			<div class="card mb-2">
				<div class="card-body">
					<div class="row">
						<div class="col"><strong>Prénom</strong></div>
						<div class="col"><?php if (isset($_smarty_tpl->tpl_vars['form']->value['firstname'])) {
echo $_smarty_tpl->tpl_vars['form']->value['firstname'];
}?></div>
					</div>
				</div>
			</div>
			
			<div class="card mb-2">
				<div class="card-body">
					<div class="row">
						<div class="col"><strong>Nom</strong></div>
						<div class="col"><?php if (isset($_smarty_tpl->tpl_vars['form']->value['lastname'])) {
echo $_smarty_tpl->tpl_vars['form']->value['lastname'];
}?></div>
					</div>
				</div>
			</div>
			
			<div class="card mb-2">
				<div class="card-body">
					<div class="row">
						<div class="col"><strong>Email</strong></div>
						<div class="col"><?php if (isset($_smarty_tpl->tpl_vars['form']->value['email'])) {
echo $_smarty_tpl->tpl_vars['form']->value['email'];
}?></div>
					</div>
				</div>
			</div>
			
			<div class="text-center">
				<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/compte/profil/editer"><button class="btn btn-primary">Modifier</button></a>
			</div>
		</div>
	</div>
</div>
<?php
}
}
/* {/block "main"} */
}
