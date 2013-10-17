{extends file='parent:frontend/detail/index.tpl'}

{* Breadcrumb *}
{block name='frontend_index_breadcrumb'}
    {include file='frontend/detail/navigation.tpl'}
{/block}

{* Sidebar left *}
{block name='frontend_index_content_left'}{/block}

{block name="frontend_detail_index_navigation"}{/block}


{block name='frontend_index_content'}
    <div id="detail" class="grid_16 first last">

{* General detailbox *}

    {*<div class="product-left">
        <span>Produkte</span>
    <div class="left-menu-product">
        <div class="grid_4 first" id="">
            <ul class="categories level0">


                {foreach from=$sAdvancedMenu item=sCategory}
                    {if !$sCategory.hidetop}
                        <li class="{if !empty($sCategory.flag)}sub active{/if}{if $sCategory.sub} dropactive{/if}">

                            <a href="{$sCategory.link}" title="{$sCategory.description}" {if !empty($sCategory.flag)} class="flag active"{/if}>
                                {$sCategory.description}
                            </a>

                            *}{*{if $sCategory.sub}
                                {call name=categories_top categories=$sCategory.sub}
                            {/if}*}{*
                        </li>
                    {/if}
                {/foreach}

            </ul>
        </div>



    </div>
    </div>*}
{* Maincategories left *}
    <div class="product-left">
        <span>Produkte</span>
        <div class="left-menu-product">

            {function name=categories level=0}
                <ul class="{if !$level}categories{else}submenu{/if} level{$level}">
                    {block name="frontend_index_categories_left_ul"}{/block}
                    {foreach from=$categories item=category}
                        <li {if $category.flag || $category.subcategories}class="{if $category.flag or $category.subcategories}active{if $category.subcategories} sub{/if}{/if}"{/if}>
                            <a href="{$category.link}" {if $category.flag || $category.subcategories}class="{if $category.flag or $category.subcategories}flag{if $category.subcategories} active{/if}{/if}"{/if}>
                                {$category.description}
                            </a>
                            {if $category.subcategories}
                                {call name=categories categories=$category.subcategories level=$level+1}
                            {/if}
                        </li>
                    {/foreach}
                </ul>
            {/function}

            {if $sCategories}
                {call name=categories categories=$sCategories}
            {elseif $sMainCategories}
                {call name=categories categories=$sMainCategories}
            {/if}
        </div>
    </div>
    <div class="product-right">
    <div id="detailbox"><!-- detailbox -->

    {* Previous article *}
    {*{block name='frontend_detail_article_back'}
        {if $sArticle.sNavigation.sPrevious}
            <div class="article_back">
                <a href="{$sArticle.sNavigation.sPrevious.link|rewrite:$sArticle.sNavigation.sPrevious.name}" title="{$sArticle.sNavigation.sPrevious.name}" class="article_back">{s name='DetailNavPrevious'}Zurück{/s}</a>
            </div>
        {/if}
    {/block}

     Next article
    {block name='frontend_detail_article_next'}
        {if $sArticle.sNavigation.sNext}
            <div class="article_next">
                <a href="{$sArticle.sNavigation.sNext.link|rewrite:$sArticle.sNavigation.sNext.name}" title="{$sArticle.sNavigation.sNext.name}" class="article_next">{s name='DetailNavNext'}Vor{/s}</a>
            </div>
        {/if}
    {/block}*}

    {* Detailbox left *}

    <div class="left">
        <div id="img" class="grid_6 first">
            <div class="wrapper">
                {* Images *}
                {include file="frontend/detail/image.tpl"}
            </div>
        </div>
    </div>

    <div class="right"><!-- Right -->
        {* Article name *}
        {block name='frontend_detail_index_name'}
            <h1 class="product-name">{$sArticle.articleName}</h1>
        {/block}

        {* Detailbox middle *}
        {*<div id="detailbox_middle" class="grid_4">

             Article comments - small overview
            {block name="frontend_detail_comments_overview"}
                {if !{config name=VoteDisable}}
                    <div class="detail_comments">
                        <span class="star star{$sArticle.sVoteAverange.averange}">Star Rating</span>
                        <span class="comment_numbers">(<a href="#write_comment" class="write_comment" rel="nofollow" title="{s name='DetailLinkReview'}{/s}">{$sArticle.sVoteAverange.count}</a>)</span>
                    </div>
                {/if}
            {/block}

             *}{*Additional links*}{*
					{block name="frontend_detail_index_actions"}
						{include file="frontend/detail/actions.tpl"}
					{/block}
				</div>*}



        {* Detailbox right *}

        {* Configurator table // div buybox *}
        {if $sArticle.sConfigurator && $sArticle.sConfiguratorSettings.type==2}
        <div class="grid_16 first last" id="buybox">{else}
            <div class="right" id="buybox">{/if}
                <div id="detail_more"></div>

                {* Article notification *}
                {block name="frontend_detail_index_notification"}
                    {if $sArticle.notification && ($sArticle.instock <= 0 || $sArticle.sVariants) && $ShowNotification}
                        {include file="frontend/plugins/notification/index.tpl"}
                    {/if}
                {/block}

                {block name='frontend_detail_actions_notepad'}
                    <div>
                        <div class="float-left">
                            <a class="add-wishlist" href="{url controller='note' action='add' ordernumber=$sArticle.ordernumber}" rel="nofollow" title="{s name='DetailLinkNotepad'}{/s}">
                                {*{se name="DetailLinkNotepad"}{/se}*}
                                Add to Wishlist
                            </a>

                        </div>
                        <div class="float-right fblike">
                            <script src="http://connect.facebook.net/en_US/all.js#appId=110235705750960&xfbml=1" type="text/javascript"></script>
                            <fb:like href="{url}" send="false" layout="button_count" show_faces="false"></fb:like>
                        </div>

                    </div>
                {/block}
                <div class="clear-both"></div>
                <Div class="short-description">
                    {*{$articleTitle|truncate:30:"---"}*}
                    {block name='frontend_detail_description_text'}
                        {$sArticle.description|replace:"<table":"<table id=\"zebra\""|truncate:300:"---"}
                    {/block}
                </Div>


                {* Article data *}
                {block name='frontend_detail_index_after_data'}{/block}
                {block name='frontend_detail_index_data'}
                    {include file="frontend/detail/data.tpl" sArticle=$sArticle sView=1}
                {/block}


                {* Configurator drop down menu *}
                {block name="frontend_detail_index_configurator"}
                    {if $sArticle.sConfigurator}
                        {if $sArticle.sConfiguratorSettings.type eq 1}
                            {include file="frontend/detail/config_step.tpl"}
                        {elseif $sArticle.sConfiguratorSettings.type != 2}
                            {include file="frontend/detail/config_upprice.tpl"}
                        {/if}
                    {/if}
                {/block}

                {* Supplier name *}
                {if $sArticle.supplierName}
                    {block name='frontend_detail_index_supplier'}
                        {*<p class="supplier">{se name="DetailFromNew"}Hersteller:{/se} {$sArticle.supplierName}</p>*}
                    {/block}
                {/if}


                {* Caching article details for future use *}
                {if $sArticle.sBundles || $sArticle.sRelatedArticles && $sArticle.crossbundlelook || $sArticle.sVariants}
                    <div id="{$sArticle.ordernumber}" class="displaynone">
                        {include file="frontend/detail/data.tpl" sArticle=$sArticle}
                    </div>
                {/if}

                {* Caching variant article details *}
                {if $sArticle.sVariants}

                    {foreach name=line from=$sArticle.sVariants item=sVariant}
                        <div id="{$sVariant.ordernumber}" class="displaynone">
                            {include file="frontend/detail/data.tpl" sArticle=$sVariant}
                        </div>
                    {/foreach}
                {/if}





                {* Include buy button and quantity box *}
                {block name="frontend_detail_index_buybox"}
                    {include file="frontend/detail/buy.tpl"}
                {/block}


            </div>
            <!-- //buybox -->

        </div>
        <!-- //Right -->

    </div>
    <!-- //detailbox -->


    <div class="clear">&nbsp;</div>

    {* Detailinfo *}
    {block name="frontend_detail_index_detail"}
        <div id="detailinfo">
            {* Bundle *}
            {block name="frontend_detail_index_bundle"}
                {include file='frontend/detail/bundle/include.tpl'}
            {/block}


            {block name="frontend_detail_index_tabs"}
            {* Tabs *}
                <div id="tabs">
                    {* Tabsnavigation *}
                    {include file="frontend/detail/tabs.tpl"}

                    <div class="inner_tabs">

                        {* Article description *}
                        {block name="frontend_detail_index_tabs_description"}
                            {include file="frontend/detail/description.tpl"}
                        {/block}


                        {* Article rating *}
                        {if !{config name=VoteDisable}}
                            {block name="frontend_detail_index_tabs_rating"}
                                {include file="frontend/detail/comment.tpl"}
                            {/block}
                        {/if}

                        {* Related articles *}
                        {block name="frontend_detail_index_tabs_related"}
                            {include file="frontend/detail/related.tpl"}
                        {/block}

                        {* Similar articles *}
                        {include file='frontend/detail/similar.tpl'}
                    </div>
                </div>
                {*<div class="detailinfo_shadow">&nbsp;</div>*}
            {* "Customers bought also" slider *}
                {block name="frontend_detail_index_also_bought_slider"}
                    {if {config name=alsoBoughtShow}}
                        {action module=widgets controller=recommendation action=bought articleId=$sArticle.articleID}
                    {/if}
                {/block}

            {* "Customers similar viewed slider *}
                {block name="frontend_detail_index_similar_viewed_slider"}
                    {if {config name=similarViewedShow}}
                        {action module=widgets controller=recommendation action=viewed articleId=$sArticle.articleID}
                    {/if}
                {/block}
                <div class="clear">&nbsp;</div>
            {/block}
        </div>
    {/block}
    </div>
    </div>
{/block}