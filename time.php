<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
  <title>Time converter</title>
</head>
<body>

<div class="container mt-5">
<div  class="mb-3">
  <label for="numberOfYears" class="form-label">Enter a number of years here:</label><br>
  <input type="number" name"numberOfYears" id="numberOfYears" class="form-control"><br>
  <input type="submit" value="convert" id="convert" class="btn btn-primary">
  <p id="resultSeconds" class="text-primary font-weight-bold"></p>
  <p id="resultMinutes" class="text-primary font-weight-bold"></p>
  <p id="resultHours" class="text-primary font-weight-bold"></p>
  <p id="resultDays" class="text-primary font-weight-bold"></p>
</div>


  <br><label class="form-label">Time converter</label><br>
  <input id="nbToConvert" class="form-control">
  <select id="selectedTime" class="form-select">
    <option value="years">Year(s)</option>
    <option value="days">Day(s)</option>
    <option value="hours">Hour(s)</option>
    <option value="minutes">Minute(s)</option>
    <option value="seconds">Second(s)</option>
  </select> in
  <select id="convertTime" class="form-select">
    <option value="years">Year(s)</option>
    <option value="days">Day(s)</option>
    <option value="hours">Hour(s)</option>
    <option value="minutes">Minute(s)</option>
    <option value="seconds">Second(s)</option>
  </select>
  <br><button id="calculate" class="btn btn-primary">calculate</button><br>
  <p id="calculResult" class="text-primary font-weight-bold"></p>


  <label for="year" class="form-label">Is this a leap year?</label><br>
  <input type="year" name"year" id="year" placeholder="enter a year" class="form-control">
  <br><input type="submit" value="check" id="check" class="btn btn-primary ">
  <p id="resultB" class="text-primary font-weight-bold"></p>

</div>

</body>
</html>

<script>

document.getElementById('check').addEventListener("click", function() {
  let year = document.getElementById("year").value;
  if ((year%4==0) && ((year%100!=0) || (year%400==0))) {
    document.getElementById('resultB').innerHTML = "This is a leap year.";
  } else {
    document.getElementById('resultB').innerHTML = "This is not a leap year.";
  };
})

const convert = document.getElementById("convert");
const secondsInMinute = 60;
const minutesInHour = 60;
const hoursInDay = 24;
const daysInYear = 365;

convert.addEventListener("click", function() {
  let numberOfYears =  document.getElementById("numberOfYears").value;
  let nbDays = numberOfYears * daysInYear;
  let nbHours = nbDays * hoursInDay;
  let nbMinutes = nbHours * minutesInHour;
  let nbSeconds = nbMinutes * secondsInMinute;
  document.getElementById('resultDays').innerHTML = nbDays + " days";
  document.getElementById('resultHours').innerHTML = nbHours + " hours";
  document.getElementById('resultMinutes').innerHTML = nbMinutes + " minutes";
  document.getElementById('resultSeconds').innerHTML = nbSeconds + " seconds";
});


document.getElementById('calculate').addEventListener("click", function() {
  let unity = document.getElementById('selectedTime').value;
  let input = document.getElementById('nbToConvert').value;
  let output = document.getElementById('convertTime').value;
  let result = "";
  switch(true) {
    case unity == "years":
    switch (true) {
      case output == "years":
      result = input;
      console.log(result);
      break;
      case output == "days":
      result = input * 365;
      console.log(result);
      break;
      case output == "hours":
      result = (input * 365) * 24;
      console.log(result);
      break;
      case output == "minutes":
      result = ((input * 365) * 24) * 60;
      console.log(result);
      break;
      case output == "seconds":
      result = (((input * 365) * 24) * 60) * 60;
      console.log(result);
      break;
    }
    break;
    case unity == "days":
    switch (true) {
      case output == "years":
      result = Math.floor(input / 365);
      console.log(result);
      break;
      case output == "days":
      result = input;
      console.log(result);
      break;
      case output == "hours":
      result = input * 24;
      console.log(result);
      break;
      case output == "minutes":
      result = (input * 24) * 60;
      console.log(result);
      break;
      case output == "seconds":
      result = ((input * 24) * 60) * 60;
      console.log(result);
      break;
    }
    break;
    case unity == "hours":
    switch (true) {
      case output == "years":
      result = Math.floor(input / 24) / 365;
      console.log(result);
      break;
      case output == "days":
      result = Math.floor(input / 24);
      console.log(result);
      break;
      case output == "hours":
      result = input;
      console.log(result);
      break;
      case output == "minutes":
      result = input * 60;
      console.log(result);
      break;
      case output == "seconds":
      result = (input * 60) * 60;
      console.log(result);
      break;
    }
    break;
    case unity == "minutes":
    switch (true) {
      case output == "years":
      result = Math.floor(((input / 60) /24) / 365);
      console.log(result);
      break;
      case output == "days":
      result = Math.floor(input / 60) / 24;
      console.log(result);
      break;
      case output == "hours":
      result = Math.floor(input / 60);
      console.log(result);
      break;
      case output == "minutes":
      result = input;
      console.log(result);
      break;
      case output == "seconds":
      result = input * 60;
      console.log(result);
      break;
    }
    break;
    case unity == "seconds":
    switch (true) {
      case output == "years":
      result = Math.floor((((input / 60) / 60 ) /24) / 365);
      console.log(result);
      break;
      case output == "days":
      result = Math.floor(((input / 60) /24) / 365);
      console.log(result);
      break;
      case output == "hours":
      result = Math.floor(input / 60) / 24;
      console.log(result);
      break;
      case output == "minutes":
      result = Math.floor(input / 60);
      console.log(result);
      break;
      case output == "seconds":
      result = input;
      console.log(result);
      break;
    }
  } // END OF 1ST SWITCH
  document.getElementById('calculResult').innerHTML = "result = " + result + " " + output;
});
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
