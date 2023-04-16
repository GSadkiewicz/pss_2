<?php
/* Smarty version 4.1.0, created on 2023-01-28 01:43:57
  from 'D:\xampp\htdocs\project2\app\views\onas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d46fcdbab937_68697312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19ec2810cfca4552a1241afed7617a7e102028ac' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project2\\app\\views\\onas.tpl',
      1 => 1674866622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d46fcdbab937_68697312 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42680638063d46fcdba48e8_58389654', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_42680638063d46fcdba48e8_58389654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_42680638063d46fcdba48e8_58389654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>O nas</h1>
    <p id="onas_content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
    <form id="onas_edit_form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/onas/edytuj" method="post">
        <textarea id="onas_content_edit" name="content"></textarea>
        <input type="submit" value="Zapisz"/>
    </form>
    <?php if (\core\RoleUtils::inRole('isAdmin')) {?>
        <button id="onas_edit" onclick="enableEdit_onas()">Edytuj</button>
    <?php }?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/onas.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
