importScripts('/assets/js/request.js');

self.onmessage = function (ev) {

    req = JSON.parse(ev.data);
    request( req.files[0] , JSON.stringify(req) , "GET" ,  function (resp) {

        self.data0 = ['{"KRW" : 1128.4999561134, "GBP" : 0.773922584 , "CAD" : 1.3081716844, "EUR": 0.8777319407, "CNY": 6.9381198982, "JPY": 112.8061090143, "SGD": 1.37812692, "AUD": 1.3918195383, "INR": 73.4486087949}'];
        self.data0 = JSON.parse( resp /*self.data*/);
        request(req.files[1] , JSON.stringify(req) , "GET" , function (resp) {

            self.data1 = JSON.parse(resp);

            postMessage([self.data0 , self.data1]);  /*resp*/
        });

    });

/*
    setInterval(function () {


        req = JSON.parse(ev.data);
        request( req.file , JSON.stringify(req) , "GET" ,  function (resp) {

            postMessage(resp);
        });


    } , 10000*60);
*/
}




