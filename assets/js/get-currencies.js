// GET CURRENCIES
    
getCurrencies ()

    async function getCurrencies () {
        const responce = await fetch("https://www.cbr-xml-daily.ru/daily_json.js");
        const data = await responce.json();
        const result = await data;

        const rates = {};
        
        rates.EUR = result.Valute.EUR.Value;
        rates.USD = result.Valute.USD.Value;
        rates.UAH = result.Valute.UAH.Value;
        // Currency ratios

        coefEur = (rates.EUR / rates.USD).toFixed(2);
        coefUsd = (rates.USD / rates.USD).toFixed(2);
        coefUah = (rates.UAH / rates.USD).toFixed(2);

        const exchangeDol = document.getElementById('exchangeDol');
        const exchangeEur = document.getElementById('exchangeEur');
        const exchangeHrn = document.getElementById('exchangeHrn');
        const exchangeDol2 = document.getElementById('exchangeDol2');
        const exchangeEur2 = document.getElementById('exchangeEur2');
        const exchangeHrn2 = document.getElementById('exchangeHrn2');
         
      exchangeEur.innerHTML = (Math.round((exchangeDol.innerHTML) / coefEur));
      exchangeHrn.innerHTML = (Math.round((exchangeDol.innerHTML) * rates.UAH));

      exchangeEur2.innerHTML = (Math.round((exchangeDol2.innerHTML) / coefEur));
      exchangeHrn2.innerHTML = (Math.round((exchangeDol2.innerHTML) * rates.UAH));

  };  