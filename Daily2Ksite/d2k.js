// JavaScript Document loads and functions
<!--

/****************ONLOAD VARIABLES AND STORAGE****************/
//slider vars
  var slider_images = ['images/genimage3.jpg', 'images/genimage2.jpg', 'images/genimage1.jpg'];
  var slider_buttonid = ["button1","button2","button3",]
  var step = 0;
  var prevstep = 2;
  var timer;


/*************************FUNCTIONS*************************/

//slider
  function slide() {
    document.getElementById('slide').src = slider_images[step];
	document.getElementById(slider_buttonid[prevstep]).style.background="#9AB5A1"
	document.getElementById(slider_buttonid[step]).style.background="#CF6"
	prevstep=step;
    if (step < 2)
      step += 1;
    else
      step = 0;
	
    timer = setTimeout(slide, 6000);
  }

  function forceSlide(a) {
	step=a;
    clearTimeout(timer);
    slide();
  }

//box
  function showBoxInfo(a){
	var box_info="box_info"+a;
	document.getElementById(box_info).style.visibility="visible";
  }
  function hideBoxInfo(a){
	var box_info="box_info"+a;
	document.getElementById(box_info).style.visibility="hidden";
  }

//contact form
  function validateForm()
{
var pass=true;
var errorsfound=""
var nm=document.forms["contactform"]["cf_name"].value;
var eml=document.forms["contactform"]["cf_email"].value;
var msg=document.forms["contactform"]["cf_message"].value;
if (nm==null || nm=="")
  {
  errorsfound+=" *Name\n"
  pass=false;
  }
if (eml==null || eml=="")
  {
  errorsfound+=" *Invalid e-mail\n"
  pass=false;
  }
if (msg==null || msg=="")
  {
  errorsfound+=" *Missing message\n"
  pass=false;
  }
  
if (errorsfound!="")
  {
  alert("Please complete the following fields:\n"+errorsfound);
  }
return pass;
}








//-->
