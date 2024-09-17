<?php
/* Smarty version 5.3.1, created on 2024-08-02 20:11:06
  from 'file:E:/wamp64/www\hospital_version1/modules/cal/view/template/page/claculate.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66ad3d5a795104_66848798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdaf9c64940d6815c42c4a336c1289db727b3364' => 
    array (
      0 => 'E:/wamp64/www\\hospital_version1/modules/cal/view/template/page/claculate.tpl',
      1 => 1722629464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66ad3d5a795104_66848798 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
ob_start();
echo ROOT_PATH;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_157631226766ad3d5a790ea4_42998108', 'title');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_214406702966ad3d5a792594_31378281', 'appname');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_89971022566ad3d5a7932a9_89343025', 'pageName');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_195717334166ad3d5a7940e6_74450598', 'body');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, $_prefixVariable1."\\themes\\template\\master.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_157631226766ad3d5a790ea4_42998108 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    Cost Type
<?php
}
}
/* {/block 'title'} */
/* {block 'appname'} */
class Block_214406702966ad3d5a792594_31378281 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    "Calculate"
<?php
}
}
/* {/block 'appname'} */
/* {block 'pageName'} */
class Block_89971022566ad3d5a7932a9_89343025 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    Cost Type
<?php
}
}
/* {/block 'pageName'} */
/* {block 'body'} */
class Block_195717334166ad3d5a7940e6_74450598 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
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
