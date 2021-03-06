<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:03:53
         compiled from "D:\data\Ampps\www\shop\engine\Library\ExtJs\overrides\Ext.LoadMask.js" */ ?>
<?php /*%%SmartyHeaderCode:9274524d6b399d18c1-81928761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60b779b93449f4bb2a2a10c9e0d0f0df9cd7dad9' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\ExtJs\\overrides\\Ext.LoadMask.js',
      1 => 1376334192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9274524d6b399d18c1-81928761',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b39bc17d0_50543334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b39bc17d0_50543334')) {function content_524d6b39bc17d0_50543334($_smarty_tpl) {?>/**
 * Enlight
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://enlight.de/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@shopware.de so we can send you a copy immediately.
 *
 * @category   Enlight
 * @package    Enlight_ExtJs
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @license    http://enlight.de/license     New BSD License
 * @version    $Id$
 * @author     Stephan Pohl
 * @author     $Author$
 */

/**
 * Overrides the default behavior of the loading
 * mask to destroy the LoadMask after a given
 * delay to prevent the backend to be unusable
 * after a error was raised.
 *
 * @category   Enlight
 * @package    Enlight_ExtJs
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @license    http://enlight.de/license     New BSD License
 */
Ext.define('Ext.LoadMask-Shopware', {

    override: 'Ext.LoadMask',

    /**
     * Holder property which holds the DelayedTask if a delay
     * is configured
     *
     * @private
     * @null or Ext.util.DelayedTask
     */
    _delayedTask: null,

    hideLoadingMsg: false,

    hideModal: false,

    bindComponent: function(comp){
        var me = this,
            listeners = {
                scope: this,
                resize: me.sizeMask,
                added: me.onComponentAdded,
                removed: me.onComponentRemoved
            },
            hierarchyEventSource = Ext.container.Container.hierarchyEventSource;

        me.hideLoadingMsg = comp.hideLoadingMsg || false;
        if (comp.floating) {
            listeners.move = me.sizeMask;
            me.activeOwner = comp;
        } else if (comp.ownerCt) {
            me.onComponentAdded(comp.ownerCt);
        } else {
            // if the target comp is non-floating and under a floating comp don't bring the load mask to the front of the stack
            me.preventBringToFront = true;
        }

        me.mon(comp, listeners);

        // subscribe to the observer that manages the hierarchy
        me.mon(hierarchyEventSource, {
            show: me.onContainerShow,
            hide: me.onContainerHide,
            expand: me.onContainerExpand,
            collapse: me.onContainerCollapse,
            scope: me
        });
    },

    bindStore : function(store, initial) {
        var me = this;
        me.hideLoadingMsg = me.hideLoadingMsg || false;
        if(!me.hideLoadingMsg) {
            me.mixins.bindable.bindStore.apply(me, arguments);
        }
        store = me.store;
        if (store && store.isLoading() && !me.hideLoadingMsg) {
            me.onBeforeLoad();
        }
    },

    /**
     * Checks if a delay is configured and creates a delayed task
     * to hide the Ext.LoadMask after the given delay
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        try {
            me.callOverridden(arguments);
        } catch(err) {  }
        if(me.delay && me.delay > 0) {

            me._delayedTask = new Ext.util.DelayedTask(function() {
                me.hide();
            });
            me._delayedTask.delay(me.delay);
        }
    },

    /**
     * Checks if a delayed task is configured and cancels
     * it if the hide method is fired before the delayed task
     * is fired.
     *
     * @return void
     */
    hide: function() {
        try {
            this.callOverridden(arguments);
        } catch(err) {  }
        if(this._delayedTask) {
            this._delayedTask.cancel();
            this._delayedTask = null;
        }
    },

    show: function() {
        var me = this;

        // Element support to be deprecated
        if (this.isElement) {
            this.ownerCt.mask(this.useMsg ? this.msg : '', this.msgCls);
            this.fireEvent('show', this);

            if(me.hideModal) {
                var mask = Ext.get(Ext.getBody().query('.x-mask')[0]);
                mask.hide();
            }
            return;
        }

        return this.callParent(arguments);
    }
});<?php }} ?>