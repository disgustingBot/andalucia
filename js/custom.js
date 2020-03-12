d=document;w=window;c=console;


w.onload=()=>{
  // LAZY LOAD FUNCTIONS MODULE
  var lBs=[].slice.call(d.querySelectorAll(".lazy-background")),lIs=[].slice.call(d.querySelectorAll(".lazy")),opt={threshold:.01};
  if("IntersectionObserver" in window){
    let lBO=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting){let l=e.target;l.classList.add("visible");lBO.unobserve(l)}})},opt),
        lIO=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting){let l=e.target;l.classList.remove("lazy");lIO.unobserve(l);l.srcset=l.dataset.url}})},opt);
    lIs.forEach(lI=>{lIO.observe(lI)});lBs.forEach(lB=>{lBO.observe(lB)});
  }

  d.getElementById("load").style.top="-100vh";
}


// SLIDER:
// TODO: mejorar modulo para poder reutilizarlo sin duplicar codigo
var j=1,x=d.getElementsByClassName("carouselItem");
const showDivs=n=>{
  if(n>x.length){j=1}
  if(n<1){j=x.length}
  for(i=0;i<x.length;i++){x[i].classList.add("inactive")}
  x[j-1].classList.remove("inactive");
}
const carousel=()=>{j++;
  for(i=0;i<x.length;i++){x[i].classList.add("inactive")}
  if(j>x.length){j=1}
  x[j-1].classList.remove("inactive");
  setTimeout(carousel, 8000); // Change image every N/1000 seconds
}
const plusDivs=n=>{showDivs(j+=n)}
if(x.length>0){showDivs(j);setTimeout(carousel, 8000);}










// alternates a class from a selector of choice, example:
// <div class="someButton" onclick="altClassFromSelector('activ', '#navBar')"></div>
const altClassFromSelector = ( clase, selector, mainClass = false )=>{
  // TODO: mejorar este query selector a un querySelectorAll
  const x = d.querySelector(selector);
  // if there is a main class removes all other classes
  if(mainClass){
    x.classList.forEach( item=>{
      // TODO: testear si anda con el nuevo condicional
      if( item!=mainClass && item!=clase ){
        x.classList.remove(item);
      }
    });
  }

  if(x.classList.contains(clase)){
    x.classList.remove(clase)
  }else{
    x.classList.add(clase)
  }
}











// GO BACK BUTTONS
function goBack(){w.history.back()}














//Accordion //Desplegable
var acc = d.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click",()=>{
    this.classList.toggle("active");
    // TODO: Hacer que se puede elegir el elemento a acordionar
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
      panel.style.padding = "0";
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
      panel.style.padding = "20px";
    }
  });
}







  // Set the date we're counting down to
  var time = d.getElementById('date').innerText ? d.getElementById('date').innerText : NULL;
  // c.log(time);
  var countDownDate = new Date(time).getTime();
  // var countDownDate = new Date("Jan 18, 2020 00:00:00").getTime();
  // c.log(countDownDate);
  // Update the count down every 1 second
  var x = setInterval(()=>{

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    // c.log(distance)
    // If the count down is over, write some text
    if (distance < 0) {
      clearInterval(x);
      // d.getElementById("view").classList.add("expired");
      // c.log('Expired');
      // return;
    }

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor( distance / (1000 * 60 * 60 * 24));
    var hour = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var mnts = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var scds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    // d.getElementById("demo").innerHTML = days + " : " + hour + " : " + mnts    + " : " + scds;
    d.getElementById("days").innerHTML = days;
    d.getElementById("hour").innerHTML = hour;
    d.getElementById("mnts").innerHTML = mnts;
    d.getElementById("scds").innerHTML = scds;

    // c.log('runing')
  }, 1000);
