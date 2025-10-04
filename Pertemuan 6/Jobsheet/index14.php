<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styleSlideShow.css">
    <script src="jquery-3.7.1.js"></script>
    <script>
        var i = 0;
        $(document).ready(function () {
            $(".slidertitle, #slider img").hide();
            showNextImage();
            setInterval('showNextImage()', 3000);
        });

        function showNextImage() {
            i++;
            $('#sliderImage' + i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
            $('#title' + i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
            if (i == 3)
                i = 0;
        }
    </script>
</head>
<body>
    <div id="slider">
        <img id="sliderImage1" src="img/img1.jpg">
        <div class="slidertitle" id="title1">img1</div>

        <img id="sliderImage2" src="img/img2.jpg">
        <div class="slidertitle" id="title2">img2</div>

        <img id="sliderImage3" src="img/img3.jpg">
        <div class="slidertitle" id="title3">img3</div>
    </div>
</body>
</html>
