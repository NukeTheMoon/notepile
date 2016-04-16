// function pile() {
//     var note = $('#Note-input').val();
//     if (note.length > 0) {
//         var dataString = 'note=' + note;
//         $.ajax({
//             type: "POST",
//             url: "./src/php/app/pile.php",
//             data: dataString,
//             cache: false,
//             success: function (result) {
//                 // TODO: clear, refresh etc.
//             }
//         });
//     }
// }
//
// function getPile(offsetFromTop, amount) {
//     var dataString = 'offsetFromTop=' + offsetFromTop + '&amount=' + amount;
//     $.ajax({
//         type: "POST",
//         url: "./src/php/app/getPile.php",
//         data: dataString,
//         cache: false,
//         success: function (result) {
//             // TODO: foreach echo? store in array and databind with angular?
//         }
//     });
// }