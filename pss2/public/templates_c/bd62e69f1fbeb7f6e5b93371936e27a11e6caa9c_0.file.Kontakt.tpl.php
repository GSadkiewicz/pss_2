<?php
/* Smarty version 4.1.0, created on 2023-03-11 19:45:59
  from 'D:\xampp\htdocs\project2\app\views\Kontakt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_640ccc67447405_91580535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd62e69f1fbeb7f6e5b93371936e27a11e6caa9c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project2\\app\\views\\Kontakt.tpl',
      1 => 1674867157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640ccc67447405_91580535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1922040730640ccc6726b500_44133113', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1922040730640ccc6726b500_44133113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1922040730640ccc6726b500_44133113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Kontakt</h1>

    <p id="kontakt_content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
    <?php if (\core\RoleUtils::inRole('isAdmin')) {?>
        <form id="kontakt_edit_form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/kontakt/edytuj" method="post">
            <textarea id="kontakt_content_edit" name="content"></textarea>
            <input type="submit" value="Zapisz"/>
        </form>
    
        <button id="kontakt_edit" onclick="enableEdit_kontakt()">Edytuj</button>
    <?php }?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/kontakt.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
