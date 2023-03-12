let acc = document.getElementsByClassName('accordion');
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener('click', function () {
    this.classList.toggle('active');
    let panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + 'px';
    }
  });
}

$(document).ready(function () {
  PopUpHide();
});
function PopUpShow() {
  $('#popup_order').show();
}
function PopUpHide() {
  $('#popup_order').hide();
}

function PopUpShow2() {
  $('#popup-thanks').show();
}
function PopUpHide2() {
  $('#popup-thanks').hide();
}

$('#callme').click(function () {
  $('html, body').animate(
    {
      scrollTop: $('.about').offset().top,
    },
    1000,
  );
});
$('#callme2').click(function () {
  $('html, body').animate(
    {
      scrollTop: $('.clientsSection').offset().top,
    },
    1000,
  );
});
$('#callme3').click(function () {
  $('html, body').animate(
    {
      scrollTop: $('.faq').offset().top,
    },
    1000,
  );
});
$('#callme4').click(function () {
  $('html, body').animate(
    {
      scrollTop: $('.about').offset().top,
    },
    1000,
  );
});
$('#callme5').click(function () {
  $('html, body').animate(
    {
      scrollTop: $('.clientsSection').offset().top,
    },
    1000,
  );
});
$('#callme6').click(function () {
  $('html, body').animate(
    {
      scrollTop: $('.faq').offset().top,
    },
    1000,
  );
});
let menuBtn = document.querySelector('.hamburger');
let menu = document.querySelector('.hamburgerMenu');
menuBtn.addEventListener('click', function () {
  menu.classList.toggle('active');
});
