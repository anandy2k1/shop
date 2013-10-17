<div id="mainNavigation">
	<ul>
        <li class="{if $sCategoryCurrent eq $sCategoryStart} active{/if}">
            <a href="{url controller='index'}" title="{s name='IndexLinkHome'}{/s}" class="first{if $sCategoryCurrent eq $sCategoryStart} active{/if}">
                {se name='IndexLinkHome'}Home{/se}
            </a>
        </li>
        <li class=" dropactive">
            <a title="Product" href="#">
                <span>Product</span>
            </a>
            <ul class="dropdown droplevel0">
                {foreach from=$sMainCategories item=sCategory}
                    {if !$sCategory.hidetop}
                        <li {if $sCategory.flag} class="active"{/if}>
                            <a href="{$sCategory.link}" title="{$sCategory.description}" {if $sCategory.flag} class="active"{/if}>
                                <span>{$sCategory.description}</span>
                            </a>
                        </li>
                    {/if}
                {/foreach}
            </ul>
        </li>


	</ul>
</div>