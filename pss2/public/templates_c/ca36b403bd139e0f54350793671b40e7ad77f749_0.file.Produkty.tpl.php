<?php
/* Smarty version 4.1.0, created on 2023-04-16 20:51:42
  from 'D:\xampp\htdocs\project2\app\views\Produkty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643c43beafd617_65309112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca36b403bd139e0f54350793671b40e7ad77f749' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project2\\app\\views\\Produkty.tpl',
      1 => 1681671081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643c43beafd617_65309112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2048884821643c43beae8e44_87870971', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_2048884821643c43beae8e44_87870971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2048884821643c43beae8e44_87870971',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="produkty">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        
            <a class="item_tile" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/produkt/<?php echo $_smarty_tpl->tpl_vars['item']->value["Item_id"];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/<?php echo $_smarty_tpl->tpl_vars['item']->value['Name'];?>
.jpg">
                <div><?php echo $_smarty_tpl->tpl_vars['item']->value["Name"];?>
</div>  
            </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
    </div>

        <div class="paginacja">
            <p>Strona <?php echo $_smarty_tpl->tpl_vars['strona']->value;?>
 z <?php echo $_smarty_tpl->tpl_vars['liczba_stron']->value;?>
</p>
            <div class="paginacja_przyciski">
            <?php if ($_smarty_tpl->tpl_vars['strona']->value > 1) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/produkty/<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
?strona=<?php echo $_smarty_tpl->tpl_vars['poprzednia_strona']->value;?>
">&#60;Poprzednia strona</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['strona']->value < $_smarty_tpl->tpl_vars['liczba_stron']->value) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/produkty/<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
?strona=<?php echo $_smarty_tpl->tpl_vars['nastepna_strona']->value;?>
">Nastepna strona &#62;</a>
            <?php }?>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block 'content'} */
}
