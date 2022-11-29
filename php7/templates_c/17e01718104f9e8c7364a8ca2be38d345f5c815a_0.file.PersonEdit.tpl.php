<?php
/* Smarty version 3.1.30, created on 2022-11-29 17:13:19
  from "D:\xampp\htdocs\php7\app\views\PersonEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63862f9fad61c6_28185636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17e01718104f9e8c7364a8ca2be38d345f5c815a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php7\\app\\views\\PersonEdit.tpl',
      1 => 1669738391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_63862f9fad61c6_28185636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108388170263862f9fad5c60_64624004', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_108388170263862f9fad5c60_64624004 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane do kredytu</legend>
		<div class="pure-control-group">
            <label for="kwota">Kwota</label>
            <input id="kwota" type="number" placeholder="Kwota" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
">
        </div>
        <div class="pure-control-group">
            <label for="procent">Procent</label>
            <input id="procent" type="number" placeholder="Procent" name="procent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->procent;?>
">

        </div>
		<div class="pure-control-group">
            <label for="lata">Lata</label>
            <input id="lata" type="number" placeholder="Lata" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Oblicz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList">Powrót</a>
		</div>
	</fieldset>
</form>	
</div>

<?php
}
}
/* {/block 'top'} */
}
