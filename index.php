<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <title>Calculator</title>
</head>

<body>
  
  <div class="main">
    <div class="calcu">
      <h4>C A L C U L A T O R</h4>
      <form>
        <div class="display">
          <input type="text" name="display" readonly>
        </div>
        
        <div>
          <input type="button" value="AC" onclick="display.value = '' ">
          <input type="button" value="←" onclick="display.value = display.value.toString().slice(0,-1)">
          <input type="button" value="." onclick="display.value += '.' ">
          <input type="button" value="+" onclick="display.value += '+' "></br>
          <input type="button" value="7" onclick="display.value += '7' ">
          <input type="button" value="8" onclick="display.value += '8' ">
          <input type="button" value="9" onclick="display.value += '9' ">
          <input type="button" value="-" onclick="display.value += '-' "></br>
          <input type="button" value="4" onclick="display.value += '4' ">
          <input type="button" value="5" onclick="display.value += '5' ">
          <input type="button" value="6" onclick="display.value += '6' ">
          <input type="button" value="*" onclick="display.value += '*' "></br>
          <input type="button" value="1" onclick="display.value += '1' ">
          <input type="button" value="2" onclick="display.value += '2' ">
          <input type="button" value="3" onclick="display.value += '3' ">
          <input type="button" value="/" onclick="display.value += '/' "></br>
          <input type="button" value="0" onclick="display.value += '0' ">
          <input type="button" value="=" class="equal" onclick="display.value = eval(display.value)">
        </div>  
      </form>
        
      </div>
    </div>
</body>

</html>

