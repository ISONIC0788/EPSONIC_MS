<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Language Changer Using JS & PHP</title>
</head>
<body>
    <center>
        <?php

            if (isset($_GET['lang'])) {
                if (!empty($_GET['lang'])) {
                    switch ($_GET['lang']) {
                        case 'en':
                            echo "<h1>English</h1>";
                            break;
                        case 'kiny':
                            echo "<h1>Kinyarwanda</h1>";
                            break;
                        case 'fr':
                            echo "<h1>French</h1>";
                            break;
                        case 'esp':
                            echo "<h1>Espanoil</h1>";
                            break;
                        
                        default:
                            echo "<h1>English</h1>";
                            break;
                    }
                }else{
                    echo "<h1>Default is English</h1>";
                }
            }
        ?>
    </center>
    <select onchange="changeUrl(this.value)">
        <option disable hidden>Select Language</option>
        <option value="http://localhost/project2/actionphp/javachange.php?lang=en">English</option>
        <option value="http://localhost/project2/actionphp/javachange.php?lang=kiny">Kinyarwanda</option>
        <option value="http://localhost/project2/actionphp/javachange.php?lang=fr">French</option>
        <option value="http://localhost/project2/actionphp/javachange.php?lang=esp">Espanoil</option>
    </select>
    <script>
        function changeUrl(value) {
            var redirectUrl = value;
            window.location.href = redirectUrl;
        }
    </script>
    html
<div id="myDivision">
    <a href="https://www.example.com">Link 1</a>
    <a href="https://www.example.com">Link 2</a>
    <a href="https://www.example.com">Link 3</a>
</div>
JavaScript:
javascript
// Access the division element
var division = document.getElementById("myDivision");

// Change the content of the division
division.innerHTML = '<a href="https://www.google.com">New Link 1</a>' +
                     '<a href="https://www.google.com">New Link 2</a>' +
                     '<a href="https://www.google.com">New Link 3</a>';
</body>
</html>