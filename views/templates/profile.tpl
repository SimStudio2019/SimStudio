{extends file="layout.tpl"}

{block name="css"}<link href="css/mesdonnees.css" type="text/css" rel="stylesheet" />{/block}

{block name="main"}
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			
			{include file="alert.inc.tpl"}
			
			<h1 class="text-center">Mes données</h1>
			
			<div class="card mb-2">
				<div class="card-body">
					<div class="row">
						<div class="col"><strong>Prénom</strong></div>
						<div class="col">{if isset($form.firstname)}{$form.firstname}{/if}</div>
					</div>
				</div>
			</div>
			
			<div class="card mb-2">
				<div class="card-body">
					<div class="row">
						<div class="col"><strong>Nom</strong></div>
						<div class="col">{if isset($form.lastname)}{$form.lastname}{/if}</div>
					</div>
				</div>
			</div>
			
			<div class="card mb-2">
				<div class="card-body">
					<div class="row">
						<div class="col"><strong>Email</strong></div>
						<div class="col">{if isset($form.email)}{$form.email}{/if}</div>
					</div>
				</div>
			</div>
			
			<div class="text-center">
				<a href="{$base}/compte/profil/editer"><button class="btn btn-primary">Modifier</button></a>
			</div>
		</div>
	</div>
</div>
{/block}