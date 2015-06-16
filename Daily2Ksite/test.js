// JavaScript Document

  var images = ['images/genimage3.jpg', 'images/genimage2.jpg', 'images/genimage1.jpg'];
  var step = 0;
  var timer;

  function slide() {
    document.getElementById('slide').src = images[step];

    if (step < 2)
      step += 1;
    else
      step = 0;
	  
    timer = setTimeout(slide, 3000);
  }

  function forceSlide(a) {
	step=a;
    clearTimeout(timer);
    slide();
  }
  slide();

