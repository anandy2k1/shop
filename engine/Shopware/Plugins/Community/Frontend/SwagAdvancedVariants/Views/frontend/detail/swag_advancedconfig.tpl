{extends $extendTemplate}

{block name="frontend_index_header_javascript_jquery" append}
    <script type="text/javascript" src="{link file='frontend/_resources/javascript/jquery.swag_advanced_variants.js'}"></script>
{/block}

{block name="frontend_index_header_css_screen" append}
<link rel="stylesheet" href="{link file='frontend/_resources/styles/swag_advancedvariants.css'}" />
<style type="text/css">
    .variant_container .active {
        border: 1px solid {$swagVariant.activeColor};
        -webkit-box-shadow: 0 0 2px {$swagVariant.activeColor};
        -moz-box-shadow: 0 0 2px {$swagVariant.activeColor};
        box-shadow: 0 0 2px {$swagVariant.activeColor};
    }

    .config-value.variant_box.changeColor {
        border-color: {$swagVariant.hoverColor}
    }

    .configurator-form { float: left }
</style>
{/block}

{block name='frontend_detail_index_configurator'}
    {if $sArticle.sConfigurator}
        {if $sArticle.sConfiguratorSettings.type eq 1}
            {include file="frontend/detail/swag_advancedconfig_step.tpl"}
        {elseif $sArticle.sConfiguratorSettings.type != 2}
            {include file="frontend/detail/config_upprice.tpl"}
        {/if}
    {/if}
{/block}