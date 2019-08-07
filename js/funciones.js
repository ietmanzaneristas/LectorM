$('.container').hide();

$(function () {
  //noSleep.enable(); // keep the screen on!
  console.log("ready...");
  $('.preloaderdiv').hide();
  $('.container').fadeIn('fast');
  M.AutoInit();
  $('.carousel').carousel({
    fullWidth: true,
    indicators: true
  });
});