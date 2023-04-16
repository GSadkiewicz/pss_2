{extends file="main.tpl"}
{block name=content}

    <div class="produkty">
        {foreach $items as $item}
        
            <a class="item_tile" href="{$conf->app_root}/produkt/{$item["Item_id"]}">
                <img src="{$conf->app_root}/assets/{$item['Name']}.jpg">
                <div>{$item["Name"]}</div>  
            </a>
        {/foreach}    
    </div>

        <div class="paginacja">
            <p>Strona {$strona} z {$liczba_stron}</p>
            <div class="paginacja_przyciski">
            {if $strona > 1}
                <a href="{$conf->app_root}/produkty/{$category_id}?strona={$poprzednia_strona}">&#60;Poprzednia strona</a>
            {/if}
            {if $strona < $liczba_stron}
                <a href="{$conf->app_root}/produkty/{$category_id}?strona={$nastepna_strona}">Nastepna strona &#62;</a>
            {/if}
            </div>
        </div>
    </div>

{/block}