<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    function showuser(str) {
        if (str == "") {
            document.getElementById("texthint").innerHTML = "";
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange =
             function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("texthint").innerHTML = this.responseText;
                    
                }
                
            }
            xmlhttp.open("GET","getuser.php?q="+str,true);
            xmlhttp.send();
        }
        
    }

</script>
<body>
    <select name="" id="" onchange="showuser(this.value)">
    <option value="">select person</option>
            <option value="1">peter griffin</option>
            <option value="2">lois griffin</option>
            <option value="3">joseph swanson</option>
            <option value="4">glenn quegmire</option>
    </select>
    <div id="texthint">
     user well be listed here
    </div>
    <p id="demo"></p>
    <script>
        try {
            const pi = 3999999.000044;
        pi = 2333;
        pi = pi +10
        } catch (error) {
            document.write(error);

        }
        var date = new Date();
        var dat = Date.now("YYYY-mm");
        document.getElementById("demo").innerHTML = date.getFullYear();
        document.write(date.getFullYear());
        document.write(Date());
        
        
    </script>
</body>
</html>