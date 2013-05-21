
var preloadedimages = new Array() ; 
var cpAD=new Array();
var cpADlink=new Array();
var cpADmsg=new Array();
var adNum=5; 
var coll=0;
cpAD[1]="images/banner1.jpg";
cpADlink[1]="";
cpADmsg[1]=""; 
cpAD[2]="images/banner2.jpg";
cpADlink[2]="";
cpADmsg[2]="";
cpAD[3]="images/banner3.jpg";
cpADlink[3]="";
cpADmsg[3]="";
cpAD[4]="images/banner4.jpg";
cpADlink[4]="";
cpADmsg[4]="";
cpAD[5]="images/banner5.jpg";
cpADlink[5]="";
cpADmsg[5]="";

for( i=1 ; i<cpAD.length ; i++ ) { 
	preloadedimages[i] = new Image() ; 
	preloadedimages[i].src = cpAD[i] ; 
} 
function jump2url() { 
	jumpUrl = cpADlink[adNum] ; 
	jumpTarget = '_blank' ; 
	if( jumpUrl != '' )
	{ 
		if(	jumpTarget != '' )
			window.open(jumpUrl,jumpTarget) ; 
		else location.href = jumpUrl ; 
	} 
}
function nextAd() {
	if(adNum<cpAD.length-1)
	{
		document.images.cpADrush.src=cpAD[adNum]; 
		adNum++ ; 
	}
	else 
	{
		adNum=1;
		document.images.cpADrush.src=cpAD[adNum]; 
	}
	setTransition() ;
	document.images.cpADrush.src=cpAD[adNum] ; 
	playTransition() ; 
	displayStatusMsg() ;
	theTimer = setTimeout("nextAd()", 5000) ; 
}
function setTransition()
{ 
	if (document.all)
	{ 
		document.images.cpADrush.filters.revealTrans.Transition=23; 
		document.images.cpADrush.filters.revealTrans.apply(); 
	} 
}
function playTransition()
{ 
	if (document.all) 
	document.images.cpADrush.filters.revealTrans.play() 
}
function displayStatusMsg() 
{ 
	status = cpADmsg[adNum] ; 
	document.returnValue = true; 
}
