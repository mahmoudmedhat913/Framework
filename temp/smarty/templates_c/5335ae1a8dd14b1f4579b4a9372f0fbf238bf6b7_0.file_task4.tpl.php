<?php
/* Smarty version 5.3.1, created on 2024-07-26 18:00:57
  from 'file:E:/wamp64/www\hospital_version1/modules/cal/view/template/page/task4.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66a3e4599913c7_76267926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5335ae1a8dd14b1f4579b4a9372f0fbf238bf6b7' => 
    array (
      0 => 'E:/wamp64/www\\hospital_version1/modules/cal/view/template/page/task4.tpl',
      1 => 1722016795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a3e4599913c7_76267926 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
ob_start();
echo ROOT_PATH;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_16376155366a3e45998d546_27049485', 'title');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_142322760266a3e45998ef40_09839895', 'name');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_22655679466a3e45998fcc9_58522480', 'pageName');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_126001867666a3e459990945_56548851', 'body');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, $_prefixVariable1."\\themes\\template\\master.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_16376155366a3e45998d546_27049485 extends \Smarty\Runtime\Block
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
class Block_142322760266a3e45998ef40_09839895 extends \Smarty\Runtime\Block
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
class Block_22655679466a3e45998fcc9_58522480 extends \Smarty\Runtime\Block
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
class Block_126001867666a3e459990945_56548851 extends \Smarty\Runtime\Block
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
