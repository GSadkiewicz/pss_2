{extends file="main.tpl"}
{* przy zdefiniowanych folderach nie trzeba już podawać pełnej ścieżki *}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}

<h3>Prosty kalkulator</h2>


<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
	<fieldset>

			<label for="id_x">Kwota kredytu:</label>
			<input id="id_x" type="number" placeholder="Kwota kredytu" name="id_x" value="{$form->id_x}">
					
			<label for="id_proc">Na jaki procent:</label>
			<input id="id_proc" type="number" placeholder="Na jaki procent" name="id_proc" value="{$form->id_proc}">

			<label for="id_y">Na ile lat:</label>
			<input id="id_y" type="number" placeholder="Na ile lat" name="id_y" value="{$form->id_y}">

{if isset($res->op_name)}
<option value="{$form->op}">ponownie: {$res->op_name}</option>
<option value="" disabled="true">---</option>
{/if}

	<button type="submit" class="pure-button pure-button-primary">Oblicz ratę</button>
</form>

<div class="messages">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>

{/block}