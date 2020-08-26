window.onscroll = function() {Scroll_Efect()};

var Scroll = document.getElementById("NavbarScrooll");
var Menu = document.getElementById("Menu");
var icon = document.getElementById("iconScroll");
var FormN = document.getElementById("formNabar");


function Scroll_Efect() {
  if(screen.width>700 ){
	  
 if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10 ) {
    // modificador
	Scroll.style.position="fixed";
	// Scroll.style.top=32;
	Scroll.style.top=2;
	Scroll.style.height="60px";
	
	Scroll.style.zIndex = "10";	
	icon.style.display="block";

	
  }
  else {
   //eliminacion del modificador
	Scroll.style.position = 'relative'; 
    Scroll.style.top = 0;
				 
	 icon.style.display="none";
	 	Scroll.style.zIndex = "1";
Scroll.style.height="50px";		
	 


  }
  

}


 

}


/******Navbar movil**********/

function openNav() {
  document.getElementById("Menu").style.height = "100%";
}

function closeNav() {
  document.getElementById("Menu").style.height = "0%";
}