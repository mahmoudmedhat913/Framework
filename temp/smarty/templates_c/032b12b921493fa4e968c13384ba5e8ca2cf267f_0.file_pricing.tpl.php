<?php
/* Smarty version 5.3.1, created on 2024-08-17 22:26:16
  from 'file:E:/wamp64/www\hospital_version1/modules/cal/view/template/page/pricing.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c1238886bdf5_71807151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '032b12b921493fa4e968c13384ba5e8ca2cf267f' => 
    array (
      0 => 'E:/wamp64/www\\hospital_version1/modules/cal/view/template/page/pricing.tpl',
      1 => 1723933523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c1238886bdf5_71807151 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
ob_start();
echo ROOT_PATH;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_123209051266c123888681d6_01948541', 'title');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_78463874066c123888697b9_22550621', 'appname');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3296566866c1238886a547_09657394', 'pageName');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2060322166c1238886b1d9_85667787', 'body');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, $_prefixVariable1."\\themes\\template\\master.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_123209051266c123888681d6_01948541 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    Pricing
<?php
}
}
/* {/block 'title'} */
/* {block 'appname'} */
class Block_78463874066c123888697b9_22550621 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    "Pricing"
<?php
}
}
/* {/block 'appname'} */
/* {block 'pageName'} */
class Block_3296566866c1238886a547_09657394 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    Pricing
<?php
}
}
/* {/block 'pageName'} */
/* {block 'body'} */
class Block_2060322166c1238886b1d9_85667787 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'E:\\wamp64\\www\\hospital_version1\\modules\\cal\\view\\template\\page';
?>

    <div class="bg-gradient">

        <!--Basic Info-->
        <div class="popover-title">
            <h2>Basic Info</h2>
            <form>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Company Name</label>
                        <select class="form-control">
                            <option value="-1">Company Name</option>
                            <option value="0">Ahly</option>
                            <option value="1">Zamalek</option>
                            <option value="2">Ismaily</option>
                            <option value="3">Betrol Asute</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Patient Name</label>
                        <input type="text" class="form-control" placeholder="Patient Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Age</label>
                        <input type="number" class="form-control" placeholder="Age">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Phicition Name</label>
                        <select class="form-control">
                            <option value="-1">Phicition Name</option>
                            <option value="0">Dr. Gopashi</option>
                            <option value="1">Dr. Marime</option>
                            <option value="2">Dr. Metwali</option>
                            <option value="3">Dr Gada3</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Enty Date</label>
                        <input type="Date" class="form-control">
                    </div>
                </div>
            </form>
        </div>

        <!--Admission-->
        <div class="popover-title mt-5">
            <h2>Admission</h2>
            <div class="row">
                <div class="col-md-2 pull-right">
                    <label>Result</label>
                    <input type="text" class="form-control" placeholder="0.00" disabled>
                </div>
                <div class="col-md-2 pull-right">
                    <label>Result After the Discout</label>
                    <input type="text" class="form-control" placeholder="0.00" disabled>
                </div>
            </div>
            <form>
                <div class="row">
                    <!--SubSection1-->
                    <div class="form-group col-md-12">
                        <h3>Type</h3>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Room"><input type="radio" name="Type" id="Room"> Room</label>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="ICU"><input type="radio" name="Type" id="ICU"> ICU</label>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Day Case"><input type="radio" name="Type" id="Day Case"> Day Case</label>
                    </div>
                    <div class="form-group col-md-1">
                        <label>Number of Nights</label>
                    </div>
                    <div class="form-group col-md-2">
                        <input type="number" class="form-control">
                    </div>
                    <!--SubSection2-->
                    <div class="form-group col-md-6 row">
                        <div class="col-md-12">
                            <label>Medical Supervision Care</label>
                        </div>
                        <div class="col-md-6">
                            Result <input type="text" class="form-control" placeholder="0.00" disabled>
                        </div>
                        <div class="col-md-6">
                            Result After the Discout <input type="text" class="form-control" placeholder="0.00" disabled>
                        </div>
                    </div>
                    <div class="form-group col-md-6 row">
                        <div class="col-md-12">
                            <label>Medication</label>
                        </div>
                        <div class="col-md-6">
                            Result <input type="text" class="form-control" placeholder="0.00" disabled>
                        </div>
                        <div class="col-md-6">
                            Result After the Discout <input type="text" class="form-control" placeholder="0.00" disabled>
                        </div>
                    </div>
                    <!--SubSection3-->
                    <div class="form-group col-md-6 row">
                        <div class="col-md-12">
                            <label>Consumables</label>
                        </div>
                        <div class="col-md-6">
                            Result <input type="text" class="form-control" placeholder="0.00" disabled>
                        </div>
                        <div class="col-md-6">
                            Result After the Discout <input type="text" class="form-control" placeholder="0.00" disabled>
                        </div>
                    </div>
                    <div class="form-group col-md-6 row">
                        <div class="col-md-12">
                            <label>Labs & Radio</label>
                        </div>
                        <div class="col-md-4">
                            Result <input type="text" class="form-control" placeholder="0.00" disabled>
                        </div>
                        <div class="col-md-4">
                            Result After the Discout <input type="text" class="form-control" placeholder="0.00" disabled>
                        </div>
                        <div class="col-md-4">
                            <label>Radio</label>
                            <select class="form-control">
                                <option value="-1">Radio</option>
                                <option value="0">Sonar</option>
                                <option value="1">CT</option>
                                <option value="2">CT Chest</option>
                                <option value="3">Ultra Sonic</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!--Operation 1-->
        <div class="popover-title mt-5">
            <h2>Operation 1</h2>
            <div class="row mb-5">
                <div class="col-md-2 pull-right">
                    <label>Result</label>
                    <input type="text" class="form-control" placeholder="0.00" disabled>
                </div>
                <div class="col-md-2 pull-right">
                    <label>Result After the Discout</label>
                    <input type="text" class="form-control" placeholder="0.00" disabled>
                </div>
                <div class="form-group col-md-1">
                    <label>Hours</label>
                </div>
                <div class="form-group col-md-2">
                    <input type="number" class="form-control">
                </div>
            </div>
            <form>
                <div class="row">
                    <!--SubSection1-->
                    <div class="col-md-6 row m-0" style="border-right: 1px solid #E0E0E0;">
                        <div class="form-group col-md-12">
                            <label>Phisition Fees</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control">
                                        <option value="-1">Phisition Fees</option>
                                        <option value="0">Expirance</option>
                                        <option value="1">Bing</option>
                                        <option value="2">Some Data1</option>
                                        <option value="3">Some Data2</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    Result
                                </div>
                                <div class="col-md-2">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                                <div class="col-md-1">
                                    Result`
                                </div>
                                <div class="col-md-2">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Consumables</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control">
                                        <option value="-1">Consumables</option>
                                        <option value="0">2K</option>
                                        <option value="1">4K</option>
                                        <option value="3">6K</option>
                                        <option value="3">8K</option>
                                        <option value="3">10K</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    Result
                                </div>
                                <div class="col-md-2">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                                <div class="col-md-1">
                                    Result`
                                </div>
                                <div class="col-md-2">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                            </div>
                        </div>

                        <!--div class="form-group col-md-12 row">
                            <div class="col-md-12">
                                <label>Labs & Radio</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control">
                                    <option value="-1">Radio</option>
                                    <option value="0">Sonar</option>
                                    <option value="1">CT</option>
                                    <option value="2">CT Chest</option>
                                    <option value="3">Ultra Sonic</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                Result
                            </div>
                            <div class="col-md-2">
                                <span class="text-primary">EGP 0.00</span>
                            </div>
                            <div class="col-md-1">
                                Result`
                            </div>
                            <div class="col-md-2">
                                <span class="text-primary">EGP 0.00</span>
                            </div>
                        </div-->
                    </div>
                    <div class="col-md-6 row m-0">
                        <!--SubSection2-->
                        <div class="form-group col-md-12 row">
                            <div class="col-md-4 mb-4">
                                <label>Operation Room Time</label>
                            </div>
                            <div class="row col-md-6 pull-right">
                                <div class="col-md-2">
                                    Result
                                </div>
                                <div class="col-md-4">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                                <div class="col-md-2">
                                    Result`
                                </div>
                                <div class="col-md-4">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                            </div>
                        </div>
                        <!--SubSection3-->
                        <div class="form-group col-md-12 row">
                            <div class="col-md-4 mb-4">
                                <label>Gases</label>
                            </div>
                            <div class="row col-md-6 pull-right">
                                <div class="col-md-2">
                                    Result
                                </div>
                                <div class="col-md-4">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                                <div class="col-md-2">
                                    Result`
                                </div>
                                <div class="col-md-4">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12 row">
                            <div class="col-md-4 mb-4">
                                <label>Basic Equipments</label>
                            </div>
                            <div class="row col-md-6 pull-right">
                                <div class="col-md-2">
                                    Result
                                </div>
                                <div class="col-md-4">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                                <div class="col-md-2">
                                    Result`
                                </div>
                                <div class="col-md-4">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!--Operation 2-->
        <div class="popover-title mt-5">
            <h2>Operation 2</h2>
            <div class="row mb-5">
                <div class="col-md-2 pull-right">
                    <label>Result</label>
                    <input type="text" class="form-control" placeholder="0.00" disabled>
                </div>
                <div class="col-md-2 pull-right">
                    <label>Result After the Discout</label>
                    <input type="text" class="form-control" placeholder="0.00" disabled>
                </div>
            </div>
            <form>
                <div class="row">
                    <!--SubSection1-->
                    <div class="col-md-6 row m-0" style="border-right: 1px solid #E0E0E0;">
                        <div class="form-group col-md-12">
                            <label>Consumables</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control">
                                        <option value="-1">Consumables</option>
                                        <option value="0">Expirance</option>
                                        <option value="1">Bing</option>
                                        <option value="2">Some Data1</option>
                                        <option value="3">Some Data2</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    Result
                                </div>
                                <div class="col-md-2">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                                <div class="col-md-1">
                                    Result`
                                </div>
                                <div class="col-md-2">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--SubSection2-->
                    <div class="col-md-6 row m-0">
                        <div class="form-group col-md-12">
                            <label>Equipments</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control">
                                        <option value="-1">Equipments</option>
                                        <option value="0">2K</option>
                                        <option value="1">4K</option>
                                        <option value="3">6K</option>
                                        <option value="3">8K</option>
                                        <option value="3">10K</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    Result
                                </div>
                                <div class="col-md-2">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                                <div class="col-md-1">
                                    Result`
                                </div>
                                <div class="col-md-2">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!--Additionals-->
        <div class="popover-title mt-5">
            <h2>Additionals</h2>
            <div class="row mb-5">
                <div class="col-md-2 pull-right">
                    <label>Result</label>
                    <input type="text" class="form-control" placeholder="0.00" disabled>
                </div>
                <div class="col-md-2 pull-right">
                    <label>Result After the Discout</label>
                    <input type="text" class="form-control" placeholder="0.00" disabled>
                </div>
            </div>
            <form>
                <div class="row">
                    <!--SubSection1-->
                    <div class="col-md-6 row m-0" style="border-right: 1px solid #E0E0E0;">
                        <div class="form-group col-md-12">
                            <label>Pathology</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" class="form-control" placeholder="0">
                                </div>
                                <div class="col-md-1">
                                    Result
                                </div>
                                <div class="col-md-2">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                                <div class="col-md-1">
                                    Result`
                                </div>
                                <div class="col-md-2">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 row m-0">
                        <div class="form-group col-md-12">
                            <label>Blood</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" class="form-control" placeholder="0">
                                </div>
                                <div class="col-md-1">
                                    Result
                                </div>
                                <div class="col-md-2">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                                <div class="col-md-1">
                                    Result`
                                </div>
                                <div class="col-md-2">
                                    <span class="text-primary">EGP 0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--Addtions-->
        <div class="popover-title mt-5">
            <h2>Addtions</h2>
            <div class="row">
                <div class="col-md-2 pull-right">
                    <label>Result</label>
                    <input type="text" class="form-control" placeholder="0.00" disabled>
                </div>
                <div class="col-md-2 pull-right">
                    <label>Result After the Discout</label>
                    <input type="text" class="form-control" placeholder="0.00" disabled>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Additions</label>
                        <div class="row">
                            <div class="col-md-6">
                                <select class="form-control">
                                    <option value="-1">Additions</option>
                                    <option value="0">Addtion 1</option>
                                    <option value="1">Addtion 2</option>
                                    <option value="2">Addtion 3</option>
                                    <option value="3">Addtion 4</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                Result
                            </div>
                            <div class="col-md-2">
                                <span class="text-primary">EGP 0.00</span>
                            </div>
                            <div class="col-md-1">
                                Result`
                            </div>
                            <div class="col-md-2">
                                <span class="text-primary">EGP 0.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!--Total-->
        <div class="popover-title mt-5">
            <h2>Total</h2>
            <div class="row">
                <div class="col-md-2">
                    <label>Result</label>
                    <input type="text" class="form-control" placeholder="0.00" disabled>
                </div>
                <div class="col-md-2">
                    <label>Result After the Discout</label>
                    <input type="text" class="form-control" placeholder="0.00" disabled>
                </div>
                <div class="col-md-3 pull-right mt-4">
                    <button type="button" @click="CheckCost()" class="btn btn-success">Calculate Cost</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
