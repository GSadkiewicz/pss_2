<?php
/* Smarty version 4.1.0, created on 2023-01-28 01:37:18
  from 'D:\xampp\htdocs\project2\app\views\Rezerwacje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d46e3e0272a9_45045209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '075196bfd6c83ecf223c85d6c4fbf04e3a614be6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project2\\app\\views\\Rezerwacje.tpl',
      1 => 1674866235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d46e3e0272a9_45045209 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155229005163d46e3e012bb7_01936125', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_155229005163d46e3e012bb7_01936125 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_155229005163d46e3e012bb7_01936125',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Moje rezerwacje</h1>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
        <div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/rezerwacja/typ/<?php echo $_smarty_tpl->tpl_vars['r']->value["reservation_id"];?>
">
                <?php echo $_smarty_tpl->tpl_vars['r']->value["type_name"];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value["Item_name"];?>

                <?php echo $_smarty_tpl->tpl_vars['r']->value["data_odbioru"];?>
 - <?php echo $_smarty_tpl->tpl_vars['r']->value["data_zwrotu"];?>

            </a>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
}
/* {/block 'content'} */
}
