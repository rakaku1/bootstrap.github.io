<!DOCTYPE HTML>
<html lang = "id">
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="device-width, initial-scale=1">
        <title>Hidupkan idemu</title>
        <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        <script>
            function light (sw) {
                var pic;
                if (sw == 0) {
                    pic = "lampumati.png";
                } else {
                    pic = "lampuhidup.png";
                }
            }
            document.getElementById('myImage').src = pic;

        
        </script>

        <img id="myImage" src="lampumati.png"
        width="100" height="100">

        <p>
            <button type="button"
            onclick="light(1)">Hidupkan</button>
            <button type="button"
            onclick="light(0)">Matikan</button>
</p>
    </body>
    </html>
