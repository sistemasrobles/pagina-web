<!DOCTYPE html>
<html class="no-js" lang="es-ES">

<head>
  <base href="{{ url()->full() }}" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicons -->
  <!-- seo -->
  {!! SEO::generate(true) !!}
  <!-- /seo -->
  <link rel="shortcut icon" href="/img/icons/ico.ico">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/nimbus-sans-l" type="text/css" />
 


<meta name="facebook-domain-verification" content="bwgiysma0oyiv4brb0k8tvs82pq6ik" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('nuevaweb_assets/assets/css/main.css?v=114')}}">
  <link rel="stylesheet" href="{{asset('nuevaweb_assets/assets/css/font.css')}}">

 <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
  <!-- Theme CSS -->
  <script src="https://kit.fontawesome.com/88c0a098dd.js" crossorigin="anonymous"></script>


  

  @yield('css')
 




<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-53CVV4S');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53CVV4S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->




<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-250386817-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-250386817-1');
</script>







<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '841134490271081');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=841134490271081&ev=PageView&noscript=1"
  /></noscript>





  <!-- End Meta Pixel Code -->



<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3339562,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
  


<!--  Pixel TIKTOK -->

<script>
!function (w, d, t) {
  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};

  ttq.load('CHN6BTJC77U8RIVSUTQ0');
  ttq.page();
}(window, document, 'ttq');
</script>


<script> (function(w,d,t,r,u) { var f,n,i; w[u]=w[u]||[],f=function() { var o={ti:"187138852", enableAutoSpaTracking: true}; o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad") }, n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function() { var s=this.readyState; s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null) }, i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i) }) (window,document,"script","//bat.bing.com/bat.js","uetq"); </script>



<script> window.uetq = window.uetq || []; window.uetq.push('event', 'submit_lead_form', {}); </script>


</head>

@include('master.header')

<body>

@inject('telefono_footer', 'App\Http\Controllers\PoryectoController')





@yield('content')




@include('master.social')
@include('master.footer')




 <!-- Libs JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <script src="{{asset('nuevaweb_assets/js/modalHeaderEffect.js')}}"></script>
  
  <script src="{{asset('nuevaweb_assets/js/hamburger.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
<script src="{{ asset('sweetalert2/sweetalert2.all.min.js') }}"></script>

@yield('js')

</body>

</html>
