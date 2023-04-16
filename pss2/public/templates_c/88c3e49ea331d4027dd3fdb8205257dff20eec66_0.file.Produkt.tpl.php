<?php
/* Smarty version 4.1.0, created on 2023-01-28 00:47:14
  from 'D:\xampp\htdocs\project2\app\views\Produkt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d46282373d09_70637016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88c3e49ea331d4027dd3fdb8205257dff20eec66' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project2\\app\\views\\Produkt.tpl',
      1 => 1674859451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d46282373d09_70637016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100963390963d4628236dbb4_38172944', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_100963390963d4628236dbb4_38172944 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_100963390963d4628236dbb4_38172944',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="page">
        <h1><?php echo $_smarty_tpl->tpl_vars['item']->value['Name'];?>
</h1>
        <div class="wrap">
            <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/rezerwacja?item=<?php echo $_smarty_tpl->tpl_vars['item']->value["Item_id"];?>
">Zarezerwuj</a>
        </div>
    </div>
    

<?php
}
}
/* {/block 'content'} */
}
