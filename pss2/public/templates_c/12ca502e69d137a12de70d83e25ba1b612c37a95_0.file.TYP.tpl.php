<?php
/* Smarty version 4.1.0, created on 2023-01-28 01:27:00
  from 'D:\xampp\htdocs\project2\app\views\TYP.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d46bd43d5b48_85202676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12ca502e69d137a12de70d83e25ba1b612c37a95' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project2\\app\\views\\TYP.tpl',
      1 => 1674860441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d46bd43d5b48_85202676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190005710763d46bd43ce8a7_51827017', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_190005710763d46bd43ce8a7_51827017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_190005710763d46bd43ce8a7_51827017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Dziekujemy za złożenie rezerwacji !</h1>
    <div>
        <p>Data odbioru: <?php echo $_smarty_tpl->tpl_vars['res']->value["data_odbioru"];?>
</p>
        <p>Data zwrotu: <?php echo $_smarty_tpl->tpl_vars['res']->value["data_zwrotu"];?>
</p>
        <p>Cena za <?php echo $_smarty_tpl->tpl_vars['days']->value;?>
 dni <?php echo $_smarty_tpl->tpl_vars['res']->value["total_price"];?>
zł</p>
        <p>Imię i nazwisko: <?php echo $_smarty_tpl->tpl_vars['res']->value["imie"];?>
 <?php echo $_smarty_tpl->tpl_vars['res']->value["nazwisko"];?>
</p>
        <p>Telefon: <?php echo $_smarty_tpl->tpl_vars['res']->value["numer_telefonu"];?>
</p>

        <h3>Produkt:</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['res']->value["type_name"];?>
 | <?php echo $_smarty_tpl->tpl_vars['res']->value["Item_name"];?>
</p>
    </div>


<?php
}
}
/* {/block 'content'} */
}
