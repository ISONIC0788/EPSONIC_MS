function disdb(){
    var x=document.getElementById('myDIV');
    if (x.style.display==='block') {
       x.style.display='none'; 
    } 
    else
    {
     x.style.display='block';   
    }
}

function mydt(){
    document.getElementById('li1').style.backgroundColor='skyblue';
    var dic=document.getElementById('div');
    if ((dic.style.display==='block') ==true) {
        dic.style.display='none';
        
    }else{
        console.log('you have error in you code ')
    }
    
}
function myfuction()
{
    var p=document.getElementById('mypass');
    if (p.type==="password") {
        p.type="text";
    }else{
        p.type="password";
    }
}
function myshow() {
    var x =document.getElementById('p1');
     var y =document.getElementById('p2');
    if ((x.type==="password")||(y.type==="password")) {
        x.type="text";
        y.type="text";
    } else {
        x.type="password";
        y.type="password";
    }
}
//DRG DIV
dragElement(document.getElementById('mydiv'));
function dragElement(elmnt)
{
    var pos1 = 0 ,pos2 = 0 ,pos3 = 0 ,pos4 = 0 ;
    if (document.getElementById(elmnt.id + "header")) {
        document.getElementById(elmnt.id + "header" ).onmousedown =dragMouseDown; 
    }else{
        elmnt.onmousedown = dragMouseDown;
    }
    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        pos3 = e.clientX;
        pos4 = e.cientY;
        document.onmouseup = closeDragElement;
        document.onmousemove = elementDrag;
    }
   function elementDrag(e){
    e = e || window.event; 
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";  
   }
   function closeDragElement(){
       document.onmouseup = null;
       document.onmousemove = null;
   }

}
function changeFont(str) {
    switch (str) {
        case "32%" :
             document.getElementById("allcont").style.fontSize = "8px";
            break;
            case "42%" :
             document.getElementById("allcont").style.fontSize = "12px";
            break;
            case "52%" :
             document.getElementById("allcont").style.fontSize = "13px";
            break;
        default:
            break;
    }
    
}

