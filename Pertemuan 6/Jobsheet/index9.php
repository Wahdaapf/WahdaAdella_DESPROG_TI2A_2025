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
            $(".box")
                .animate({width: "300px"})
                .animate({height: "300px"})
                .animate({marginLeft: "150px"})
                .animate({borderWidth: "10px"})
                .animate({opacity: 0.5});
        });
    });
    </script>
</head>
<body>
    <button type="button">Start Animation</button>
    <div class="box"></div>
</body>
</html>
