window.onscroll = function() {Scroll_Efect()};

var Scroll = document.getElementById("NavbarScrooll");
var Menu = document.getElementById("Menu");
var icon = document.getElementById("iconScroll");
var FormN = document.getElementById("formNabar");


function Scroll_Efect() {
  if(screen.width>700 ){
	  
 if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50 ) {
    // modificador
	Scroll.style.position="fixed";
	Scroll.style.top=0;
	Scroll.style.zIndex = "1";
	
	icon.style.display="block";
	// Menu.style.marginTop="5px";
	
	// FormN.style.marginTop="16px";
	
	
	// icon.style.backgroundImage = "url('./asset/img/Logo-s.png')";
	// icon.style.backgroundRepeat = "no-repeat";
	// Scroll.style.backgroundPosition = "center left";
	// icon.style.backgroundSize = "100px 100px";
	// Scroll.style.borderBottom = "1px solid grey";

	 
	
  }
  else {
   //eliminacion del modificador
	 Scroll.style.position = 'relative'; 
     Scroll.style.top = 100;
				 
	 icon.style.display="none";
	 
	 // Menu.style.marginTop="2px";
	 
	 // FormN.style.marginTop="40px";
	 
	 
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