function Main() {


    var parent = this;

    this.defaults = new Defaults();
    var oneDollarToIndex = 8.333;
    var oneIndexToDollar = 0;
    var oneIndexToNaira = 42;
    const oneDollarToNaira = 350;
    const rateConstant = Math.PI * 800;
    this.availableAssets = $('.avail-assets');
    this.soldAssets = $('.sold-assets');
    this.getYesterdaysDate = function getYesterdaysDate() {
        var date = new Date();
        date.setDate(date.getDate()-1);
        return date.getFullYear() + '-' + (date.getMonth()+1) + '-' + date.getDate() ;
    };

    this.currenciesInfo = {};


    
    
    this.currencySelectList = $('#currency-select-list');


   this.convertToAsset = $('#convert-to-asset');
   this.convertToCurrency = $('#convert-to-currency');
   
   this.averageExchangeRatesFromDollarToday = 0;

   this.updateSetup = function updateSetup(callback) {

       var updateMessageWorker = new Worker(parent.defaults.workersFolder + 'updateSetup.js');
       var data = {"file" : parent.defaults.files.sendUpdatesFile , "method" : "POST" , "data" : "on"};
       updateMessageWorker.postMessage(JSON.stringify(data));



       updateMessageWorker.onmessage = function (ev) {

           console.log(ev.data);
           /*
           returns something like :
           {"success":"1","error":{"id":"1","available_assets":"187783.988","total_assets":"16000000","sold_assets":"0","fake_sold_assets":"196576.6","rate_constant":"6","maximum_value_ever":"45","minimum_value_ever":"42","number_of_users":"5"},"availableAssets":"187,784.988","soldAssets":"0.0","fakeSoldAssets":"196,577.6"} main.js:36:12
{"success":"1","error":
            */

           data = JSON.parse(ev.data);
           parent.availableAssets.text(data.available_assets);
           parent.soldAssets.text((data.error.fake_sold_assets != 0)?data.fakeSoldAssets:data.soldAssets);

           callback(data);
       }
   }





   function convertToAsset() {
       
   }

   this.convertToAsset.on('keyup' , function () {

       var selectedCurrency = parent.currencySelectList.find(':selected').text();
       $(this).val(Math.abs($(this).val()));
       parent.convertToCurrency.val(parent.currenciesInfo[selectedCurrency]['currencyToAsset'] * $(this).val());


   });
   
   

   this.convertToCurrency.on('keyup' , function () {
       var selectedCurrency = parent.currencySelectList.find(':selected').text();
       $(this).val(Math.abs($(this).val()));
       parent.convertToAsset.val(parent.currenciesInfo[selectedCurrency]['assetToCurrency'] * $(this).val());
   });
    var yesterDaysExchangeRateFile = "https://api.exchangeratesapi.io/" +this.getYesterdaysDate()+"?base=USD&symbols=GBP,EUR,CAD,CNY,INR,JPY,KRW,AUD,SGD,KRW";

    this.calculateExchangeRate = function (oneDollarToCurrency) {

        var ratio = (oneDollarToCurrency / oneDollarToIndex);
        return ratio.toFixed(4);
    };

    this.invertNumber = function (number , precision = 4) {

        return Math.pow(number , -1).toFixed(precision);

    };


    this.getExchangeRate = function (data) {
        var totalExchangeRateYesterday =0;
        var totalExchangeRateToday = 0;
        var exchangeRateCalculated = 0 , currencyToAsset;
        var getExchangeRatesWorker = new Worker(parent.defaults.workersFolder + 'updateExchangeRates.js');
        getExchangeRatesWorker.postMessage(JSON.stringify({'files' : [yesterDaysExchangeRateFile , parent.defaults.files.exchangeRatesSource]}));
        getExchangeRatesWorker.onmessage = function (ev) {
            var exchangeRatesYesterday = ev.data[0].rates;
            var exchangeRatesToday = ev.data[1].rates;

            var averageExchangeRatesFromDollarToday = 0;

            $('.currency-text.'+ parent.defaults.baseCurrency).text(oneIndexToDollar);




            var exchangeRatesTodayKeys = Object.keys(exchangeRatesToday);
                   for(exchangeRateToday of exchangeRatesTodayKeys){

                exchangeRateCalculated = parent.calculateExchangeRate(exchangeRatesToday[exchangeRateToday]);

                averageExchangeRatesFromDollarToday += Number(exchangeRateCalculated);
            }



            averageExchangeRatesFromDollarToday = (averageExchangeRatesFromDollarToday / exchangeRatesTodayKeys.length);

            oneDollarToIndex =  (data.error.sold_assets * data.error.number_of_users * rateConstant) / (averageExchangeRatesFromDollarToday * data.error.available_assets);
            oneIndexToDollar =   parent.invertNumber(oneDollarToIndex);

        //    console.log(oneIndexToDollar);

            for(var exchangeRateToday in exchangeRatesToday)
        {
            exchangeRateCalculated = parent.calculateExchangeRate(exchangeRatesToday[exchangeRateToday]);
            $('.currency-text.' + exchangeRateToday).text(exchangeRateCalculated);
            $('.fa.' + exchangeRateToday).removeClass('fa-caret-up fa-caret-down currency-warning-arrow-up currency-warning-arrow-down');

             currencyToAsset = Math.pow(exchangeRateCalculated , -1);
             currencyToAsset = currencyToAsset.toFixed(4);
             parent.currenciesInfo[exchangeRateToday] = {'assetToCurrency' : exchangeRateCalculated , 'currencyToAsset' : currencyToAsset};

            if(exchangeRatesToday[exchangeRateToday] <= exchangeRatesYesterday[exchangeRateToday]){

                $('.fa.' + exchangeRateToday).addClass('fa-caret-up currency-warning-arrow-up');
            }

            else {
                $('.fa.' + exchangeRateToday).addClass('fa-caret-down currency-warning-arrow-down');
            }
            totalExchangeRateToday += exchangeRatesToday[exchangeRateToday];
            totalExchangeRateYesterday += exchangeRatesYesterday[exchangeRateToday];


        }



        
        

        currencyToAsset = Math.pow(oneIndexToNaira , -1);
        currencyToAsset = currencyToAsset.toFixed(4);

        parent.currenciesInfo[parent.defaults.localCurrency] = {'assetToCurrency' : oneIndexToNaira , 'currencyToAsset' : currencyToAsset};

            currencyToAsset = Math.pow(oneIndexToDollar , -1);
            currencyToAsset = currencyToAsset.toFixed(4);

            parent.currenciesInfo[parent.defaults.baseCurrency] = {'assetToCurrency' : oneIndexToDollar , 'currencyToAsset' : currencyToAsset};


            $('.fa.' + parent.defaults.baseCurrency).removeClass('fa-caret-up fa-caret-down currency-warning-arrow-up currency-warning-arrow-down');

            if(totalExchangeRateYesterday > totalExchangeRateToday){
            $('.fa.' + parent.defaults.baseCurrency).addClass('fa-caret-up currency-warning-arrow-up');
        }
        else {
                $('.fa.' + parent.defaults.baseCurrency).addClass('fa-caret-down currency-warning-arrow-down');
            }

            $('.currency-text.'+parent.defaults.localCurrency).text(parent.calculateExchangeRate(oneDollarToNaira));
            $('.currency-text.'+parent.defaults.localCurrency).addClass('yellow-text');


          }

    };



}


$(document).ready(function () {

    var main = new Main();

   main.updateSetup(function (data) {


       main.getExchangeRate(data);
   });
});