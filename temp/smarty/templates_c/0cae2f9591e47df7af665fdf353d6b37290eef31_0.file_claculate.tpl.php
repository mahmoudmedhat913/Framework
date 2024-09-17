<?php
/* Smarty version 5.3.1, created on 2024-09-16 21:08:09
  from 'file:C:/wamp64/www\hospital_version1/modules/cal/view/template/page/claculate.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66e89e39a30505_55544061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cae2f9591e47df7af665fdf353d6b37290eef31' => 
    array (
      0 => 'C:/wamp64/www\\hospital_version1/modules/cal/view/template/page/claculate.tpl',
      1 => 1722629464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66e89e39a30505_55544061 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
ob_start();
echo ROOT_PATH;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_46080866166e89e39a28241_95445836', 'title');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_51706524466e89e39a2b139_23025469', 'appname');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_29671321466e89e39a2c9b1_78969106', 'pageName');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_68244239266e89e39a2e134_71068319', 'body');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, $_prefixVariable1."\\themes\\template\\master.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_46080866166e89e39a28241_95445836 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    Cost Type
<?php
}
}
/* {/block 'title'} */
/* {block 'appname'} */
class Block_51706524466e89e39a2b139_23025469 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    "Calculate"
<?php
}
}
/* {/block 'appname'} */
/* {block 'pageName'} */
class Block_29671321466e89e39a2c9b1_78969106 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    Cost Type
<?php
}
}
/* {/block 'pageName'} */
/* {block 'body'} */
class Block_68244239266e89e39a2e134_71068319 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
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
