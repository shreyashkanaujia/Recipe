<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <title>Cakes &amp; Beverages</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            if (/mobile/i.test(navigator.userAgent)) document.documentElement.className += ' w-mobile';
        </script>
        <style>
            .leftnavbar{
                height: 100%;
                width: 20%;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #2e2e2e;
                padding-top: 20px;
                
            }
            
            .leftnavbar a{
                padding: 20px 8px 20px 16px;
                text-decoration: none;
                font-size: 25px;
                color: white;
                display: block;
            }
            
            .leftnavbar a:hover {
                background-color: #2d9ad2;
            }
        </style>
    </head>
    
    <body>
        <div class="servicesdiv">
            <?php require_once("helper.php"); ?>
            <?php render("leftnavbar",array('ck'=>'1')); ?>
            
            <div class="w-container service-columns" style="float:left;margin-left:20%">
                <div class="w-row">
                    <div class="w-col w-col-4 services">
                        <h3>Paneer do pyaza recipe.</h3>
                        <div class="blueborder"></div>
                        <p>Paneer do pyaza is a dish named after Akbar Mullah do Pyaza during the mughal era. Though the original version was made with meat, vegetarians prefer their meat as paneer</p>
                    </div>
                    <div class="w-col w-col-4 services">
                        <h3>MASALA KHICHDI</h3>
                        <div class="blueborder"></div>
                        <p>Paneer do pyaza is a dish named after Akbar Mullah do Pyaza during the mughal era. Though the original version was made with meat, vegetarians prefer their meat as paneer</p>
                    </div>
                    <div class="w-col w-col-4 services">
                        <h3>MASALA KHICHDI</h3>
                        <div class="blueborder"></div>
                        <p>Paneer do pyaza is a dish named after Akbar Mullah do Pyaza during the mughal era. Though the original version was made with meat, vegetarians prefer their meat as paneer</p>
                    </div>
                </div>
                <div class="w-row" style="padding-top: 50px;">
                    <div class="w-col w-col-4 services">
                        <h3>Paneer do pyaza recipe.</h3>
                        <div class="blueborder"></div>
                        <p>Paneer do pyaza is a dish named after Akbar Mullah do Pyaza during the mughal era. Though the original version was made with meat, vegetarians prefer their meat as paneer</p>
                    </div>
                    <div class="w-col w-col-4 services">
                        <h3>MASALA KHICHDI</h3>
                        <div class="blueborder"></div>
                        <p>Paneer do pyaza is a dish named after Akbar Mullah do Pyaza during the mughal era. Though the original version was made with meat, vegetarians prefer their meat as paneer</p>
                    </div>
                    <div class="w-col w-col-4 services">
                        <h3>MASALA KHICHDI</h3>
                        <div class="blueborder"></div>
                        <p>Paneer do pyaza is a dish named after Akbar Mullah do Pyaza during the mughal era. Though the original version was made with meat, vegetarians prefer their meat as paneer</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>