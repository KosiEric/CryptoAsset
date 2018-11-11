importScripts('/assets/js/request.js');

self.onmessage = function (ev) {

    req = JSON.parse(ev.data);

    request( req.file , ev.data , req.method ,  function (resp) {

        postMessage(resp);
    });

    self.interval = setInterval(function () {
        request( req.file , ev.data , req.method ,  function (resp) {

            postMessage(resp);
        });
    } , 1 *500 * 60 /* 5 minutes */);
};