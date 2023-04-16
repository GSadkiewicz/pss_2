<?php
/* Smarty version 4.1.0, created on 2023-01-28 00:10:37
  from 'D:\xampp\htdocs\project2\app\views\logowanie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d459ed8140d1_86090037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0dbd7fcaa1e8c6ee9ddfba865404845e881fa43' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project2\\app\\views\\logowanie.tpl',
      1 => 1673384416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d459ed8140d1_86090037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129906029263d459ed80cd66_30851491', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_129906029263d459ed80cd66_30851491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_129906029263d459ed80cd66_30851491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Zaloguj się</h1>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/zaloguj" method="post" id="loginForm">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login">
        <label for="pass">Hasło:</label>
        <input type="password" id="pass" name="pass">
        <input type="submit" value="Zaloguj się">
    </form>
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
    <?php }?>

<?php
}
}
/* {/block 'content'} */
}
