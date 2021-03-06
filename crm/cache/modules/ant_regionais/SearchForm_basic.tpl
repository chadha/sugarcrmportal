
{if !isset($templateMeta.maxColumnsBasic)}
	{assign var="basicMaxColumns" value=$templateMeta.maxColumns}
{else}
    {assign var="basicMaxColumns" value=$templateMeta.maxColumnsBasic}
{/if}

<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		{sugar_translate label='LBL_REG_RAZAO_SOCIAL ' module='ant_regionais'}
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if strlen($fields.reg_razao_social_basic.value) <= 0}
{assign var="value" value=$fields.reg_razao_social_basic.default_value }
{else}
{assign var="value" value=$fields.reg_razao_social_basic.value }
{/if}  
<input type='text' name='{$fields.reg_razao_social_basic.name}' 
    id='{$fields.reg_razao_social_basic.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='Razão Social' tabindex='' > 
   	   	</td>
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		{sugar_translate label='LBL_REG_NM_FANTASIA' module='ant_regionais'}
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if strlen($fields.reg_nm_fantasia_basic.value) <= 0}
{assign var="value" value=$fields.reg_nm_fantasia_basic.default_value }
{else}
{assign var="value" value=$fields.reg_nm_fantasia_basic.value }
{/if}  
<input type='text' name='{$fields.reg_nm_fantasia_basic.name}' 
    id='{$fields.reg_nm_fantasia_basic.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='Nome Fantadia da Regional' tabindex='' > 
   	   	</td>
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		{sugar_translate label='LBL_REG_CNPJ' module='ant_regionais'}
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if strlen($fields.reg_cnpj_basic.value) <= 0}
{assign var="value" value=$fields.reg_cnpj_basic.default_value }
{else}
{assign var="value" value=$fields.reg_cnpj_basic.value }
{/if}  
<input type='text' name='{$fields.reg_cnpj_basic.name}' 
    id='{$fields.reg_cnpj_basic.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='' tabindex='' > 
   	   	</td>
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		{sugar_translate label='LBL_REG_ESTADO ' module='ant_regionais'}
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{html_options name='reg_estado_basic[]' options=$fields.reg_estado_basic.options size="6" style="width: 150px" multiple="1" selected=$fields.reg_estado_basic.value}
   	   	</td>
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		{sugar_translate label='LBL_REG_CIDADE' module='ant_regionais'}
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if strlen($fields.reg_cidade_basic.value) <= 0}
{assign var="value" value=$fields.reg_cidade_basic.default_value }
{else}
{assign var="value" value=$fields.reg_cidade_basic.value }
{/if}  
<input type='text' name='{$fields.reg_cidade_basic.name}' 
    id='{$fields.reg_cidade_basic.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='' tabindex='' > 
   	   	</td>
    {if $formData|@count >= $basicMaxColumns+1}
    </tr>
    <tr>
	<td colspan="{$searchTableColumnCount}">
    {else}
	<td class="sumbitButtons">
    {/if}
	    <input tabindex='2' title='{$APP.LBL_SEARCH_BUTTON_TITLE}' accessKey='{$APP.LBL_SEARCH_BUTTON_KEY}' onclick='SUGAR.savedViews.setChooser()' class='button' type='submit' name='button' value='{$APP.LBL_SEARCH_BUTTON_LABEL}' id='search_form_submit'/>&nbsp;
	    <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}' accessKey='{$APP.LBL_CLEAR_BUTTON_KEY}' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
        {if $HAS_ADVANCED_SEARCH}
	    &nbsp;&nbsp;<a id="advanced_search_link" onclick="SUGAR.searchForm.searchFormSelect('{$module}|advanced_search','{$module}|basic_search')" href="#">{$APP.LNK_ADVANCED_SEARCH}</a>
	    {/if}
    </td>
	<td class="helpIcon" width="*"><img  border='0' src='{sugar_getimagepath file="help-dashlet.gif"}' onmouseover="return overlib(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'), STICKY, MOUSEOFF,1000,WIDTH, 700, LEFT,CAPTION,'<div style=\'float:left\'>'+SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE')+'</div>', CLOSETEXT, '<div style=\'float: right\'><img border=0 style=\'margin-left:2px; margin-right: 2px;\' src={sugar_getimagepath file='close.gif'}></div>',CLOSETITLE, SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_CLOSE_TOOLTIP'), CLOSECLICK,FGCLASS, 'olFgClass', CGCLASS, 'olCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olCapFontClass');" class="help-search"></td>
	</tr>
</table>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_modified_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_basic","modified_user_id_basic"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['search_form_created_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['search_form_assigned_user_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['search_form_ant_clienteregionais_name_basic']={"form":"search_form","method":"query","modules":["ant_cliente"],"group":"or","field_list":["name","id"],"populate_list":["ant_clienteregionais_name_basic","ant_client71d2cliente_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['search_form_ant_pedido_regionais_name_basic']={"form":"search_form","method":"query","modules":["ant_pedido"],"group":"or","field_list":["name","id"],"populate_list":["ant_pedido_regionais_name_basic","ant_pedido17ef_pedido_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['search_form_ant_pedido_gionais_1_name_basic']={"form":"search_form","method":"query","modules":["ant_pedido"],"group":"or","field_list":["name","id"],"populate_list":["ant_pedido_gionais_1_name_basic","ant_pedido4dba_pedido_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['search_form_ant_estoqueregionais_name_basic']={"form":"search_form","method":"query","modules":["ant_estoque_geral"],"group":"or","field_list":["name","id"],"populate_list":["ant_estoqueregionais_name_basic","ant_estoqu7abae_geral_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['search_form_ant_inutiliregionais_name_basic']={"form":"search_form","method":"query","modules":["ant_inutilizado"],"group":"or","field_list":["name","id"],"populate_list":["ant_inutiliregionais_name_basic","ant_inutil66e6ilizado_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};</script>{/literal}