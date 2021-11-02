let stars = document.getElementById('stars');
// let moon = document.getElementById('moon');
// let mountainsBehind = document.getElementById('mountains-behind');
// let mountainsFront = document.getElementById('mountains-front');
// let content = document.getElementById('content');

window.addEventListener('scroll', function(){
  let value = window.scrollY;
  stars.style.left = value * 0.25 + 'px';
  // moon.style.top = value * 1.05 + 'px';
  // mountainsBehind.style.top = value * 0.5 + 'px';
  // mountainsFront.style.top = value * 0.6 + 'px';
  // content.style.top = value * 0.25 + 'px';
})
