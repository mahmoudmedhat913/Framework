<?php
/* Smarty version 5.3.1, created on 2024-07-28 20:41:46
  from 'file:E:/wamp64/www\hospital_version1/modules/cal/view/template/page/task2.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66a6ad0a196859_26846091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc5071342baa353ed3d0f9746131e45d97dec341' => 
    array (
      0 => 'E:/wamp64/www\\hospital_version1/modules/cal/view/template/page/task2.tpl',
      1 => 1722199251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a6ad0a196859_26846091 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
ob_start();
echo ROOT_PATH;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_126209641766a6ad0a192e50_89107193', 'title');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_115293976366a6ad0a1944a9_06983391', 'name');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_87487252866a6ad0a1951d4_82142994', 'pageName');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_43886355966a6ad0a195e53_52358198', 'body');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, $_prefixVariable1."\\themes\\template\\master.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_126209641766a6ad0a192e50_89107193 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    Task 2
<?php
}
}
/* {/block 'title'} */
/* {block 'name'} */
class Block_115293976366a6ad0a1944a9_06983391 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    "Task2"
<?php
}
}
/* {/block 'name'} */
/* {block 'pageName'} */
class Block_87487252866a6ad0a1951d4_82142994 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    <button class="btn-lg bg-primary" type="button" disabled>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home Page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
    
<?php
}
}
/* {/block 'pageName'} */
/* {block 'body'} */
class Block_43886355966a6ad0a195e53_52358198 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    <div class="text-center">
        <div>
            <a href="index.php?module=cal&page=Task&action=Task3">
                <button class="btn-lg bg-primary" type="button">Invoice Details</button>
            </a>
        </div>
        <div class="main">
            <a href="index.php?module=cal&page=Task&action=Task4">
                <button class="btn-lg bg-primary" type="button">&nbsp;&nbsp;&nbsp;Invoice List&nbsp;&nbsp;&nbsp;</button>
            </a>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
