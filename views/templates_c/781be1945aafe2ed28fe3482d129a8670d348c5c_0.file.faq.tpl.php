<?php
/* Smarty version 3.1.33, created on 2019-02-11 11:55:48
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/faq.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6154b4835b91_63350223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '781be1945aafe2ed28fe3482d129a8670d348c5c' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/faq.tpl',
      1 => 1549019269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6154b4835b91_63350223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18749900975c6154b4828a00_43502036', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "main"} */
class Block_18749900975c6154b4828a00_43502036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_18749900975c6154b4828a00_43502036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	
	<div class="jumbotron">
		<h1 class="display-4">FAQ (Frequently Asked Questions) :</h1>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
?>


		<hr class="my-4">
		<strong class="mr-auto"><?php echo $_smarty_tpl->tpl_vars['message']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['message']->value['name'];?>
</strong>
		<span align="right"><?php echo $_smarty_tpl->tpl_vars['message']->value['date'];?>
</span>
		<p class="lead"><?php echo $_smarty_tpl->tpl_vars['message']->value['content'];?>
</p>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>

</div>
<?php
}
}
/* {/block "main"} */
}
