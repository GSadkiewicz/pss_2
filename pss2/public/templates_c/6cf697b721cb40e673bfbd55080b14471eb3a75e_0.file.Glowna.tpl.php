<?php
/* Smarty version 4.1.0, created on 2023-01-28 00:09:11
  from 'D:\xampp\htdocs\project2\app\views\Glowna.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d45997609556_95109116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cf697b721cb40e673bfbd55080b14471eb3a75e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project2\\app\\views\\Glowna.tpl',
      1 => 1674860599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d45997609556_95109116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165224203963d45997603792_52817235', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_165224203963d45997603792_52817235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_165224203963d45997603792_52817235',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Zapoznaj się z naszą ofertą</h1>
    <div class="banner-wrap">
      
    </div>
    <div class="actionBtn-wrap">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/kategorie" class="hp-actionBtn">Nasza Oferta</a>
    </div>
<?php
}
}
/* {/block 'content'} */
}
