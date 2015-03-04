<?php
// created: 2015-03-02 13:09:58
$GLOBALS["dictionary"]["CAD_S_Solucoes"] = array (
  'table' => 'cad_s_solucoes',
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
      'relationship' => 'cad_s_solucoes_created_by',
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
      'relationship' => 'cad_s_solucoes_modified_user',
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
      'relationship' => 'cad_s_solucoes_assigned_user',
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
    'codigo' => 
    array (
      'required' => true,
      'name' => 'codigo',
      'vname' => 'LBL_CODIGO',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    'referencia' => 
    array (
      'required' => true,
      'name' => 'referencia',
      'vname' => 'LBL_REFERENCIA',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    'unidade_compra' => 
    array (
      'required' => false,
      'name' => 'unidade_compra',
      'vname' => 'LBL_UNIDADE_COMPRA',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    'unidade_venda' => 
    array (
      'required' => false,
      'name' => 'unidade_venda',
      'vname' => 'LBL_UNIDADE_VENDA',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    'cad_s_soluc_cad_f_familia' => 
    array (
      'name' => 'cad_s_soluc_cad_f_familia',
      'type' => 'link',
      'relationship' => 'cad_s_solucoes_cad_f_familia',
      'source' => 'non-db',
      'vname' => 'LBL_CAD_S_SOLUCOES_CAD_F_FAMILIA_FROM_CAD_F_FAMILIA_TITLE',
    ),
    'cad_s_solucf_familia_name' => 
    array (
      'name' => 'cad_s_solucf_familia_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_CAD_S_SOLUCOES_CAD_F_FAMILIA_FROM_CAD_F_FAMILIA_TITLE',
      'save' => true,
      'id_name' => 'cad_s_solu89d2familia_ida',
      'link' => 'cad_s_soluc_cad_f_familia',
      'table' => 'cad_f_familia',
      'module' => 'Cad_F_Familia',
      'rname' => 'name',
    ),
    'cad_s_solu89d2familia_ida' => 
    array (
      'name' => 'cad_s_solu89d2familia_ida',
      'type' => 'link',
      'relationship' => 'cad_s_solucoes_cad_f_familia',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_CAD_S_SOLUCOES_CAD_F_FAMILIA_FROM_CAD_S_SOLUCOES_TITLE',
    ),
    'itop__itenscad_s_solucoes' => 
    array (
      'name' => 'itop__itenscad_s_solucoes',
      'type' => 'link',
      'relationship' => 'itop__itens_oportunidade_cad_s_solucoes',
      'source' => 'non-db',
      'side' => 'right',
      'vname' => 'LBL_ITOP__ITENS_OPORTUNIDADE_CAD_S_SOLUCOES_FROM_ITOP__ITENS_OPORTUNIDADE_TITLE',
    ),
    'codigo_c' => 
    array (
      'required' => true,
      'source' => 'custom_fields',
      'name' => 'codigo_c',
      'vname' => 'LBL_CODIGO',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => NULL,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
      'id' => 'CAD_S_Solucoescodigo_c',
      'custom_module' => 'CAD_S_Solucoes',
    ),
    'referencia_c' => 
    array (
      'required' => true,
      'source' => 'custom_fields',
      'name' => 'referencia_c',
      'vname' => 'LBL_REFERENCIA',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => NULL,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
      'id' => 'CAD_S_Solucoesreferencia_c',
      'custom_module' => 'CAD_S_Solucoes',
    ),
    'unidade_venda_c' => 
    array (
      'required' => true,
      'source' => 'custom_fields',
      'name' => 'unidade_venda_c',
      'vname' => 'LBL_UNIDADE_VENDA',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => NULL,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
      'id' => 'CAD_S_Solucoesunidade_venda_c',
      'custom_module' => 'CAD_S_Solucoes',
    ),
    'unidade_compra_c' => 
    array (
      'required' => true,
      'source' => 'custom_fields',
      'name' => 'unidade_compra_c',
      'vname' => 'LBL_UNIDADE_COMPRA',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => NULL,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
      'id' => 'CAD_S_Solucoesunidade_compra_c',
      'custom_module' => 'CAD_S_Solucoes',
    ),
  ),
  'relationships' => 
  array (
    'cad_s_solucoes_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'CAD_S_Solucoes',
      'rhs_table' => 'cad_s_solucoes',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'cad_s_solucoes_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'CAD_S_Solucoes',
      'rhs_table' => 'cad_s_solucoes',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'cad_s_solucoes_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'CAD_S_Solucoes',
      'rhs_table' => 'cad_s_solucoes',
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
      'name' => 'cad_s_solucoespk',
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
  'custom_fields' => true,
);
?>