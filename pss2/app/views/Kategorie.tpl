{extends file="main.tpl"}
{block name=content}

    <div class="kategorie">
        {foreach $items as $item}
        
            <a class="catalog_tile" href="{$conf->app_root}/produkty/{$item["type_id"]}">
                <div>{$item["type_name"]}</div>
            </a>
        {/foreach}
    </div>
    
{/block}