<?php
/* Smarty version 5.3.1, created on 2024-08-07 18:26:58
  from 'file:E:/wamp64/www\hospital_version1/modules/cal/view/template/page/task3.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66b3bc724d2675_99498644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55ba16dab3160f82e819519f332309534ec8d199' => 
    array (
      0 => 'E:/wamp64/www\\hospital_version1/modules/cal/view/template/page/task3.tpl',
      1 => 1723055172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66b3bc724d2675_99498644 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
ob_start();
echo ROOT_PATH;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_187604154566b3bc724cde49_87163348', 'title');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_15298381266b3bc724cf5d9_07259350', 'name');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_62111630666b3bc724d02f8_61012621', 'pageName');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_30818743166b3bc724d0f62_88033008', 'script');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_139370777966b3bc724d1bb5_42957324', 'body');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, $_prefixVariable1."\\themes\\template\\master.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_187604154566b3bc724cde49_87163348 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    Task 3
<?php
}
}
/* {/block 'title'} */
/* {block 'name'} */
class Block_15298381266b3bc724cf5d9_07259350 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    "Task3"
<?php
}
}
/* {/block 'name'} */
/* {block 'pageName'} */
class Block_62111630666b3bc724d02f8_61012621 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>


<?php
}
}
/* {/block 'pageName'} */
/* {block 'script'} */
class Block_30818743166b3bc724d0f62_88033008 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    <?php echo '<script'; ?>
 src="view/js/task3.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'script'} */
/* {block 'body'} */
class Block_139370777966b3bc724d1bb5_42957324 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>


    <div class="text-center row">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center row" style="width: 50%;border-style: solid;border-width: 2px;">
            <div class="bg-primary" style="width: 101%;border-style: solid;border-width: 2px;">
                Invoice Details Page
            </div>
            <div class="col-md-3 form-group main">
                <label>Product Name</label>
            </div>
            <div class="col-md-9 form-group main">
                <input id="strProductName" class="form-control" type="text">
            </div>
            <div class="col-md-3 form-group main">
                <label>Unit Number</label>
            </div>
            <div class="col-md-9 form-group main">
                <input class="form-control" id="intUnitNumber" type="number">
            </div>
            <div class="col-md-3 form-group main">
                <label>Price</label>
            </div>
            <div class="col-md-9 form-group main">
                <input class="form-control" id="decPrice" value="0.00" type="number">
            </div>
            <div class="col-md-3 form-group main">
                <label>Quantity</label>
            </div>
            <div class="col-md-9 form-group main">
                <input class="form-control" id="decQuantity" value="0.00" type="number">
            </div>
            <div class="col-md-3 form-group main">
                <label>Total</label>
            </div>
            <div class="col-md-9 form-group main">
                <input class="form-control" id="intTotal" value="0.00" type="umber" disabled>
            </div>
            <div class="col-md-3 form-group main">
                <label>Expiry Date</label>
            </div>
            <div class="col-md-9 form-group main">
                <input class="form-control" id="dtExpiryDate" type="Date">
            </div>
            <div class="col-md-3 form-group">
                <button class="btn-lg bg-primary" type="button" onclick="Add()">New</button>
            </div>
            <div class="col-md-3 form-group">
                <button class="btn-lg bg-primary" type="button">Save</button>
            </div>
            <div class="col-md-3 form-group">
                <button class="btn-lg bg-primary" type="button">Back</button>
            </div>
            <div class="col-md-3 form-group">
                <button class="btn-lg bg-danger" type="button">Delete</button>
            </div>
            <div class="col-md-12">
                <a href=""><< < </a> | <a href=""> > >></a>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
