<h3 class="headingbox_dark">{s name="SwagChooseVariantHeader"}Bitte wählen Sie ihre Variante{/s}</h3>
<div class="variant_container">
	<form method="post" action="{url sArticle=$sArticle.articleID sCategory=$sArticle.categoryID}" class="config_select">
		{foreach from=$configGroups item=sConfigurator name=group key=groupID}
		<div class="config-group">

			<input type="hidden" id="group-{$sConfigurator.groupID}" name="group[{$sConfigurator.groupID}]" value="{if $sConfigurator.user_selected}{$sConfigurator.selected_value}{/if}" />

			{assign var="pregroupID" value=$groupID-1}

			{* Group name *}
			{block name='frontend_detail_group_name'}
				{if $groupID < 1 OR !empty($sArticle.sConfigurator[$pregroupID].user_selected)}
					<p>
						<strong>{$sConfigurator.groupname}</strong>
					</p>
				{/if}
			{/block}
			
			{* Group description *}
			{block name='frontend_detail_group_description'}
				{if $groupID < 1 OR !empty($sArticle.sConfigurator[$pregroupID].user_selected)}
					{if $sConfigurator.groupdescription}
						<p class="groupdescription">
							{$sConfigurator.groupdescription}
						</p>
					{/if}
				{/if}
			{/block}

			{* If the first selection isn't made, set the group to 'displaynone', so it won't be shown and if the group is the first group, set the class to 'image' to display the images correctly *}
			<div class="configurator-group-wrapper{if $groupID gt 0&&empty($sArticle.sConfigurator[$pregroupID].user_selected)} displaynone{/if}">
				{foreach from=$sConfigurator.values item=configValue name=option key=optionID}
					{* If the instockcheck is set to 1 and the instock itself is lower than 1, set a new class, so the background will change etc. *}
					{* If an article got selected, change it's class to 'active', so the background will change etc. *}
					<div class="config-value variant_box{if $swagVariant.checkInstock == 1 && $configValue.instock < 1} empty{/if}{if $sConfigurator.user_selected && $configValue.selected && $configValue} active{/if}{if $configValue.image} image{/if}" rel="{$configValue.optionID}">

						{* Set the images, if available, else set the optionname *}
						{if $configValue.image}
                            <div class="outer-image-wrapper">
							    <img src="{$configValue.image}" />
                            </div>
						{else}
							{$configValue.optionname}{if $configValue.upprice && !$configValue.reset} {if $configValue.upprice > 0}{/if}{/if}
						{/if}
					</div>
				{/foreach}
				<div class="clear"></div>
			</div>

			<div class="clear"></div>
		</div>
		{/foreach}
	</form>
</div>