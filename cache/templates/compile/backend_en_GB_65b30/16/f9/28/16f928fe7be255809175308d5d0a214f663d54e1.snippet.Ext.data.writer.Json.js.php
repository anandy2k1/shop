<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:03:54
         compiled from "D:\data\Ampps\www\shop\engine\Library\ExtJs\overrides\Ext.data.writer.Json.js" */ ?>
<?php /*%%SmartyHeaderCode:2247524d6b3a867f65-92739856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16f928fe7be255809175308d5d0a214f663d54e1' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\ExtJs\\overrides\\Ext.data.writer.Json.js',
      1 => 1376334192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2247524d6b3a867f65-92739856',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b3a96c5b4_19882613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b3a96c5b4_19882613')) {function content_524d6b3a96c5b4_19882613($_smarty_tpl) {?>/**
 * Overwrite the json data writer to send the
 * associated data in the same request
 */
Ext.override(Ext.data.writer.Json, {
    getRecordData: function (record) {
        var me = this, data, associationData;

        data = me.getRecordFieldData(record);

        if (record.associations && record.associations.length > 0) {
            me.setRecordAssociationData(record, data);
        }
        return data;
    },

    /**
     * Internal helper function to draw the data values into a new object.
     * @param record
     * @return object
     */
    getRecordFieldData: function(record) {
        var data = {};

        Ext.each(record.fields.keys, function(key) {
            data[key] = record.data[key];
        });

        return data;
    },

    /**
     * Internal helper function to read the association data of the passed record.
     * @param record
     */
    setRecordAssociationData: function(record, data) {
        var me = this, associationStores, associatedData;

        //iterate all associations of the record to set the association data to the data object
        record.associations.each(function(association) {

            //get access on the dynamic Ext.data.Store which contains the associated records.
            var associationStore = record[association.storeName];

            //check if the store was generated correctly and contains records
            if (associationStore instanceof Ext.data.Store && associationStore.getCount() > 0) {

                //create new array for the associated data
                data[association.associationKey] = [];

                //iterate all assigned records of the association store.
                associationStore.each(function(associatedRecord) {

                    //check if the current record, is really an Ext.data.Model
                    if (associatedRecord instanceof Ext.data.Model) {
                        //use helper function to get model data
                        associatedData = me.getRecordFieldData(associatedRecord);

                        //check if the record has associations, if this is the case, call recursive
                        if (associatedRecord.associations && associatedRecord.associations.length > 0) {
                            me.setRecordAssociationData(associatedRecord, associatedData);
                        }
                        //after the association data of the record is filled, set the associated data object into the data object.
                        data[association.associationKey].push(associatedData);
                    }
                });
            } else {
                //if the store wasn't created or no record loaded, set an empty object for the association.
                data[association.associationKey] = [];
            }
        });
    }

});<?php }} ?>