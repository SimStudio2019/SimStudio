{if isset($breadcrumb)}
{block name="breadcrumb"}
<nav aria-label="breadcrumb">
	<ol class="breadcrumb {if $page.url eq '/modelisation'}mb-0{/if}">
		{foreach from=$breadcrumb.links key=k item=v}
			<li class="breadcrumb-item"><a href="{$base}{$v}">{$k}</a></li>
		{/foreach}
		<li class="breadcrumb-item active" aria-current="page">{$breadcrumb.current}</li>
	</ol>
</nav>
{/block}
{/if}