<?php
/* Smarty version 3.1.33, created on 2019-02-11 14:04:51
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/modelisation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6172f32a3827_85159966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '681ef5229f6f584a32251b7c3062299b5409992e' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/modelisation.tpl',
      1 => 1549890021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alert.inc.tpl' => 1,
  ),
),false)) {
function content_5c6172f32a3827_85159966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1307645205c6172f327fec5_96781210', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20336805815c6172f3281ec2_27488485', "main");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15335063685c6172f32a20a1_56149116', "js");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_1307645205c6172f327fec5_96781210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_1307645205c6172f327fec5_96781210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" type="text/css" rel="stylesheet" />
<link href="css/modelisation.css" type="text/css" rel="stylesheet" />
<?php
}
}
/* {/block "css"} */
/* {block "main"} */
class Block_20336805815c6172f3281ec2_27488485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_20336805815c6172f3281ec2_27488485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<aside id="draggable" class="draggable">
	<div class="row">
		<?php if (isset($_smarty_tpl->tpl_vars['composants']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['composants']->value, 'composant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['composant']->value) {
?>
		<div class="schema col-6 offset-3 my-1" title="<?php echo $_smarty_tpl->tpl_vars['composant']->value['name'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['composant']->value['idComposant'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['composant']->value['name'];?>
" data-param="" data-black="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/img/composant/<?php echo $_smarty_tpl->tpl_vars['composant']->value['imageNoire'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/img/composant/<?php echo $_smarty_tpl->tpl_vars['composant']->value['image'];?>
" alt="" class="" /></div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
	</div>
</aside>

<div id="droppable" class="area droppable">
	<?php $_smarty_tpl->_subTemplateRender("file:alert.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

<div class="parameters p-2">
	<div class="row">
		<div class="col text-center">
			<div class="btn btn-sm btn-save">
				<i class="far fa-save icon"></i>
				Sauvegarder
			</div>
		</div>
		<div class="col text-center">
			<div class="btn btn-sm btn-upload">
				<i class="fas fa-upload icon"></i>
				Importer
			</div>
		</div>
		<div class="col text-center">
			<div class="btn btn-sm btn-download">
				<i class="fas fa-download icon"></i>
				Exporter
			</div>
		</div>
	</div>
	
	<hr />
	
	<h4 class="text-center" >Paramètres</h4>

	<form>

		<div class="parameter input-group py-1">
			<!--<label for="param-name">Nom</label>-->
			<input type="text" name="name" value="" id="param-name" class="form-control param-item param-name" data-input="name" placeholder="Nom" />
		</div>

		<div class="parameter input-group py-1">
			<!--<label for="param-comment">Commentaire</label>-->
			<!--<input type="text" name="comment" value="" id="param-comment" class="form-control" placeholder="Commentaire" />-->
			<textarea id="param-coment" class="form-control param-item param-comment" data-input="comment" placeholder="Commentaire" ></textarea>
		</div>

		<div class="parameter input-group py-1">
			<!--<label for="param-size">Taille</label>-->
			<input type="text" name="size" value="" id="param-size" class="form-control param-item param-size" data-input="size"  placeholder="Taille" />
		</div>

		<div class="parameter input-group py-1">
			<!--<label for="param-color">Couleur</label>-->
			<input type="text" name="color" value="" id="param-color" class="form-control param-item param-color" data-input="color"  placeholder="Couleur" />
		</div>

	</form>
	
</div>

<?php
}
}
/* {/block "main"} */
/* {block "js"} */
class Block_15335063685c6172f32a20a1_56149116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_15335063685c6172f32a20a1_56149116',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/js/modelisation.js" ><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
}
