<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:03:54
         compiled from "D:\data\Ampps\www\shop\engine\Library\ExtJs\overrides\Ext.view.BoundList.js" */ ?>
<?php /*%%SmartyHeaderCode:26141524d6b3ad30d58-30307880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ebeecb51033d62ec35a2da57a80004477521cbe' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\ExtJs\\overrides\\Ext.view.BoundList.js',
      1 => 1376334192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26141524d6b3ad30d58-30307880',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b3ae20814_51095661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b3ae20814_51095661')) {function content_524d6b3ae20814_51095661($_smarty_tpl) {?>/**
 * Shopware UI - BoundList Override
 *
 * This files provides an override to address the
 * boundlist easier in our Selenium Tests.
 *
 * The override adds an addtional HTML5 "data"-attrbute
 * to the element. The value of the attribute is
 * either the "name" property of the ComboBox or
 * the action
 *
 * shopware AG (c) 2012. All rights reserved.
 *
 * @link http://www.shopware.de/
 * @author st.pohl
 * @date 2012-05-02
 * @license http://www.shopware.de/license
 * @package overrides
 */
Ext.override(Ext.view.BoundList,
/** @lends Ext.view.BoundList# */
{
    /**
     * Suffix for the added data-attribute.
     * @string
     */
    dataSuffix: 'action',

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

        if(me.el.dom && me.pickerField) {
            var dom = me.el.dom,
                value = me.action || me.pickerField.name;

            dom.setAttribute('data-' + me.dataSuffix, value);
        }
    }
});<?php }} ?>