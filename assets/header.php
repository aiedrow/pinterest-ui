
<!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
            <title>Pinterest</title><script src="assets/js/jquery.js"></script>
            <!--<link rel="stylesheet" href="assets/css/melt.css">-->
            <link rel="stylesheet" href="assets/view/vion/style.css?as=MzA0">
            <link rel="icon" type="image/png" href="assets/pin.png" />
            <link rel="stylesheet" href="assets/css/melticon.css"><link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alata&family=Ubuntu&family=Poppins&family=Playfair+Display&family=Bentham&display=swap">
            <style>*{font-family:Poppins;}body{background:#f9f9f9;overflow-x:hidden;}
                
                
                .gridItems{padding:21px 5vw;display:flex;flex-wrap: wrap;} .Item img{border-radius:21px;margin:0;padding:0;}
                a{color:#000!important;text-decoration:none!important;}
                
                 header{position:relative;top:0;left:0;right:0;background:#fff;padding:21px 5vw;border:0;border-bottom:1px solid #dbdbdb;} 
                 footer{position:fixed;bottom:0;left:0;right:0;background:#fff;padding:21px 5vw;border:0;border-bottom:1px solid #dbdbdb;} 
                .mx button{transform:scale(0.9);font-size:90%;font-weight:600;margin-right:18px;}.mx button i{margin-right:6px;} button{background:none;border:0;outline:none!important;}
                .searchX{padding:5px 0px;} .searchX input{padding:11px 21px;border:0;border-radius:11px;background:#dbdbdb;font-size:80%;outline:none;}
                
                @media(max-width: 780px){.mx button{text-align:right;}.mx{margin:0;justify-content: flex-end;}.searchX{margin-left: 15px;padding:10px 0px;}.gridItems .Item{max-width:85vw;} }
                @media(min-width: 780px){.gridItems .Item{max-width:17.2vw;transform:scale(0.95)} }
                
            </style>
        </head>
        
        <header class='d-lg-flex d-none'>
            <div class='col-lg-1 col-3'><img src='assets/pin.png' style='width:44px;margin:3px 0px;'></div>
            <div class='col-lg-3 col-9 row mx'><button><i class='mi-ic_fluent_sparkle_16_filled'></i>For you</button><button class='m-0'><i class='mi-ic_fluent_glance_20_filled'></i>Collections</button></div>
            <div class='col-lg-4 searchX'><input type='search' class='col-12' placeholder='Search for Ideas, Pins and Collections'></div>
            <div class='col-lg'></div>
            <div class='col-lg-3' style='display: flex;justify-content: space-around;'>
                <button title='Saved'><h3 class='mi-ic_fluent_star_12_filled'></h3></button>
                <button title='Notifications'><h3 class='mi-ic_fluent_alert_16_filled'></h3></button>
                <button title='Business'><h3 class='mi-ic_fluent_megaphone_loud_24_filled'></h3></button>
                <button title='Messages'><h3 class='mi-ic_fluent_chat_multiple_16_filled'></h3></button>
                <button title='Profile'><a href='https://www.aiedrow.co.in'><h3 class='mi-mif-user'></h3></button>
            </div>
        </header>
        
        
        <header class='d-lg-none d-flex'>
            <div class='col-lg-1 col-3'><img src='assets/pin.png' style='width:44px;margin:3px 0px;'></div>
            <div class='col-lg-3 col-9 row mx'><button><i class='mi-ic_fluent_sparkle_16_filled'></i>For you</button><button class='m-0'><i class='mi-ic_fluent_glance_20_filled'></i>Collections</button></div>
        </header>
        
        <footer class='d-lg-none d-flex' style='flex-wrap: wrap;'>
            <div class='col-12 m-0 searchX'><input type='search' class='col-12 m-0' placeholder='Search for Ideas, Pins and Collections'></div>
            <div class='col-12' style='display: flex;justify-content: space-around;'>
                <button title='Saved'><h3 class='mi-ic_fluent_star_12_filled'></h3></button>
                <button title='Notifications'><h3 class='mi-ic_fluent_alert_16_filled'></h3></button>
                <button title='Business'><h3 class='mi-ic_fluent_megaphone_loud_24_filled'></h3></button>
                <button title='Messages'><h3 class='mi-ic_fluent_chat_multiple_16_filled'></h3></button>
                <button title='Profile'><a href='https://www.aiedrow.co.in'><h3 class='mi-mif-user'></h3></a></button>
            </div>
        </footer>