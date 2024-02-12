<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Multiplication Table Generator</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            #container {
                text-align: center;
            }
            #output {
                margin-top: 20px;
            }
        </style>


    </head>

    <body>

        <div id="container">
            <h1>Multiplication</h1>
            <input type="number" id="numberInput" placeholder="Enter a number">
            <button id="generateBtn">Submid</button>
            <div id="output"></div>
        </div>

        <script>
        $(document).ready(function(){
            $('#generateBtn').click(function(){
                var num = $('#numberInput').val();
                if(!isNaN(num) && num !== ""){
                    $('#output').empty();
                    var table = '<h2>Multiplication Table for ' + num + '</h2><ul>';
                    for(var i = 1; i <= 10; i++){
                        table += '<li>' + num + ' x ' + i + ' = ' + (num * i) + '</li>';
                    }
                    table += '</ul>';
                    $('#output').append(table);
                }
                else {
                    alert("Please enter a valid number.");
                }
            });
        });
        </script>
    </body>
</html>
