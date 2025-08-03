<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $pageDescription ?? 'Portfolio Web Developer Diego Navarro' ?>">
    <meta name="author" content="Navarro Diego">
    <meta name="robots" content="index, follow">
    <link rel="icon" type="image/png" href="/images/Diego.png" />
    <title><?= $pageTitle ?? 'Navarro Diego | Web Developer / Web designer / Video & Photo editing' ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/style.min.css">
    <script src="/js/script.js" defer></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C2L54WTLBB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-C2L54WTLBB');
    </script>

    <!-- Hotjar Tracking Code -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:3809837,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <script>
        window.axeptioSettings = {
          clientId: "688f39d4c155bf31f8ac8bfd",
          cookiesVersion: "portfolio-en-EU",
          googleConsentMode: {
            default: {
              analytics_storage: "denied",
              ad_storage: "denied",
              ad_user_data: "denied",
              ad_personalization: "denied",
              wait_for_update: 500
            }
          }
        };
         
        (function(d, s) {
          var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
          e.async = true; e.src = "//static.axept.io/sdk.js";
          t.parentNode.insertBefore(e, t);
        })(document, "script");
    </script>
    
    <?php if (!empty($activePage) && $activePage === 'contact'): ?>
        <script src="https://www.google.com/recaptcha/api.js?render=6Lf15mErAAAAAO_PiWlhQRinkuXxWOvZRq3oOy_7" async defer></script>
    <?php endif; ?>
</head>
<body>
