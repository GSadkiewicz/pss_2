<?php
/* Smarty version 4.1.0, created on 2023-01-28 00:16:22
  from 'D:\xampp\htdocs\project2\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d45b4615b041_78336142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39b2019900b63de424fd4e254126e052b1208056' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project2\\app\\views\\templates\\main.tpl',
      1 => 1674861379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d45b4615b041_78336142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-sport</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/main.css">
</head>

<body>
    <header>
        <div class="header-wrap">
            <div class="logo-wrap">
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/">
                    <img class="banner" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/adas_malysz.png" alt="banner"/>
                    <h1>-SPORT</h1>
                </a>
            </div>
        </div>
    </header>
    <div class="main-wrap">
        <nav class="sidebar-wrap">
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/kategorie">Oferta</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/onas">O nas</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/kontakt">Kontakt</a>
            <?php if (\core\RoleUtils::inRole('loggedIn')) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/wyloguj">Wyloguj się</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/rezerwacje">Moje rezerwacje</a>
                <?php if (\core\RoleUtils::inRole('isAdmin')) {?>
                <?php }?>
            <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/logowanie">Zaloguj się</a>
            <?php }?>
        </nav>
        <div class="content-wrap">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107444327163d45b4615a697_34115841', 'content');
?>

        </div>
    </div>
    <footer>
        &copy; X-SPORT 2023
    </footer>
</body>

</html><?php }
/* {block 'content'} */
class Block_107444327163d45b4615a697_34115841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_107444327163d45b4615a697_34115841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
