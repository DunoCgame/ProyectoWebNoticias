// var ContenedorArticulos=document.getElementById("ContenedorArticulos");

// var ContenedorArticulos=document.getElementsByClassName("section_article");

// for(var E = 0; E < ContenedorArticulos.length; E++){
	
	// console.log("contenedor"+" "+ContenedorArticulos.length+"|"+E);
	
		
	// var ArticulosImpar = ContenedorArticulos[E].getElementsByClassName("article");
	// var ImgImpar = ContenedorArticulos[E].getElementsByClassName("article");
	
	// if(ArticulosImpar.length%2==1 && ArticulosImpar.length>3 ){
		
	// if(ArticulosImpar.length%2!=0){ /*impar*/
		// ArticulosImpar[ArticulosImpar.length-1].className += " Impar_Articulo";
		// }
		
		// if(ArticulosImpar.length%2==0){ /*par*/
		// ArticulosImpar[ArticulosImpar.length-1].className += " Impar_Articulo";
		//  https://www.w3schools.com/cssref/sel_nth-child.asp}
		

// for(var i = 0; i < ArticulosImpar.length; i++){ 
		// if(ArticulosImpar[i]%2==0){  ArticulosImpar[i].className += " Impar_Articulo";	}
	// /* console.log("articulo"+" "+i); 	*/	 	 }
	
	
// }
// var ArticulosImpar = document.getElementsByClassName("article");

 
 // if(ArticulosImpar.length%2==1){
	
	 // ArticulosImpar[ArticulosImpar.length-1].style.background = "red";	
	 
 // }
 
 

 
var AgregarActive = document.getElementsByClassName("link")[0].style.background="red";
 
var Menu = document.getElementById("Menu_Action");
var item = Menu.getElementsByClassName("link");
			
for(var i = 0; i < item.length; i++){
	  item[i].addEventListener("click", function(){
			var current = document.getElementsByClassName("active");
			current[0].className = current[0].className.replace("active", "");
			this.className += " active";
	  });
	  
}