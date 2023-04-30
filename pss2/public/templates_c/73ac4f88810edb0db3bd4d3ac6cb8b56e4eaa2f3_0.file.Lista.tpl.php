<?php
/* Smarty version 4.1.0, created on 2023-04-30 15:10:07
  from 'D:\xampp\htdocs\project2\app\views\Lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_644e68af2534f2_93543835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73ac4f88810edb0db3bd4d3ac6cb8b56e4eaa2f3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project2\\app\\views\\Lista.tpl',
      1 => 1682860108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644e68af2534f2_93543835 (Smarty_Internal_Template $_smarty_tpl) {
?><div class = "produkty">
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
                <input type="button"  value="Poprzednia strona" onclick="ajax('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
produkty_lista', <?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['poprzednia_strona']->value;?>
); return false;"/>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['strona']->value < $_smarty_tpl->tpl_vars['liczba_stron']->value) {?>
                <input type="button" value="Nastepna strona" onclick="ajax('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
produkty_lista', <?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['nastepna_strona']->value;?>
); return false;"/>

            <?php }?>
            </div>
        </div>
    </div>
    
<?php }
}
