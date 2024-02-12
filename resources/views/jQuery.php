<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Multiplication Table Generator</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    body {
        background-image: url("https://t4.ftcdn.net/jpg/04/61/47/03/240_F_461470323_6TMQSkCCs9XQoTtyer8VCsFypxwRiDGU.jpg");
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    #container {
        background: rgba(255, 255, 255, 0.5); /* ทำให้สีขาวมีความโปร่งแสง */
        text-align: center;
        border: 2px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow-y: auto;
        max-height: 400px; /* กำหนดความสูงสูงสุดของเฟรม */
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
    <button id="generateBtn">Generate</button>
    <div id="output"></div>
</div>

<script>
$(document).ready(function(){
    $('#generateBtn').click(function(){
        var num = $('#numberInput').val();
        if(!isNaN(num) && num !== ""){
            $('#output').empty();
            var table = '<h2>Multiplication Table for ' + num + '</h2>';
            for(var i = 1; i <= 25; i++){
                table += '<li>' + num + ' x ' + i + ' = ' + (num * i) + '</li>';
            }

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
