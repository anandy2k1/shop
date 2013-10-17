<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:03:55
         compiled from "D:\data\Ampps\www\shop\engine\Library\ExtJs\overrides\Ext.form.field.ComboBox.js" */ ?>
<?php /*%%SmartyHeaderCode:146524d6b3b041e29-78537161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '955da765f113103c850e7d030119035143ac192c' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\ExtJs\\overrides\\Ext.form.field.ComboBox.js',
      1 => 1376334192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146524d6b3b041e29-78537161',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b3b216e58_70861919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b3b216e58_70861919')) {function content_524d6b3b216e58_70861919($_smarty_tpl) {?>/**
 * Shopware UI - ComboBox Override
 *
 * This files provides an override to address the
 * boundlist easier in our Selenium Tests.
 *
 * The override adds an addtional HTML5 "data"-attrbute
 * to the element.
 *
 * shopware AG (c) 2012. All rights reserved.
 *
 * @link http://www.shopware.de/
 * @author st.pohl
 * @date 2012-05-03
 * @license http://www.shopware.de/license
 * @package overrides
 */
Ext.override(Ext.form.field.ComboBox,
/** @lends Ext.form.field.ComboBox */
{
    /**
     * Suffix for the added data-attribute.
     * @string
     */
    dataSuffix: 'action',

    /**
     * Additional suffix which will be added
     * to the value as a suffix
     */
    valueSuffix: '-table',

    /**
     * Adds an additional HTML5 "data"-attribute
     * to easier address the element in our
     * selenium tests.
     *
     * @public
     * @return void
     */
    afterRender: function() {
        var me = this;
        me.callOverridden(arguments);

        if(me.el.dom) {
            var dom = me.el.dom,
                value = (me.listConfig) ? me.listConfig.action : me.name;

            dom.setAttribute('data-' + me.dataSuffix, value + me.valueSuffix);
        }
    }
});<?php }} ?>