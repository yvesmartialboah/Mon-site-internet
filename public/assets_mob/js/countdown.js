// const MINUTES = 60
// const HOURS = 60 * MINUTES
// const DAYS = 24 * HOURS

// // calculer la difference en seconde entre les 2 dates
// function refreshCountdown() {
//     const countdown = document.querySelector('#countdown')
//     const lanchDate = Date.parse(countdown.dataset.time) / 1000
//     const difference = lanchDate - Date.now() / 1000

//     const diff = {
//         days: Math.floor(difference / DAYS),
//         hours: Math.floor(difference % DAYS / HOURS),
//         minutes: Math.floor(difference % HOURS / MINUTES),
//         seconds: Math.floor(difference % MINUTES),
//     }
//     document.getElementById('#days').innerHTML = diff.days
//     document.getElementById('#hours').innerHTML = diff.hours
//     document.getElementById('#minutes').innerHTML = diff.minutes
//     document.getElementById('#seconds').innerHTML = diff.seconds
//     window.setTimeout(refreshCountdown,1000)
// }

// refreshCountdown()
// console.log(diff)

var countDownDate = new Date("Apr 3, 2021 15:37:25").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  
  // Find the distance between now an the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Output the result in an element with id="demo"
  document.getElementById("days").innerHTML = days + "j ";
  document.getElementById("hours").innerHTML =hours + "h ";
  document.getElementById("minutes").innerHTML = minutes + "m ";
  document.getElementById("seconds").innerHTML = seconds + "s ";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);