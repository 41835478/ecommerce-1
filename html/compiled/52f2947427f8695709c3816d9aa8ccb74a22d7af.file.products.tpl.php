<?php /* Smarty version Smarty-3.1.18, created on 2014-11-08 09:40:34
         compiled from "html/files/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1031270414538c7da8bfde07-10415096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52f2947427f8695709c3816d9aa8ccb74a22d7af' => 
    array (
      0 => 'html/files/products.tpl',
      1 => 1415432430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1031270414538c7da8bfde07-10415096',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538c7da8c46286_37898427',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'productType' => 0,
    'server' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538c7da8c46286_37898427')) {function content_538c7da8c46286_37898427($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="header_form2" >
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">
            Products List
        </div>

    </div>
    <div class="pers_title">
        <ul>
            <li style="width:150px">
                Product Name
            </li>
            <li style="width:110px">
                Type
            </li>
            <li style="width:60px">
                Version
            </li>
            <li style="width:60px">
                Renewal
            </li>
            <li style="width:60px">
                Custom
            </li>
            <li style="width:50px">
                Action
            </li>
        </ul>
    </div>
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
    <div class="pers_body">
        <ul>
            <li style="width:150px">
                <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

            </li>
            <li style="width:110px">
                <?php echo $_smarty_tpl->tpl_vars['productType']->value[$_smarty_tpl->tpl_vars['product']->value['type']];?>

            </li>
            <li style="width:60px">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['version']=='') {?> N/A <?php } else { ?> $product.version<?php }?>
            </li>
            <li style="width:60px">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['renewal']==0) {?> False <?php } else { ?> True <?php }?>
            </li>
            <li style="width:60px">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['custom']==0) {?> Standard <?php } else { ?> Custom <?php }?>
            </li>
            <li style="width:50px">
                <a href="#" style="width:10px;height:10px" id="edit_server" onclick="fillServer('<?php echo $_smarty_tpl->tpl_vars['server']->value['id'];?>
')"><div class="foot_icon2" style="margin-left:45px;float:left"></div></a>
            </li>
        </ul>
    </div>
    <?php } ?>
</div>

<div class="header_form" >
    <input type="hidden" id="producServer" />
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">
            Tools
        </div>
        <a href="#"><div class="head_close2"></div></a>
    </div>
    <div class="tool_head">

        <a href="#" id="ded_img2">
        <div class="ded_img">
            <div class="ded_img2"></div>
        </div></a><div class="ded_select2" ></div>
    </div>

    <div class="tool_info">

        <div class="tool_sli2">
            <span>Renewal</span>
            <div class="renewal_msg">
                <div class="re_img"></div>
                <span2>
                    Warning! This functionality can cause unavailability of your server and may lead to data loss. Please note that we do not provide any guarantee.
                </span2>
            </div>
            <span1 id="confirmMessage" style="display:none">
                Are you sure you want to renew the selected product
            </span1>
            <br />
            <input type="button" id="Renewal" value="Renewal" style="margin-top:10px" />
        </div>
        <div class="tool_sli3">
            <div class="ftp_back_haed">
                <ul style="color:black;">
                    <li>
                        Backup server
                    </li>
                    <li>
                        Login
                    </li>
                    <li>
                        Root password
                    </li>
                </ul>
            </div>

        </div>
    </div>

</div>
<?php }} ?>
