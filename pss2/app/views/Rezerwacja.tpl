{extends file="main.tpl"}
{block name=content}

    <h1>Formularz rezerwacji</h1>
    <form action="{$conf->app_root}/rezerwacja/rezerwuj" method="post" id="reservationForm" onsubmit="return validate()">
        <div>
            <input type="hidden" id="Item_id" name="Item_id" value="{$item["Item_id"]}"/>
            <input type="hidden" id="Item_name" name="Item_name" value="{$item["Name"]}"/>
            <input type="hidden" id="Item_price" name="Item_price" value="{$item["Price"]}"/>
            <h2>{$item["Name"]}</h2>
        </div>
        <div id="selectTime">
            <label for="collectDate">Data odbioru:</label>
            <input type="date" id="collectDate" name="collectDate"/>

            <label for="returnDate">Data zwrotu:</label>
            <input type="date" id="returnDate" name="returnDate"/>

            <input type="button" id="findButton" value="Szukaj" />
        </div>
        <div id="Data">
            <h3>Cena za <span id="days"></span> dni <span id="totalPrice"></span>zł</h3>
            <label for="name">imię:</label>
            <input type="text" id="name" name="name"/>

            <label for="surname">nazwisko:</label>
            <input type="text" id="surname" name="surname"/>

            <label for="phone">Telefon:</label>
            <input type="number" id="phone" name="phone"/>

            <input type="button" id="backButton" value="Wstecz" />
            <input type="submit" value="Zarezerwuj" />
        </div>
    </form>

    <script src="{$conf->app_root}/js/reservation.js"></script>

{/block}