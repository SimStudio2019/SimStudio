{extends file="layout.tpl"}

{block name="main"}
<div class="container">
	
	<div class="jumbotron">
		<h1 class="display-4">FAQ (Frequently Asked Questions) :</h1>

		{foreach from=$messages item=message}


		<hr class="my-4">
		<strong class="mr-auto">{$message.firstname} {$message.name}</strong>
		<span align="right">{$message.date}</span>
		<p class="lead">{$message.content}</p>

		{/foreach}
		</div>
	</div>

</div>
{/block}