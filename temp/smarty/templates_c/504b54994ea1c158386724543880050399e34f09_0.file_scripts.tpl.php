<?php
/* Smarty version 5.3.1, created on 2024-08-10 21:11:49
  from 'file:E:/wamp64/www\hospital_version1\themes\template\scripts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66b7d7951e5b09_34503098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '504b54994ea1c158386724543880050399e34f09' => 
    array (
      0 => 'E:/wamp64/www\\hospital_version1\\themes\\template\\scripts.tpl',
      1 => 1723324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66b7d7951e5b09_34503098 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\themes\\template';
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
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, $_prefixVariable3."\\themes\\template\\import.map.tpl", $_smarty_current_dir);
}
}
