<?php
/* Smarty version 3.1.33, created on 2019-02-11 10:00:07
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/edit-profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c613997c3c8e0_02002840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8df639b320d99c7821b0c32153e28844499cff21' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/edit-profile.tpl',
      1 => 1549017277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alert.inc.tpl' => 1,
  ),
),false)) {
function content_5c613997c3c8e0_02002840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4031895655c613997c30bc2_89794933', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17187133035c613997c320c1_83685472', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_4031895655c613997c30bc2_89794933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_4031895655c613997c30bc2_89794933',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="css/mesdonnees.css" type="text/css" rel="stylesheet" /><?php
}
}
/* {/block "css"} */
/* {block "main"} */
class Block_17187133035c613997c320c1_83685472 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_17187133035c613997c320c1_83685472',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			
			<?php $_smarty_tpl->_subTemplateRender("file:alert.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			
			<h1 class="text-center">Modifier mes données</h1>
			
			<form method="post" action="" id="myForm" class="mt-4 form-register">
				<div class="form-group ">
					<label class="form_col" for="firstname"> Votre prénom</label><br/>
					<input name="firstname" id="firstname" type="text" size="60" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['firstname'])) {
echo $_smarty_tpl->tpl_vars['form']->value['firstname'];
}?>" />
				</div>

				<div class="form-group ">
					<label class="form_col" for="lastname"> Votre Nom</label><br />
					<input name="name" id="lastname" type="text"  size="60" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['lastname'])) {
echo $_smarty_tpl->tpl_vars['form']->value['lastname'];
}?>" >
				</div>

				<div class="form-group ">
					<label class="form_col" for="email"> Email</label><br />
					<input name="email" id="email" type="text" size="60" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['email'])) {
echo $_smarty_tpl->tpl_vars['form']->value['email'];
}?>" />
				</div>
				
				<div class="form-group ">
					<label class="form_col" for="pwd1">Ancien mot de passe </label><br />
					<input name="oldPassword" id="pwd1" type="password"  size="60"  placeholder="Au moins 8 caractères" class="form-control" />
				</div>

				<div class="form-group ">
					<label class="form_col" for="pwd2">Nouveau mot de passe </label><br />
					<input name="newPassword" id="pwd2" type="password"  size="60"  placeholder="Au moins 8 caractères" class="form-control" />
				</div>

				<div class="form-group ">
					<label class="form_col" for="pwd3"> Confirmer votre nouveau mot de passe <br />
					</label>
					<br/>
					<input name="newPassword2" id="pwd3" type="password" size="60" class="form-control" placeholder="Le mot de passe de confirmation doit être identique à celui d'origine" />
				</div>

				<div class="boutton">
					<button type="submit" class="btn btn-primary" name="btn_submit" value="true">Modifier</button>

					<button type="submit" class="btn btn-danger" name="delete_account" value="true" onclick="return confirm('Etes-vous sûre de supprimer votre compte');">Supprimer mon compte</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
}
}
/* {/block "main"} */
}
