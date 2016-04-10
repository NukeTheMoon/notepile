function pile() {
    var note = $('#Note-input').val();
    if (note.length > 0) {
        var dataString = 'note=' + note;
        $.ajax({
            type: "POST",
            url: "./src/php/app/pile.php",
            data: dataString,
            cache: false,
            success: function (result) {
                // TODO: clear, refresh etc.
            }
        });
    }
}