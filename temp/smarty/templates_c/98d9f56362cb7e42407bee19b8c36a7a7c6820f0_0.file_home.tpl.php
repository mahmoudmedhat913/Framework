<?php
/* Smarty version 5.3.1, created on 2024-09-16 21:25:24
  from 'file:C:/wamp64/www\hospital_version1/modules/me7/view//template/page/home.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66e8a24445be70_57803544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d9f56362cb7e42407bee19b8c36a7a7c6820f0' => 
    array (
      0 => 'C:/wamp64/www\\hospital_version1/modules/me7/view//template/page/home.tpl',
      1 => 1726521509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66e8a24445be70_57803544 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\modules\\me7\\view\\template\\page';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
ob_start();
echo ROOT_PATH;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_110429387466e8a244450a45_01854067', 'title');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_39932377366e8a2444544d6_29646705', 'appname');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_194228589966e8a244455de2_74151205', 'pageName');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_120696581366e8a244458b43_28252794', 'body');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, $_prefixVariable1."\\themes\\template\\master.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_110429387466e8a244450a45_01854067 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\modules\\me7\\view\\template\\page';
?>

    Cost Type
<?php
}
}
/* {/block 'title'} */
/* {block 'appname'} */
class Block_39932377366e8a2444544d6_29646705 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\modules\\me7\\view\\template\\page';
?>

    "Calculate"
<?php
}
}
/* {/block 'appname'} */
/* {block 'pageName'} */
class Block_194228589966e8a244455de2_74151205 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\modules\\me7\\view\\template\\page';
?>

    Cost Type
<?php
}
}
/* {/block 'pageName'} */
/* {block 'body'} */
class Block_120696581366e8a244458b43_28252794 extends \Smarty\Runtime\Block
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
