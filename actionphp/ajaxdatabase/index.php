<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        function showuser(str) {
            if (str  == "") {
                document.getElementById("texthint").innerHTML = "";
            } else {
                //xml http  object
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = 
                function () {
                    if (this.readyState == 4 && this.status ==200) {
                        document.getElementById("txthint").innerHTML = this.responseText;
                        
                    }
                    
                };
                xmlhttp.open("GET","getuser.php?q="+str,true);
                xmlhttp.send();
                
            }
            
        }
    </script>
    <form action="">
        <select name="users" id="" onchange="showuser(this.value)" >
            <option value="">select person</option>
            <option value="1">peter griffin</option>
            <option value="2">lois griffin</option>
            <option value="3">joseph swanson</option>
            <option value="4">glenn quegmire</option>
        </select>
    </form>
    <br>
    <div id="txthint"><b> person info will be listed here...</b></div>
</body>
</html>