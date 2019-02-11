<?php
/* Smarty version 3.1.33, created on 2019-02-11 14:04:51
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6172f3327642_85790202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb9634d96e91a8d78e853a423e56d83be7c4303e' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/breadcrumb.tpl',
      1 => 1549536221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6172f3327642_85790202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (isset($_smarty_tpl->tpl_vars['breadcrumb']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8574543165c6172f33208e8_82764405', "breadcrumb");
?>

<?php }
}
/* {block "breadcrumb"} */
class Block_8574543165c6172f33208e8_82764405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_8574543165c6172f33208e8_82764405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav aria-label="breadcrumb">
	<ol class="breadcrumb <?php if ($_smarty_tpl->tpl_vars['page']->value['url'] == '/modelisation') {?>mb-0<?php }?>">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
			<li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</a></li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['current'];?>
</li>
	</ol>
</nav>
<?php
}
}
/* {/block "breadcrumb"} */
}
