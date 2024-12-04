<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="../css/loader.css">
<body>
    <div id="mydiv">
      <div id="mydivheader">
        table design
      </div>
      <p>130450</p>
      <p>453</p>
    </div>
</body>
</html>
<script>
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
</script>