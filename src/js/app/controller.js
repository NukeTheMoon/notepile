var app = angular.module('Notepile', []);

app.controller('NotepileController', function ($scope) {
    $scope.notes = [];

    $scope.pile = function() {
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
    };

    $scope.getPile = function (offsetFromTop, amount) {
        var dataString = 'offsetFromTop=' + offsetFromTop + '&amount=' + amount;
        $.ajax({
            type: "POST",
            url: "./src/php/app/getPile.php",
            data: dataString,
            cache: false,
            success: function (result) {
                return result;
                // TODO: foreach echo? store in array and databind with angular?
            }
        });
    };

    var init = function() {
        $scope.getPile(0, 20);
    }();
});