
function previewImage() {
    var preview = document.getElementById('preview');
    var fileInput = document.getElementById('image');
    var file = fileInput.files[0];

    if (file) {
        var reader = new FileReader();

        reader.onload = function (e) {
            preview.src = e.target.result;
        }

        reader.readAsDataURL(file);
    } else {
        preview.src = '#';
    }
}
