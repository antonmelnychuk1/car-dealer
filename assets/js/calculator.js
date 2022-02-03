/* ===== Define global variables and setup DEFAULT values ================================================ */
// Variable for values collected from HTML 
let gasoline        = Number(50);
let diesel          = Number(75);
let year            = Number(1)     // 2021 --> 1;
let age             = Number(1);                         
let currentYear     = new Date().getFullYear();
let capacity            = Number(0);
let customsValue    = Number(0);
let reserveMoney    = Number(280);
// Variables for calculation
let excizeTax       = 0 // Акцизний податок 
let toll            = 0 // Мито 
let vat             = 0 // ПДВ
/* ======================================================================================================= */


// /* Name:            AlertHtmlValues()
//  * Description:     The purpose of this function is display on webpage some information
//                     for Debugging purpoces. Here may be added any another variables.
//  * Input:           No input
//  * Output:          No output (Alert on webpage)
//  */ 
// function AlertHtmlValues()
// {
//     window.alert(`Engine type(gasoline) : ${gasoline}  \n
//                   Engine type(diesel)   : ${diesel}    \n 
//                   Year               : ${year}         \n
//                   Age                : ${age}          \n
//                   CurrentYear        : ${currentYear}  \n
//                   Engine Capacity    : ${capacity}     \n
//                   CustonValue???     : ${customsValue} \n
//     `);
// }


/* Name:            collectVariableValues()
 * Description:     Is used to collect values from html document when fucntion is executed.
 */
function collectVariableValues()
{
    gasoline        = document.getElementById('gasoline').value;
    diesel          = document.getElementById('diesel').value;
    year            = document.getElementById('year').value;
    age             = document.getElementById('age').value;
    currentYear     = new Date().getFullYear();
    capacity            = document.getElementById('capacity').value;
    customsValue    = document.getElementById('customsValue').value;

    rateValue();
}


/* Name:        culculate_Tax_Toll_Vat()
 * Description: Is used to calculates Tax, Toll and Vat based on Engine capacity(size),
 *              year of vehicle production(year) and (customValue)
 */
function calculate_Tax_Toll_Vat(capacity, year, customsValue)
{
    excizeTax   = Number(capacity / 1000) * Number(year)                // * Number(gasoline + diesel) Акцизний податок 
    toll        = Number(customsValue * 0.1)                        // Мито 
    vat         = (Number(customsValue) + excizeTax + toll) * 0.2   // ПДВ

    // window.alert(`customsValue: ${customsValue} , excizeTax: ${excizeTax}, toll: ${toll}, vat: ${vat}`);

    return {"excizeTax": excizeTax, "toll": toll, "vat": vat}
}

/* Name:        rateValue()
 */
function rateValue() {
    gas = document.getElementById('gasoline');
    dis = document.getElementById('diesel');

    if (gas.checked) {
        if (capacity < 3000) { gasoline = 50; }
        else if (capacity => 3000) { gasoline = 100; }
    }
    else if (dis.checked) {
        if (capacity < 3500) { diesel = 75; }
        else if (capacity => 3500) { diesel = 100; }
    }
}

/* ===== Event Listeners ================================================================================= */

