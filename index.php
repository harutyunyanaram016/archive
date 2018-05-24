<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The new site has been successfully created and is ready to work</title>
    <!-- b0a8e2d8ccb04b24683d347076e80d29e451a385:d3aa2e6571e673001cb012eda23bd97d02234f0b -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <style>

        html {
            height: 100%;
        }

        hr {
            height: 2px;
            border: 0;
            box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);
            margin: 0;
        }

        a {
            color: #2fa3e7;
            text-decoration: none
        }

        a:focus, a:hover {
            color: #157ab5;
            text-decoration: none
        }

        body {
            font-family: 'PT Sans', Arial, sans-serif;
            font-size: 16px;
            height: 100%;
            margin: 0;
        }

        .alert {
            font-family: 'PT Sans', Arial, sans-serif;
            line-height: 24px;
            border: none;
            border-radius: 0;
            border-bottom: 2px solid;
            box-shadow: rgba(77, 80, 94, 0.4) 0px 0px 3px 0px;
            padding: 25px;
            background-color: white;
        }

        h1, h2 {
            font-family: 'PT Sans Caption', Arial, sans-serif;
            font-weight: normal;
            margin: 0;
        }

        h1 {
            font-size: 21px;
            line-height: 30px;
        }

        h2 {
            font-size: 18px;
        }

        @media screen and (min-width: 801px) {

            body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                min-height: 768px;
            }

            .top {
                background-color: #f7f9fa;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
            }
            .bottom {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }
            header, footer{
                width: 690px;
                margin: 0 auto;
            }
            header {
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
            }
            main {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                width: 740px;
                margin: 0 auto;
            }
            footer {
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                width: 690px;
            }
            .logo img{
                max-width: 100%;
                max-height: 75px;
                position: relative;
                top: 15px;
            }
            nav {
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding-right: 10px;
            }
            nav a {
                padding: 0 15px
            }
            .octo {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }
            .octo img {
                height: 230px;
            }
            .alert {
                display: -webkit-inline-box;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
            .alert .icon {
                margin: 0 25px;
            }
            .icon img {
                height: 75px;
            }
            .alert.alert-success {
                border-bottom-color: #70a123;
            }
            .footer-col {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                padding: 15px 0;
            }
            .footer-col > * {
                padding: 2px;
            }

            .bottom-mobile {
                display: none;
            }
        }

        @media screen and (max-width: 800px) {

            .top {
                margin: 0 auto;
                background-color: #f7f9fa;
            }

            .bottom {
                margin: 0 auto;
                width: 95%;
            }

            header, footer, main {
                width: 95%;
            }

            header, footer, main {
                margin: 0 auto;
            }

            .logo {
                display: block;
                width: 60%;
                margin: 0 auto;
            }

            .logo img {
                width: 100%;
            }

            .icon img {
                display: none;
            }

            .octo {
                width: 60%;
                margin: 0 auto;
            }

            .octo img {
                width: 100%;
            }

            .alert.alert-success {
                border-bottom-color: #70a123;
                margin-bottom: 30px;
                vertical-align: middle;
                text-align: center;
            }

            header nav {
                display: none;
            }

            .bottom {
                display: none;
            }

            .bottom-mobile footer {
                display: table;
                width: 95%;
                margin-bottom: 35px;
            }

            .bottom-mobile footer span {
                text-align: right;
                display: table-cell;
            }

            .bottom-mobile footer txt {
                display: table-cell;
            }

            .bottom-mobile footer h2 {
                margin-top: 20px;
                margin-bottom: 5px;
            }

            .bottom-mobile footer p {
                display: table-row;
                width: 100%;
                line-height: 25px;
            }
        }
    </style></head>
<body>
<div class="top">
    <header>
        <a href="http://beget.com" target="_blank" title="Web hosting home page" class="logo">
            <img src="https://cp.beget.com/i/logo.png">
        </a>
        <nav>
            <a href="https://cp.beget.com" target="_blank">Control Panel</a>
            <a href="https://beget.com/en/domain-register" target="_blank">Domain registration</a>
            <a href="https://beget.com/en/virtual-hosting" target="_blank">Plans</a>
        </nav>
    </header>
    <main>
        <div class="octo">
            <img src="https://cp.beget.com/img/octo/octo_coffee.png">
        </div>
        <div class="alert alert-success">
            <div class="icon">
                <img src="https://cp.beget.com/i/icons/small/accept@2x.png">
            </div>
            <div class="text">
                <h1>The new site has been successfully created and is ready to work</h1>
                Thank you for choosing us. We are pleased to provide you with our services.<br/>
                If you have any questions we will be happy to answer them.
            </div>
        </div>
    </main>
</div>
<hr>
<div class="bottom-mobile">
    <footer>
        <h2>Support</h2>
        <p><txt>Mail: </txt><span><a href="mailto:support@beget.com">support@beget.com</a></span></p>
    </footer>
</div>
<div class="bottom">
    <footer>
        <div class="footer-col">
            <div>Support:</div>
        </div>
        <div class="footer-col" style="padding-right: 100px;">
            <a href="mailto:support@beget.com">support@beget.com</a>
        </div>
        <div class="footer-col">
            <div>Management:</div>
        </div>
        <div class="footer-col">
            <a href="mailto:manager@beget.com">manager@beget.com</a>
        </div>
    </footer>
</div>
</body>
</html>