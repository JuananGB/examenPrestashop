<?php
/* Smarty version 4.3.1, created on 2023-10-23 13:27:10
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6536588e80a210_54117556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1678742294,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6536588e80a210_54117556 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/d2/2d/85/d22d851f6d7c12eb35c1c34c8e84baa801a8cea2_2.file.helpers.tpl.php',
    'uid' => 'd22d851f6d7c12eb35c1c34c8e84baa801a8cea2',
    'call_name' => 'smarty_template_function_renderLogo_1427354638653654af8fe238_12429449',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://172.24.0.3/index.php?controller=my-account" rel="nofollow">
      Your account
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://172.24.0.3/index.php?controller=identity" title="Information" rel="nofollow">Information</a></li>
                  <li><a href="http://172.24.0.3/index.php?controller=address" title="Add first address" rel="nofollow">Add first address</a></li>
                          <li><a href="http://172.24.0.3/index.php?controller=history" title="Orders" rel="nofollow">Orders</a></li>
                          <li><a href="http://172.24.0.3/index.php?controller=order-slip" title="Credit slips" rel="nofollow">Credit slips</a></li>
                                  <li>
    <a href="http://172.24.0.3/index.php?fc=module&amp;module=blockwishlist&amp;controller=lists" title="My wishlists" rel="nofollow">
      Wishlist
    </a>
  </li>
<li>
  <a href="//172.24.0.3/index.php?fc=module&module=ps_emailalerts&controller=account" title="My alerts">
    My alerts
  </a>
</li>

        <li><a href="http://172.24.0.3/index.php?mylogout=" title="Log me out" rel="nofollow">Sign out</a></li>
       
	</ul>
</div>
<?php }
}
