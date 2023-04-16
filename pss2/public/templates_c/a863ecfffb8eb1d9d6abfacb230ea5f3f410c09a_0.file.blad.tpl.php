<?php
/* Smarty version 4.1.0, created on 2023-01-28 01:31:13
  from 'D:\xampp\htdocs\project2\app\views\blad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d46cd11224d9_25317832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a863ecfffb8eb1d9d6abfacb230ea5f3f410c09a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project2\\app\\views\\blad.tpl',
      1 => 1673384416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d46cd11224d9_25317832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151146417663d46cd111d8c0_39723259', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_151146417663d46cd111d8c0_39723259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_151146417663d46cd111d8c0_39723259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Eror <?php echo $_smarty_tpl->tpl_vars['error']->value['code'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['error']->value['message'];?>
</p>
<?php
}
}
/* {/block 'content'} */
}
