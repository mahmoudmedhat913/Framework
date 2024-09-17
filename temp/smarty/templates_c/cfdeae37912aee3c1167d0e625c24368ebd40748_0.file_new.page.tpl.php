<?php
/* Smarty version 5.3.1, created on 2024-09-16 21:34:08
  from 'file:C:/wamp64/www\hospital_version1/modules/me7/view//template/page/new.page.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66e8a4504d27b3_92749377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfdeae37912aee3c1167d0e625c24368ebd40748' => 
    array (
      0 => 'C:/wamp64/www\\hospital_version1/modules/me7/view//template/page/new.page.tpl',
      1 => 1726522412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66e8a4504d27b3_92749377 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\modules\\me7\\view\\template\\page';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
ob_start();
echo ROOT_PATH;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_166446944266e8a4504c9212_30067582', 'title');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_146629933366e8a4504cc9b6_72862134', 'appname');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_177281987166e8a4504ce797_48408764', 'pageName');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_167798154866e8a4504d04a4_48278781', 'body');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, $_prefixVariable1."\\themes\\template\\master.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_166446944266e8a4504c9212_30067582 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\modules\\me7\\view\\template\\page';
?>

    Alx Project
<?php
}
}
/* {/block 'title'} */
/* {block 'appname'} */
class Block_146629933366e8a4504cc9b6_72862134 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\modules\\me7\\view\\template\\page';
?>

    "Calculate" // Ignore that now i will tel you later
<?php
}
}
/* {/block 'appname'} */
/* {block 'pageName'} */
class Block_177281987166e8a4504ce797_48408764 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\modules\\me7\\view\\template\\page';
?>

    ok how do you open this emoji i wont tell
<?php
}
}
/* {/block 'pageName'} */
/* {block 'body'} */
class Block_167798154866e8a4504d04a4_48278781 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\modules\\me7\\view\\template\\page';
?>

    <div class="row placeholders">
        <div class="col-md-6 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Quick Pricing</h4>
            <span class="text-muted">Something else</span>
        </div>
        <div class="col-md-6 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Pricing</h4>
            <span class="text-muted">Something else</span>
        </div>
    </div>

    <h2 class="sub-header">Section title</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>{{intTotal}}</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
            </tr>
            </tbody>
        </table>
    </div>
<?php
}
}
/* {/block 'body'} */
}
