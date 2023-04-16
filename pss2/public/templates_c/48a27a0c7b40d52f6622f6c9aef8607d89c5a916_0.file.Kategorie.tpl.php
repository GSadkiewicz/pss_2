<?php
/* Smarty version 4.1.0, created on 2023-04-16 20:38:18
  from 'D:\xampp\htdocs\project2\app\views\Kategorie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643c409ae96169_70134141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48a27a0c7b40d52f6622f6c9aef8607d89c5a916' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project2\\app\\views\\Kategorie.tpl',
      1 => 1681670089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643c409ae96169_70134141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1241053056643c409ad1c502_48046253', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1241053056643c409ad1c502_48046253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1241053056643c409ad1c502_48046253',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="kategorie">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        
            <a class="catalog_tile" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/produkty/<?php echo $_smarty_tpl->tpl_vars['item']->value["type_id"];?>
">
                <div><?php echo $_smarty_tpl->tpl_vars['item']->value["type_name"];?>
</div>
            </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    
<?php
}
}
/* {/block 'content'} */
}
