<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:04:12
         compiled from "D:\data\Ampps\www\shop\templates\_default\backend\base\store\password_encoder.js" */ ?>
<?php /*%%SmartyHeaderCode:13529524d6b4cb0cbd2-75450271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '912bfc0c9db0c02fba104ef68f4c17d6d4003b77' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_default\\backend\\base\\store\\password_encoder.js',
      1 => 1376334194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13529524d6b4cb0cbd2-75450271',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b4cc685a9_47128750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b4cc685a9_47128750')) {function content_524d6b4cc685a9_47128750($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Store
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */


Ext.define('Shopware.apps.Base.store.PasswordEncoder', {
    extend: 'Ext.data.Store',

    alternateClassName: 'Shopware.store.PasswordEncoder',
    storeId: 'base.PasswordEncoder',
    model : 'Shopware.apps.Base.model.PasswordEncoder',

    proxy:{
        type:'ajax',
        url:'<?php echo '/shop/backend/base/getAvailableHashes';?>',
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
}).create();
<?php }} ?>