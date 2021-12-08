function showDetails() {
  var x = document.getElementById("footer-details");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else { x.style.display = "block"; }
}



function openMenu() { document.getElementById('menu').style.display = 'block'; }
function closeMenu() { document.getElementById('menu').style.display = 'none'; }



var players = document.querySelectorAll('.item-1');
var loadPlayer = function (event) {
  var target = event.currentTarget;
  var iframe = document.createElement('iframe');
  iframe.height = target.clientHeight;
  iframe.width = target.clientWidth;
  iframe.src = 'https://www.youtube.com/embed/' + target.dataset.videoId + '?autoplay=1';
  iframe.setAttribute('frameborder', 0);
  target.classList.remove('circle');
  target.classList.remove('triangle');
  if (target.children.length) {
    target.replaceChild(iframe, target.firstElementChild);
  } else { target.appendChild(iframe); }
};
var config = {once: true};
Array.from(players).forEach(function(player) { player.addEventListener('click', loadPlayer, config); });
