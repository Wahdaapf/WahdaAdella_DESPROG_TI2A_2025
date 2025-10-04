<!DOCTYPE html>
<html>
<head>
    <style>
        .box {
            width: 100px;
            height: 100px;
            background: #9d7ede;
            margin-top: 30px;
            border-style: solid;
            border-color: #6f40ce;
            position: relative;
        }
    </style>
    <script src="jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("div").animate({left: '300px'});
            });
        });
    </script>
</head>
<body>
    <button type="button">Start Animation</button>
    <div class="box"></div>
</body>
</html>
