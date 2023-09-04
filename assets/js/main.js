

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


//stickey navbar
$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $('.bottom_nav').addClass('bo_nav')
  } else {
    $('.bottom_nav').removeClass('bo_nav')
  }
});


// 
console.clear();

/**
 * OverflowScroller ES5 class.
 */

function OverflowScroller(element, options) {
  this.element = element;
  this.options = options;
  this.lastKnownY = window.scrollY;
  this.currentTop = 0;
  this.initialTopOffset =
    options["offsetTop"] ||
    parseInt(window.getComputedStyle(this.element).top);
  this.attachListeners();
}

OverflowScroller.prototype.destroy = function () {
  window.removeEventListener("scroll", this.checkPositionListener);
};

OverflowScroller.prototype.attachListeners = function () {
  this.checkPositionListener = this.checkPosition.bind(this);
  window.addEventListener("scroll", this.checkPositionListener);
};

OverflowScroller.prototype.checkPosition = function () {
  var $this = this;

  fastdom.measure(function () {
    var bounds = $this.element.getBoundingClientRect(),
      maxTop =
        bounds.top +
        window.scrollY -
        $this.element.offsetTop +
        $this.initialTopOffset,
      minTop =
        $this.element.clientHeight -
        window.innerHeight +
        ($this.options["offsetBottom"] || 0);

    if (window.scrollY < $this.lastKnownY) {
      $this.currentTop -= window.scrollY - $this.lastKnownY;
    } else {
      $this.currentTop += $this.lastKnownY - window.scrollY;
    }

    $this.currentTop = Math.min(
      Math.max($this.currentTop, -minTop),
      maxTop,
      $this.initialTopOffset
    );
    $this.lastKnownY = window.scrollY;
  });

  fastdom.mutate(function () {
    $this.element.style.top = $this.currentTop + "px";
  });
};


var sidebar = new OverflowScroller(document.getElementById("sidebar"), {
  offsetTop: 10,
  offsetBottom: 10
});

var sidebar = new OverflowScroller(document.getElementById("sidebar1"), {
  offsetTop: 10,
  offsetBottom: 10
});


/* FastDom https://github.com/wilsonpage/fastdom */
!function (t) { "use strict";
 function e() { var e = this; e.reads = [],
   e.writes = [],
    e.raf = u.bind(t) } function n(t) { t.scheduled || (t.scheduled = !0, t.raf(i.bind(null, t))) 
    }
     function i(t) {
       var e, i = t.writes, o = t.reads;
        try { o.length, r(o), i.length, r(i)
         } 
         catch (t) { e = t }
          if (t.scheduled = !1, (o.length || i.length) && n(t), e) { if (e.message, !t.catch) throw e; t.catch(e) } } 
          function r(t) { for (var e; e = t.shift();)e() } function o(t, e) { var n = t.indexOf(e);
             return !!~n && !!t.splice(n, 1) } function s(t, e) { for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]) }
              var u = t.requestAnimationFrame || t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || t.msRequestAnimationFrame || function (t) { return setTimeout(t, 16) }; e.prototype = { constructor: e, measure: function (t, e) { var i = e ? t.bind(e) : t; return this.reads.push(i), n(this), i }, mutate: function (t, e) { var i = e ? t.bind(e) : t; return this.writes.push(i), n(this), i }, clear: function (t) { return o(this.reads, t) || o(this.writes, t) }, extend: function (t) { if ("object" != typeof t) throw new Error("expected object"); var e = Object.create(this); return s(e, t), e.fastdom = this, e.initialize && e.initialize(), e }, catch: null }; var exports = t.fastdom = t.fastdom || new e; "function" == typeof define ? define(function () { return exports }) : "object" == typeof module && (module.exports = exports) }("undefined" != typeof window ? window : this);












// 
// Other important pens.
// Map: https://codepen.io/themustafaomar/pen/ZEGJeZq
// Dashboard: https://codepen.io/themustafaomar/pen/jLMPKm

let dropdowns = document.querySelectorAll('.navbar .dropdown-toggler')
let dropdownIsOpen = false

// Handle dropdown menues
if (dropdowns.length) {
  // Usually I don't recommend doing this (adding many event listeners to elements have the same handler)
  // Instead use event delegation: https://javascript.info/event-delegation
  // Why: https://gomakethings.com/why-event-delegation-is-a-better-way-to-listen-for-events-in-vanilla-js
  // But since we only have two dropdowns, no problem with that. 
  dropdowns.forEach((dropdown) => {
    dropdown.addEventListener('click', (event) => {
      let target = document.querySelector(`#${event.target.dataset.dropdown}`)

      if (target) {
        if (target.classList.contains('show')) {
          target.classList.remove('show')
          dropdownIsOpen = false
        } else {
          target.classList.add('show')
          dropdownIsOpen = true
        }
      }
    })
  })
}

// Handle closing dropdowns if a user clicked the body
window.addEventListener('mouseup', (event) => {
  if (dropdownIsOpen) {
    dropdowns.forEach((dropdownButton) => {
      let dropdown = document.querySelector(`#${dropdownButton.dataset.dropdown}`)
      let targetIsDropdown = dropdown == event.target

      if (dropdownButton == event.target) {
        return
      }

      if ((!targetIsDropdown) && (!dropdown.contains(event.target))) {
        dropdown.classList.remove('show')
      }
    })
  }
})

// Open links in mobiles
function handleSmallScreens() {
  document.querySelector('.navbar-toggler')
    .addEventListener('click', () => {
      let navbarMenu = document.querySelector('.navbar-menu')

      if (!navbarMenu.classList.contains('active')) {
        navbarMenu.classList.add('active')
      } else {
        navbarMenu.classList.remove('active')
      }
    })
}

handleSmallScreens()



// $(function() {
//   var colEl = $('.item').length,
//     loadedEl = 2,
//     start = 2,
//     loadPo = 2;

//   for (var i = 0; i < start; i++) {
//     $('.item').eq(i).css('display', 'block');
//   }

//   $('.lm').on('click', loadMore);

//   function loadMore() {
//     if (colEl - loadedEl < loadPo) loadPo = colEl - loadedEl;
//     for (var i = 1; i <= loadPo; i++) {
//       $('.item').eq(loadedEl).fadeIn(400);
//       loadedEl = loadedEl + 1;
//     }
//     if (colEl - loadedEl === 0) $(this).hide();
//   }
// });



//load more button

$(".item")
  .slice(0, 10) // select the first 2
  .show();
if ($(".item:hidden").length != 0) {
  $("#loadMore").show();
}

$("#loadMore").on("click", function(e) {
  e.preventDefault();
  $(".item:hidden")
    .slice(0, 15) // select next hidden 2 & show them
    .slideDown();
  if ($(".item:hidden").length == 0) { // check if any hidden divs still exist
    $("#loadMore").fadeOut("slow");
  }
});
