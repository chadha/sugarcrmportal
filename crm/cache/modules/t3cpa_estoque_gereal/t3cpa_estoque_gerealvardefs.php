<?php
// created: 2015-03-02 13:09:58
$GLOBALS["dictionary"]["t3cpa_estoque_gereal"] = array (
  'table' => 't3cpa_estoque_gereal',
  'audited' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'required' => true,
      'importable' => 'required',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 't3cpa_estoque_gereal_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 't3cpa_estoque_gereal_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 't3cpa_estoque_gereal_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'eg_valor_unitario' => 
    array (
      'required' => false,
      'name' => 'eg_valor_unitario',
      'vname' => 'LBL_EG_VALOR_UNITARIO',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    'eg_nm_produto' => 
    array (
      'required' => false,
      'name' => 'eg_nm_produto',
      'vname' => 'LBL_EG_NM_PRODUTO',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    'cod_prod' => 
    array (
      'required' => false,
      'name' => 'cod_prod',
      'vname' => 'LBL_COD_PROD',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    'eg_total' => 
    array (
      'required' => false,
      'name' => 'eg_total',
      'vname' => 'LBL_EG_TOTAL',
      'type' => 'int',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '',
    ),
    'eg_lote' => 
    array (
      'required' => false,
      'name' => 'eg_lote',
      'vname' => 'LBL_EG_LOTE',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => 'Lote do produto',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    'eg_saldo' => 
    array (
      'required' => false,
      'name' => 'eg_saldo',
      'vname' => 'LBL_EG_SALDO',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => 'saldo atual de estoque',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    'eg_regional' => 
    array (
      'required' => false,
      'name' => 'eg_regional',
      'vname' => 'LBL_EG_REGIONAL',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    'eg_secretaria' => 
    array (
      'required' => false,
      'name' => 'eg_secretaria',
      'vname' => 'LBL_EG_SECRETARIA',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    't3cpa_estoq3cpa_regionais' => 
    array (
      'name' => 't3cpa_estoq3cpa_regionais',
      'type' => 'link',
      'relationship' => 't3cpa_estoque_gereal_t3cpa_regionais',
      'source' => 'non-db',
      'vname' => 'LBL_T3CPA_ESTOQUE_GEREAL_T3CPA_REGIONAIS_FROM_T3CPA_REGIONAIS_TITLE',
    ),
    't3cpa_estoqregionais_name' => 
    array (
      'name' => 't3cpa_estoqregionais_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_T3CPA_ESTOQUE_GEREAL_T3CPA_REGIONAIS_FROM_T3CPA_REGIONAIS_TITLE',
      'save' => true,
      'id_name' => 't3cpa_esto991agionais_idb',
      'link' => 't3cpa_estoq3cpa_regionais',
      'table' => 't3cpa_regionais',
      'module' => 't3cpa_regionais',
      'rname' => 'name',
    ),
    't3cpa_esto991agionais_idb' => 
    array (
      'name' => 't3cpa_esto991agionais_idb',
      'type' => 'link',
      'relationship' => 't3cpa_estoque_gereal_t3cpa_regionais',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_T3CPA_ESTOQUE_GEREAL_T3CPA_REGIONAIS_FROM_T3CPA_REGIONAIS_TITLE',
    ),
    't3cpa_estoqpa_secretarias' => 
    array (
      'name' => 't3cpa_estoqpa_secretarias',
      'type' => 'link',
      'relationship' => 't3cpa_estoque_gereal_t3cpa_secretarias',
      'source' => 'non-db',
      'vname' => 'LBL_T3CPA_ESTOQUE_GEREAL_T3CPA_SECRETARIAS_FROM_T3CPA_SECRETARIAS_TITLE',
    ),
    't3cpa_estoqcretarias_name' => 
    array (
      'name' => 't3cpa_estoqcretarias_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_T3CPA_ESTOQUE_GEREAL_T3CPA_SECRETARIAS_FROM_T3CPA_SECRETARIAS_TITLE',
      'save' => true,
      'id_name' => 't3cpa_esto5beaetarias_idb',
      'link' => 't3cpa_estoqpa_secretarias',
      'table' => 't3cpa_secretarias',
      'module' => 't3cpa_secretarias',
      'rname' => 'name',
    ),
    't3cpa_esto5beaetarias_idb' => 
    array (
      'name' => 't3cpa_esto5beaetarias_idb',
      'type' => 'link',
      'relationship' => 't3cpa_estoque_gereal_t3cpa_secretarias',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_T3CPA_ESTOQUE_GEREAL_T3CPA_SECRETARIAS_FROM_T3CPA_SECRETARIAS_TITLE',
    ),
  ),
  'relationships' => 
  array (
    't3cpa_estoque_gereal_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 't3cpa_estoque_gereal',
      'rhs_table' => 't3cpa_estoque_gereal',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    't3cpa_estoque_gereal_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 't3cpa_estoque_gereal',
      'rhs_table' => 't3cpa_estoque_gereal',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    't3cpa_estoque_gereal_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 't3cpa_estoque_gereal',
      'rhs_table' => 't3cpa_estoque_gereal',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 't3cpa_estoque_gerealpk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);
?>