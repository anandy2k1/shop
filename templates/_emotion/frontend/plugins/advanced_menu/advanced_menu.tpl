{function name=categories_top level=0}
    <ul class="{if !$level}dropdown{else}droplevel{/if} droplevel{$level}">
        {foreach from=$categories item=category}
            <li class="{if !empty($category.flag)}active{/if}{if $category.sub} sub{/if}">
                <a href="{$category.link}" class="{if !empty($category.flag)} active{/if}">{$category.name}</a>
                {if $category.sub}
                    {call name=categories_top categories=$category.sub level=$level+1}
                {/if}
            </li>
        {/foreach}
    </ul>
{/function}

<div id="mainNavigation">
    <ul>
        <li class="{if $sCategoryCurrent eq $sCategoryStart} active{/if}">
            <a href="{url controller='index'}" title="{s name='IndexLinkHome'}{/s}" class="first{if $sCategoryCurrent eq $sCategoryStart} active{/if}">
                {se name='IndexLinkHome'}Home{/se}
            </a>
        </li>
        <li class=" dropactive">
            <a title="Product" href="#">
                <span>Produkte</span>
            </a>
            <ul class="dropdown droplevel0">
                {foreach from=$sAdvancedMenu item=sCategory}
                    {if !$sCategory.hidetop}
                        <li class="{if !empty($sCategory.flag)}active{/if}{if $sCategory.sub} dropactive{/if}">

                            <a href="{$sCategory.link}" title="{$sCategory.description}" {if !empty($sCategory.flag)} class="active"{/if}>
                                <span>{$sCategory.description}</span>
                            </a>

                            {*{if $sCategory.sub}
                                {call name=categories_top categories=$sCategory.sub}
                            {/if}*}
                        </li>
                    {/if}
                {/foreach}
            </ul>
        </li>
        <li>
            <a href="{url}ueber-uns"><span>Über Uns</span></a>
        </li>
        <li>
            <a href="{url}bio-baumwolle"><span>Bio Baumwolle</span></a>
        </li>
        <li>
            <a href="{url}blog"><span>Blog</span></a>
        </li>
    </ul>


    {block name='frontend_index_search'}
        {include file="frontend/index/search.tpl"}
    {/block}

</div>