<!DOCTYPE html><html><head>
    <title>404 Не знайдено</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f1f4f5;
            color: #37474f;
            font-family: 'Open Sans', sans-serif;
        }
        .container {
            display: flex;
            width: 535px;
        }
        .container-code{
            min-width: 250px;
            text-align: center;
        }
        .container-text {
            min-width: 250px;
            padding-left: 20px;
        }
        .error_code {
            display: block;
            font-size: 92px;
            font-weight: 700;
            margin-top: -25px;
        }
        .error_brief {
            display: block;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        @media (max-width: 768px) {
            .container {
                display: flex;
                flex-direction: column;
                width: 100%;
            }
            .container-text{
                padding: 30px;
                text-align: center;
                min-width: auto;
            }
            .container-code{
                min-width: auto;
                text-align: center;
                margin-top: 100px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="container-code">
        <span class="error_code">404</span>
        <span class="error_description">Не знайдено</span>
    </div>
    <div class="container-text">
        <span class="error_brief">Ресурс не знайдено на цьому сервері</span>
    </div>
</div>

</body></html>