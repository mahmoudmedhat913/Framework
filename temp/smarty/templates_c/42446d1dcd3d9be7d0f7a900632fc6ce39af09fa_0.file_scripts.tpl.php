<?php
/* Smarty version 5.3.1, created on 2024-09-16 21:08:06
  from 'file:C:/wamp64/www\hospital_version1\themes\template\scripts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66e89e365c8091_56823303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42446d1dcd3d9be7d0f7a900632fc6ce39af09fa' => 
    array (
      0 => 'C:/wamp64/www\\hospital_version1\\themes\\template\\scripts.tpl',
      1 => 1723324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66e89e365c8091_56823303 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\themes\\template';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
echo '<script'; ?>
 src="<?php echo PROJECT_PATH;?>
/node_modules/bootstrap/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo PROJECT_PATH;?>
/node_modules/vue/dist/vue.global.js"><?php echo '</script'; ?>
>
<!--script src="<?php echo PROJECT_PATH;?>
/node_modules/pinia/dist/pinia.iife.prod.js"><?php echo '</script'; ?>
-->

<?php echo '<script'; ?>
 src="<?php echo PROJECT_PATH;?>
\themes\template\js\jquery-3.7.1.min.js"><?php echo '</script'; ?>
>


<?php ob_start();
echo ROOT_PATH;
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, $_prefixVariable4."\\themes\\template\\import.map.tpl", $_smarty_current_dir);
}
}
