<?php
/* Smarty version 3.1.30, created on 2022-11-19 18:02:31
  from "D:\xampp\htdocs\php6\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63790c2780ad72_03510249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1710fb892bb241c1fa3a3d7c525eb8334fae9d4d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php6\\app\\views\\CalcView.tpl',
      1 => 1668877234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_63790c2780ad72_03510249 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192288939763790c2780a2b1_49956285', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_192288939763790c2780a2b1_49956285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Prosty kalkulator</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_x">Podaj kwotę kredytu:</label>
			<input id="id_x" type="number" name="id_x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_x;?>
" />
		</div>
		        <div class="pure-control-group">
			<label for="id_proc">Na jaki procent:</label>
			<input id="id_proc" type="number" name="id_proc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_proc;?>
" />
		</div>
		        <div class="pure-control-group">
			<label for="id_y">Na ile lat:</label>
			<input id="id_y" type="number" name="id_y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_y;?>
" />
		</div>

		<div class="pure-controls">
			<input type="submit" value="Oblicz ratę" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
<div class="messages info">
	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
