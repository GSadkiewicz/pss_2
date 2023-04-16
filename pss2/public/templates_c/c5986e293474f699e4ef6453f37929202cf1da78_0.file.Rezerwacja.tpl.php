<?php
/* Smarty version 4.1.0, created on 2023-01-28 00:47:42
  from 'D:\xampp\htdocs\project2\app\views\Rezerwacja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d4629e3221c8_48617992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5986e293474f699e4ef6453f37929202cf1da78' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project2\\app\\views\\Rezerwacja.tpl',
      1 => 1674859894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d4629e3221c8_48617992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14277360663d4629e31bd39_79836195', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_14277360663d4629e31bd39_79836195 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14277360663d4629e31bd39_79836195',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Formularz rezerwacji</h1>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/rezerwacja/rezerwuj" method="post" id="reservationForm" onsubmit="return validate()">
        <div>
            <input type="hidden" id="Item_id" name="Item_id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value["Item_id"];?>
"/>
            <input type="hidden" id="Item_name" name="Item_name" value="<?php echo $_smarty_tpl->tpl_vars['item']->value["Name"];?>
"/>
            <input type="hidden" id="Item_price" name="Item_price" value="<?php echo $_smarty_tpl->tpl_vars['item']->value["Price"];?>
"/>
            <h2><?php echo $_smarty_tpl->tpl_vars['item']->value["Name"];?>
</h2>
        </div>
        <div id="selectTime">
            <label for="collectDate">Data odbioru:</label>
            <input type="date" id="collectDate" name="collectDate"/>

            <label for="returnDate">Data zwrotu:</label>
            <input type="date" id="returnDate" name="returnDate"/>

            <input type="button" id="findButton" value="Szukaj" />
        </div>
        <div id="Data">
            <h3>Cena za <span id="days"></span> dni <span id="totalPrice"></span>zł</h3>
            <label for="name">imię:</label>
            <input type="text" id="name" name="name"/>

            <label for="surname">nazwisko:</label>
            <input type="text" id="surname" name="surname"/>

            <label for="phone">Telefon:</label>
            <input type="number" id="phone" name="phone"/>

            <input type="button" id="backButton" value="Wstecz" />
            <input type="submit" value="Zarezerwuj" />
        </div>
    </form>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/reservation.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
