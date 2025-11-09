<!DOCTYPE html>
<html>
<head>
    <title>Multi Upload Gambar AJAX</title>
</head>
<body>
    <h2>Multi Upload Gambar dengan AJAX</h2>
    <form id="upload-form" enctype="multipart/form-data">
        <input type="file" name="images[]" id="images" multiple accept="image/*">
        <input type="submit" value="Unggah">
    </form>
    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload_multi_image.js"></script>
</body>
</html>