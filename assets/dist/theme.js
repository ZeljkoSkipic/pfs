"use strict";

jQuery(document).ready(function ($) {
  // Mobile navigation

  $(".menu-toggle").click(function () {
    $("#primary-menu").fadeToggle();
  });
  $("#primary-menu a").click(function () {
    $("#primary-menu").fadeToggle();
    $(".menu-toggle").prop('checked', false);
  });

  // Sub Menu Trigger

  $("#primary-menu li.menu-item-has-children > a").after('<span class="sub-menu-trigger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></span>');
  $(".sub-menu-trigger").click(function () {
    $(this).parent().toggleClass('sub-menu-open');
    $(this).siblings(".sub-menu").slideToggle();
  });
  var videoElement = document.querySelector('video');
  var playPauseButton = document.querySelector('button');
  playPauseButton.addEventListener('click', function () {
    playPauseButton.classList.toggle('playing');
    if (playPauseButton.classList.contains('playing')) {
      videoElement.play();
    } else {
      videoElement.pause();
    }
  });
  videoElement.addEventListener('ended', function () {
    playPauseButton.classList.remove('playing');
  });
});