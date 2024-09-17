<?php
/* Smarty version 5.3.1, created on 2024-09-16 21:29:03
  from 'file:C:/wamp64/www\hospital_version1\themes\template\master.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66e8a31f7379b9_69194782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c9f05c52f31515fc4504bb5390201ae65def01b' => 
    array (
      0 => 'C:/wamp64/www\\hospital_version1\\themes\\template\\master.tpl',
      1 => 1726522137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66e8a31f7379b9_69194782 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\themes\\template';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <?php ob_start();
echo ROOT_PATH;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->renderSubTemplate($_prefixVariable1."\\themes\\template\\style.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php ob_start();
echo ROOT_PATH;
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->renderSubTemplate($_prefixVariable2."\\themes\\template\\scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php echo '<script'; ?>
>
            let app = <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_53728695766e8a31f72d335_21797745', 'appname');
?>
;
            let path = "";
            function convertUppercaseToLowercaseWithPeriod(inputString) {
                return inputString.replace(/[A-Z]/g, function(match) {
                    return '.' + match.toLowerCase();
                });
            }

            path = convertUppercaseToLowercaseWithPeriod(app);
            path = path.slice(1);

            var strVuePath = "localhost<?php echo $_smarty_tpl->getValue('PATH');?>
view/js/view/" + path + ".js";

            let Vuescript = document.createElement("script");
            Vuescript.src = "<?php echo $_smarty_tpl->getValue('PATH');?>
view/js/view/" + path + ".js";
            Vuescript.type = "module";
            document.head.appendChild(Vuescript);
        <?php echo '</script'; ?>
>
        <!--script type="module" src="themes/js/app.js"><?php echo '</script'; ?>
-->
        
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_51307842666e8a31f731dc1_18236593', 'script');
?>


        <link rel="icon" href="favicon.png" type="image/x-icon">
        <title><?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_199132672866e8a31f733584_92077946', 'title');
?>
</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
                </form>
            </div>
            </div>
        </nav>

        <!--here you need to add loop for the modules and its sub pages-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                    <li class="active"><a>Calculate <span class="sr-only">(current)</span></a></li>
                    <li><a href="index.php?module=me7&page=AlxProject&action=Home">Home</a></li>
                    <li><a href="index.php?module=me7&page=AlxProject&action=NewPage">New Page</a></li>
                    <li><a href="index.php?module=me7&page=AlxProject&action=Home">Oher Project Pages(you can add all what you want but add the page methode first)</a></li>
                    </ul>
                </div>
                <!--end of the loop loop for the modules and its sub pages-->
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header"><?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_208570379866e8a31f734e88_58218176', 'pageName');
?>
</h1>
                    <div id="app">
                        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_101325483466e8a31f736440_84563423', 'body');
?>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html><?php }
/* {block 'appname'} */
class Block_53728695766e8a31f72d335_21797745 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\themes\\template';
}
}
/* {/block 'appname'} */
/* {block 'script'} */
class Block_51307842666e8a31f731dc1_18236593 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\themes\\template';
}
}
/* {/block 'script'} */
/* {block 'title'} */
class Block_199132672866e8a31f733584_92077946 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\themes\\template';
}
}
/* {/block 'title'} */
/* {block 'pageName'} */
class Block_208570379866e8a31f734e88_58218176 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\themes\\template';
}
}
/* {/block 'pageName'} */
/* {block 'body'} */
class Block_101325483466e8a31f736440_84563423 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\hospital_version1\\themes\\template';
}
}
/* {/block 'body'} */
}
