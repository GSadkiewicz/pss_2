{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<form action="{$conf->action_url}calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Prosty kalkulator</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_x">Podaj kwotę kredytu:</label>
			<input id="id_x" type="number" name="id_x" value="{$form->id_x}" />
		</div>
		        <div class="pure-control-group">
			<label for="id_proc">Na jaki procent:</label>
			<input id="id_proc" type="number" name="id_proc" value="{$form->id_proc}" />
		</div>
		        <div class="pure-control-group">
			<label for="id_y">Na ile lat:</label>
			<input id="id_y" type="number" name="id_y" value="{$form->id_y}" />
		</div>

		<div class="pure-controls">
			<input type="submit" value="Oblicz ratę" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}

{/block}