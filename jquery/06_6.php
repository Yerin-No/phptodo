<!-- http://api.jquery.com/toggleClass/ -->
<!DOCTYPE html>
<html>
    <head>
        <style>p {
                margin: 4px;
                font-size:16px;
                font-weight:bolder;
                cursor:pointer;
            }
            .blue {
                color:blue;
            }
            .highlight {
                background:yellow;
            }
        </style>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body>
        <p class="blue"> Click to toggle </p>
        <p class="blue highlight"> highlight </p>
        <p class="blue"> on these </p>
        <p class="blue"> paragraphs </p>
        <script>
             $("p").click( function () {
                 $(this).toggleClass("highlight");
             });
         </script>
    </body>
</html>