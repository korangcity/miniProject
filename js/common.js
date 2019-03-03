// JavaScript Document



function rand(start,end){
	var r=start+Math.floor(Math.random()*(end-start));
	return r;
	
	}
//*****************************************************
	
	/*function print(string){
		document.write(string+"<br>");
		
		
		}*/
//*****************************************************
function nicePrint(){
	
	for(var i in arguments){
		
		var temp=arguments[i];
		if(typeof temp==="object"){
			document.write("{");
			for(var j in temp){
				
				document.write(j+ ":" +temp[j]);
				if (j!==temp.length-1){
					document.write(",");
					
					}
				}
				document.write("}");}
		else{			
		document.write(temp+"&nbsp; &nbsp;");}
		}
	document.write("<br>");
	}
	

//*******************************************************
/*var originalPrint=print;
print=function(){
	
	if (confirm("Are you sure to print this page?")){
		
		return originalPrint();
		}
	return false;
	}
print();*/

//********************************************************

function pow(x,n){
	
	if(n==0)
	return 1;
	return x*pow(x,n-1);
	
	}
//nicePrint("2^5=" + pow(2,5))
//nicePrint("3^3=" + pow(3,3))

//*****************************************************

		function myFadeIn(elem){
	
	var elemOpacity=Number(getComputedStyle(elem).opacity).toPrecision(3);	
		elem.style.opacity=elemOpacity;
		if(elemOpacity>=1){
			return;
		}
		
		elem.style.opacity=Number(elemOpacity)+0.01;
		setTimeout(function(){
			myFadeIn(elem);
			
		},10)
		
		
	}
function myFadeOut(elem){
	//elem.style.opacity=0;	
	var elemOpacity=Number(getComputedStyle(elem).opacity).toPrecision(3);	
		elem.style.opacity=elemOpacity;
		if(elemOpacity<=0){
			return;
		}
		
		elem.style.opacity=Number(elemOpacity)-0.01;
		setTimeout(function(){
			myFadeOut(elem);
			
		},10)
		
	}
	
	Element.prototype.fadeIn=function(){
	myFadeIn(this);	}
		
		Element.prototype.fadeOut=function(){
	myFadeOut(this);}	
		
//*****************************************************
		function smoothScrollTo(yPos){
		var step=20;
		if(yPos<scrollY){
		step*=-1;	
			
		}
		if(Math.abs(yPos-scrollY)<=step){
		return;	
		}
		window.scrollBy(0,step);
		setTimeout(function(){
			smoothScrollTo(yPos)
			
		},1);
		
		
	}
	





















