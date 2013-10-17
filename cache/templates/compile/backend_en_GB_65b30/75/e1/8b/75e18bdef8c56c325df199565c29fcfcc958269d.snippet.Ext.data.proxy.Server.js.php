<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:03:51
         compiled from "D:\data\Ampps\www\shop\engine\Library\ExtJs\overrides\Ext.data.proxy.Server.js" */ ?>
<?php /*%%SmartyHeaderCode:4400524d6b37cbe555-76839723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75e18bdef8c56c325df199565c29fcfcc958269d' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\ExtJs\\overrides\\Ext.data.proxy.Server.js',
      1 => 1376334192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4400524d6b37cbe555-76839723',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b37e1e4d4_93166271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b37e1e4d4_93166271')) {function content_524d6b37e1e4d4_93166271($_smarty_tpl) {?>/**
 * Shopware 4.0
 * Copyright © 2012 shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    ExtJS
 * @subpackage Override
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author     Stephan Pohl
 * @author     $Author$
 */
Ext.override(Ext.data.proxy.Server, {

    processResponse: function(success, operation, request, response, callback, scope) {
        var me = this,
            reader,
            result;

        if (success === true) {
            reader = me.getReader();

            // Apply defaults to incoming data only for read operations.
            // For create and update, there will already be a client-side record
            // to match with which will contain any defaulted in values.
            reader.applyDefaults = operation.action === 'read';

            result = reader.read(me.extractResponseData(response));

            if (result.success !== false) {
                //see comment in buildRequest for why we include the response object here
                Ext.apply(operation, {
                    response: response,
                    resultSet: result
                });

                operation.commitRecords(result.records);
                operation.setCompleted();
                operation.setSuccessful();
            } else {
                operation.setException(result.message);
                me.fireEvent('exception', this, response, operation);
            }
        } else {
            //user has been logged out reload the backend
            if(response.status == 401) {
                window.location.reload()
            }
            else {
                me.setException(operation, response);
                me.fireEvent('exception', this, response, operation);
                Ext.MessageBox.alert(operation.error.status + ' - ' + operation.error.statusText, Ext.util.Format.stripTags(response.responseText));
            }
        }

        //this callback is the one that was passed to the 'read' or 'write' function above
        if (typeof callback == 'function') {
            callback.call(scope || me, operation);
        }

        me.afterRequest(request, success);
    }
});<?php }} ?>