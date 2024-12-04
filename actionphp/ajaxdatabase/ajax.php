<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    // function showuser(str) {
    //     if (str == "") {
    //         document.getElementById("txthint").innerHTML = "";
    //         return;
            
    //     } else {
    //         var xmlhttp = new XMLHttpRequest();
    //         xmlhttp.onreadystatechange = 
    //         function () {
    //                if (this.readyState == 4 && this.status == 200) {
    //                     //document.getElementById("texthint").innerHTML = this.responseText;
    //                     //document.getElementById("txthint").innerHTML = this.responseText;
    //                     document.getElementById("txthint").innerHTML = this.responseText;


    //                       }
                
    //                   };
    //         xmlhttp.open("GET","getuser.php?q="+str,true);
    //         xmlhttp.send();
            
    //     }
        
    // }
    // <script>
    function showuser(str) {
        if (str == "") {
            document.getElementById("txthint").innerHTML = "";
            return;
            
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = 
            function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txthint").innerHTML = this.responseText;
                    
                }
                
            };
            xmlhttp.open("GET","getuser.php?q="+str,true);
            xmlhttp.send();
            
        }
        
    }
    
 
    
</script>
<body>
    <form action="">
        <select name="" id="" onchange="showuser(this.value)">
            <option value="">select person </option>
            <option value="1">peter</option>
            <option value="2">loise</option>
            <option value="3">joseph</option>
            <option value="4">glenn</option>
        </select>
    </form>
    <div id = "txthint"><b>person info will be listed here...</b></div>
</body>
</html>