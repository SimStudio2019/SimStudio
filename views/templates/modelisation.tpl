{extends file="layout.tpl"}

{block name="css"}
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" type="text/css" rel="stylesheet" />
<link href="css/modelisation.css" type="text/css" rel="stylesheet" />
{/block}

{block name="main"}

<aside id="draggable" class="draggable">
	<div class="row">
		{if isset($composants)}
		{foreach from=$composants item=composant}
		<div class="schema col-6 offset-3 my-1" title="{$composant.name}" data-id="{$composant.idComposant}" data-name="{$composant.name}" data-param="" data-black="{$base}/img/composant/{$composant.imageNoire}"><img src="{$base}/img/composant/{$composant.image}" alt="" class="" /></div>
		{/foreach}
		{/if}
	</div>
</aside>

<div id="droppable" class="area droppable">
	{include file="alert.inc.tpl"}

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

{/block}

{block name="js"}
<script type="text/javascript" src="{$base}/js/modelisation.js" ></script>
{/block}