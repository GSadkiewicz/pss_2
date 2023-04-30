<div class = "produkty">
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
                <input type="button"  value="Poprzednia strona" onclick="ajax('{$conf->action_root}produkty_lista', {$category_id}, {$poprzednia_strona}); return false;"/>

            {/if}
            {if $strona < $liczba_stron}
                <input type="button" value="Nastepna strona" onclick="ajax('{$conf->action_root}produkty_lista', {$category_id}, {$nastepna_strona}); return false;"/>

            {/if}
            </div>
        </div>
    </div>
    
