<?php
/* Smarty version 3.1.33, created on 2019-02-11 13:52:10
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c616ffa9c5c58_72780455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b4133e284ca0b30e4e60f6aa967e6f8253c0895' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/login.tpl',
      1 => 1549019779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alert.inc.tpl' => 1,
  ),
),false)) {
function content_5c616ffa9c5c58_72780455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10609823045c616ffa9b7bd6_34069868', "main");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14987332875c616ffa9c4822_23657473', "js");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "main"} */
class Block_10609823045c616ffa9b7bd6_34069868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_10609823045c616ffa9b7bd6_34069868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	<div class="row">
		<div class="offset-md-3 col-md-6">
			
			<?php $_smarty_tpl->_subTemplateRender("file:alert.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<form method="POST" action="" class="mt-4 form-login">
				<h3 class="my-4 text-center">Identifiez-vous</h3>
				
				<div class="form-group">
					<label for="email">Adresse mail</label>
					<input type="email" name="email" id="email" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['email'])) {
echo $_smarty_tpl->tpl_vars['form']->value['email'];
}?>" />
				</div>
				
				<div class="form-grou mb-4">
					<label for="password" class="float-left">Mot de passe</label>
					<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/mot-de-passe-oublie"><label class="float-right">Mot de passe oublié ?</label></a>
					<input type="password" name="password" id="password" class="form-control" />
				</div>
				
				<div class="form-group mb-2">
					<input type="checkbox" name="showpassword" id="showpassword" />
					<label for="showpassword">Afficher le mot de passe</label>
				</div>
				
				<div class="form-group">
					<input type="checkbox" name="rememberMe" id="rememberMe" />
					<label for="rememberMe">Maintenir la session ouverte</label>
				</div> 
				
				<div class="text-center">
					<button type="submit" class="btn btn-gradient-primary btn-login" name="btn_submit">Se connecter</button>
				</div>
			</form>
			
			<div class="mt-4">
				<div class="text-center">
					<h4 class="pb-2">Nouveau sur SimStudio ?</h4>
					<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/inscription" ><button class="btn btn-outline-primary btn-register">Créez votre compte</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
}
/* {/block "main"} */
/* {block "js"} */
class Block_14987332875c616ffa9c4822_23657473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_14987332875c616ffa9c4822_23657473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type= text/javascript>
$(document).ready(function(){
	$('#showpassword').change(function() {
		if($('#password').prop('type') == 'password') {
			$('#password').prop('type','text');
		}else {
			$('#password').prop('type','password');
		}
	});
});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
}
