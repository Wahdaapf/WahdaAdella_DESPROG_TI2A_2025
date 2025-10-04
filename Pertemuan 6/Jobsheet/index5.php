<!DOCTYPE html>
<html>
<head>
    <style>
        #kotak2, #flip {
            padding: 5px;
            text-align: center;
            background-color: #a7dbd8;
            border: solid 2px #e0e4cc;
            border-radius: 5px;
        }

        #kotak2 {
            padding: 50px;
        }
    </style>
    <script src="jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#kotak2").slideUp("slow");
            });
        });
    </script>
</head>
<body>
    <div id="flip">Klik untuk Efek Slide</div>
    <div id="kotak2">Selamat Pagi</div>
</body>
</html>
