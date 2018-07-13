<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>AvtComp Store</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="main"></div>
        <script src="js/bundle.min.js"></script>
    </body>
</html>
