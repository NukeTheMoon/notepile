var noteInput = $('#Note-input');
var characterCounter = $('#Character-counter');


function validateNoteInput() {
    removeLinebreaks();
    removeTabs();
    shortenToMaxLength();
}

function removeLinebreaks() {
    noteInput.val(noteInput.val().replaceAll('\r', ''));
    noteInput.val(noteInput.val().replaceAll('\n', ''));
}

function removeTabs() {
    noteInput.val(noteInput.val().replaceAll('\t', ''));
}

function shortenToMaxLength() {
    if (noteInput.val().length > noteInput.maxLength) {
        noteInput.val(noteInput.val().substr(0, noteInput.attr('maxlength') - 1));
    }
}

noteInput.bind('input propertychange', function() {
    validateNoteInput();
    updateCharacterCounter();
});

function updateCharacterCounter() {
    characterCounter.text(noteInput.val().length + ' / ' + noteInput.attr('maxlength'));
}

String.prototype.replaceAll = function(str1, str2, ignore)
{
    return this.replace(new RegExp(str1.replace(/([\/\,\!\\\^\$\{\}\[\]\(\)\.\*\+\?\|\<\>\-\&])/g,"\\$&"),(ignore?"gi":"g")),(typeof(str2)=="string")?str2.replace(/\$/g,"$$$$"):str2);
};