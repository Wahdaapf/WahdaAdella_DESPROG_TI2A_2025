<!DOCTYPE HTML>
<html>
<head>
    <script src="jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $("#button").click(function(){
                $("#box").load("test-content.html");
            });
        });
    </script>
</head>
<body>
    <div id="box">
        <h2>Klik tombol dibawah untuk menampilkan konten</h2>
    </div>
    <button type="button" id="button">Klik Saya!</button>
</body>
</html>