// This listener going to be executed only if 'calculate-button' is clicked!
document.getElementById('calculate-button').addEventListener('click', () => {

    // Collect values for variables at time when happend 'click' Event for button with ID 'calculate-button'
    collectVariableValues();

    // Culculate Tax, Toll & Vat and return dictionary with results
    output = calculate_Tax_Toll_Vat(capacity, year, customsValue);

    excizeTax   = output['excizeTax'];
    toll        = output['toll'];
    vat         = output['vat'];

    let radio = document.querySelectorAll('.form-check-input');
    for (let i = 0; i < radio.length; i++) {
        if (radio[i].checked) {
            fuel = radio[i].value;
            break;
        }
    }
 
    // window.alert(`Fuel: ${gasoline + diesel},  excizeTax: ${excizeTax}, toll: ${toll}, vat: ${Math.floor(vat)}, reserveMoney: ${reserveMoney}, gas: ${gasoline}, dis: ${diesel}`);

    // Total result

    let total = document.getElementById('result').innerHTML

    // Exchange rate 

    function exchangeRateNBU(el, cc){
        el=document.querySelector(el);
        if(el==null){el=document.createElement('div');
        document.body.appendChild(el);};
            if(cc==undefined)cc=['USD','EUR'];
        let ajax=new XMLHttpRequest();
        ajax.open('GET', 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');
        ajax.responseType='json';
        ajax.onload=function(){
            let s='';
            for(let i=0; i<this.response.length;i++)
            for(let j=0;j<cc.length;j++){
            if(this.response[i].cc==cc[j])
            s+='<div><b title="'+this.response[i].txt+'">'+this.response[i].cc+'</b> : '+this.response[i].rate.toFixed(2)+'</div>';
            }
            el.innerHTML=s;
        }
        ajax.send(null);
    }
    
    exchangeRateNBU('#result-valute',['USD','EUR']);


    // fetch("https://www.cbr-xml-daily.ru/daily_json.js").then(function(result) {
    //     return  result.json()
    // }).then(function (data) {
    //     console.log(data);
    // })


    getCurrencies ()

    async function getCurrencies () {
        const responce = await fetch("https://www.cbr-xml-daily.ru/daily_json.js");
        const data = await responce.json();
        const result = await data;

        const rates = {};
        
        rates.EUR = result.Valute.EUR.Value;
        rates.USD = result.Valute.USD.Value;
        rates.PLN = result.Valute.PLN.Value;
        rates.CHF = result.Valute.CHF.Value;
        rates.UAH = result.Valute.UAH.Value;
        // Currency ratios

        coefEur = (rates.EUR / rates.USD).toFixed(2);
        coefUsd = (rates.USD / rates.USD).toFixed(2);
        coefPln = (rates.PLN / rates.USD).toFixed(2);
        coefChf = (rates.CHF / rates.USD).toFixed(2);
        coefUah = (rates.UAH / rates.USD).toFixed(2);
        

        exchangeRate()

        

    function exchangeRate() {
            
        let select = document.getElementById('currency');
        let value = select.options[select.selectedIndex].value;
        let taxValute = document.getElementById('tax-price-valute');
            
            if (value == 'EUR') {
                toll = Number((customsValue * coefEur) * 0.1);                      
                vat  = (Number(customsValue * coefEur) + ((excizeTax * (gasoline + diesel)) * coefEur) + toll) * 0.2;   
                total = Math.round(String((Number(Math.round((gasoline + diesel) * coefEur) * excizeTax)) + Math.round(toll) + Math.round(vat) + reserveMoney));
                taxValute.innerHTML = String(' EUR');   
            }
            else if (value == 'USD') {
                toll = Number((customsValue * coefUsd) * 0.1);                       
                vat  = (Number(customsValue * coefUsd) + ((excizeTax * (gasoline + diesel)) * coefPln) + toll) * 0.2;   
                total = Math.round(String((Number(Math.round(gasoline + diesel)) * excizeTax) + Math.round(toll) + Math.round(vat) + reserveMoney));
                taxValute.innerHTML = String(' USD');
            }
            else if (value == 'PLN') {
                toll = Number((customsValue * coefPln) * 0.1);                       
                vat  = (Number(customsValue * coefPln) + ((excizeTax * (gasoline + diesel)) * coefPln) + toll) * 0.2;   
                total = Math.round(String((Number(Math.round(gasoline + diesel)) * excizeTax) + Math.round(toll) + Math.round(vat) + reserveMoney));
                taxValute.innerHTML = String(' PLN');
            }
            else if (value == 'CHF') {
                toll = Number((customsValue * coefChf) * 0.1);                       
                vat  = (Number(customsValue * coefChf) + ((excizeTax * (gasoline + diesel)) * coefChf) + toll) * 0.2;   
                total = Math.round(String((Number(Math.round(gasoline + diesel)) * excizeTax) + Math.round(toll) + Math.round(vat) + reserveMoney));
                taxValute.innerHTML = String(' CHF');
            }

            if (isNaN(total)) return;
            if (total <=0) return;
            document.getElementById('result').innerHTML = total;
            // console.log(value, total, coefEur, coefUsd, coefPln, coefChf, Math.round(toll), Math.round(vat), (gasoline + diesel));
    }

    /////////////////////////////////////////////////////////////////////////////////////////

        // Click button "Details"
        

        // const yearsOld = document.getElementById('years-old').innerHTML = Number(year);

        const excizePrice = document.getElementById('excise-price').innerHTML = Number(gasoline + diesel) * Math.round(excizeTax);

        const taxVat = document.getElementById('tax-vat').innerHTML = Math.round(Number(vat));

        const taxSum = document.getElementById('tax-sum').innerHTML = Number(total);

        const tax= document.getElementById('tax').innerHTML = Number(toll);

        const taxPrice = document.getElementById('tax-price').innerHTML = Number(customsValue);

        const taxRate = document.getElementById('tax-rate').innerHTML = Number(gasoline + diesel);

    ////////////////////////////////////////////////////////////////////////////////////////////   
    }
});






