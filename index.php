<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>notepile</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body ng-app="Notepile">
    <div id="Wrapper" ng-controller="NotepileController">
        <div class="title-header">
            <a href="./index.php" class="title">notepile</a>
        </div>
        <div class="notes-frame">
            <div class="note-box">
                <div class="note-content-frame">
                    <div class="note-input-frame">
                        <textarea id="Note-input" rows="7" cols="71" maxlength="497" name="note" class="note-input" wrap="soft" placeholder="leave your note for the internet to see"></textarea>
                    </div>
                </div>
                <div class="note-footer">
                    <div class="id-frame">
                        <p id="Character-counter" class="id">0 / 497</p>
                    </div>
                    <div class="pile-button-frame">
                        <button class="pile-button" ng-click="pile()">pile</button>
                    </div>
                </div>
            </div>
            <div class="notes-frame">
                <div class="note-box">
                    <div class="note-content-frame">
                        <div class="note-input-frame">
                            <textarea readonly rows="7" cols="71" maxlength="497" name="note" class="note-input" wrap="soft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id felis eget sem sodales rhoncus. Aliquam luctus condimentum nisi, vitae faucibus massa vestibulum at. Phasellus eget quam orci. In hac habitasse platea dictumst. Praesent ut euismod massa. In et eros molestie, vehicula ex eu, cursus arcu. Ut nec congue ex. Vivamus vel nibh efficitur, pellentesque augue sit amet, cursus lorem. Suspendisse nec lectus ornare, porttitor velit vitae, vehicula metus. Fusce commodo risus ut porta amet.</textarea>
                        </div>
                    </div>
                    <div class="note-footer">
                        <div class="id-frame">
                            <p class="id">#286893</p>
                        </div>
                        <div class="pile-button-frame">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="src/js/lib/jquery.min.js"></script>
<script type="text/javascript" src="src/js/lib/angular.min.js"></script>
<script type="text/javascript" src="src/js/app/note.js"></script>
<script type="text/javascript" src="src/js/app/pile.js"></script>

</body>
</html>