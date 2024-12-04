<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/users.css">
    <link rel="stylesheet" href="../css/users2.css">
</head>
<body>
    <div class="table-container">
    <table border="1px" >
        <tr class="cont-table-haeder">
            <th>id</th>
            <th>username</th>
            <th>userEmail</th>
            <th>userDate</th>
            <th>usernumber</th>
            <th>userGender</th>
            <th>action </th>
        </tr>
        <?php
         $servernam='localhost';
         $user='root';
         $password='';
         $conn=new mysqli($servernam,$user,$password);
         $sql=mysqli_select_db($conn,"isonic");
         $mysqli=$conn->query("SELECT * FROM users");
         while ($rows=mysqli_fetch_array($mysqli)) {
             $id=$rows['0'];
             echo '<tr>';
             echo"<td>".$id."</td>";
             echo"<td>".$rows['1']."</td>";
             echo"<td>".$rows['3']."</td>";
             echo"<td>".$rows['4']."</td>";
             echo"<td>".$rows['5']."</td>";
             echo"<td>".$rows['6']."</td>";
    echo"<td><a href='../delete.php?id=$id'><button class='button1'>
    <svg width='40px' height='20px' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg' stroke='blue'>

<g id='SVGRepo_bgCarrier' stroke-width='0'/>

<g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'/>

<g id='SVGRepo_iconCarrier'> <path d='M13 3H7C5.89543 3 5 3.89543 5 5V10M13 3L19 9M13 3V8C13 8.55228 13.4477 9 14 9H19M19 9V19C19 20.1046 18.1046 21 17 21H10C7.79086 21 6 19.2091 6 17V17C6 14.7909 7.79086 13 10 13H13M13 13L10 10M13 13L10 16' stroke='' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/> </g>

</svg>
    
 
    </button></a>&nbsp;&nbsp;<a href='../actionphp/delete.php?id=$id'><button class='button2'>
    <svg fill='red' height='20px' width='40px' version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 297 297' xml:space='preserve' stroke='red'><g id='SVGRepo_bgCarrier' stroke-width='0'></g><g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g><g id='SVGRepo_iconCarrier'> <g> <g> <g> <path d='M150.333,203.762c0-32.35,26.317-58.667,58.667-58.667c6.527,0,12.8,1.087,18.669,3.063l4.882-58.587H47.163 l14.518,174.21C63.233,282.408,79.091,297,97.784,297h84.147c18.692,0,34.551-14.592,36.103-33.219l0.173-2.081 c-3.001,0.475-6.075,0.729-9.207,0.729C176.651,262.429,150.333,236.112,150.333,203.762z'></path> <path d='M209,158.714c-24.839,0-45.048,20.209-45.048,45.048c0,24.839,20.209,45.048,45.048,45.048s45.048-20.209,45.048-45.048 C254.048,178.923,233.839,158.714,209,158.714z M231.101,216.232c2.659,2.66,2.659,6.971,0,9.631 c-1.33,1.329-3.073,1.994-4.816,1.994c-1.742,0-3.486-0.665-4.816-1.994L209,213.393l-12.47,12.47 c-1.33,1.329-3.073,1.994-4.816,1.994c-1.742,0-3.486-0.665-4.816-1.994c-2.659-2.66-2.659-6.971,0-9.631l12.47-12.47 l-12.47-12.47c-2.659-2.66-2.659-6.971,0-9.631c2.66-2.658,6.971-2.658,9.631,0l12.47,12.47l12.47-12.47 c2.661-2.658,6.972-2.658,9.632,0c2.659,2.66,2.659,6.971,0,9.631l-12.47,12.47L231.101,216.232z'></path> <path d='M112.095,26.102c0-6.883,5.6-12.483,12.483-12.483h30.556c6.884,0,12.484,5.6,12.484,12.483v8.507h13.619v-8.507 C181.238,11.71,169.528,0,155.135,0h-30.556c-14.392,0-26.102,11.71-26.102,26.102v8.507h13.618V26.102z'></path> <path d='M236.762,63.643c0-8.5-6.915-15.415-15.415-15.415H58.367c-8.5,0-15.415,6.915-15.415,15.415v12.31h193.81V63.643z'></path> </g> </g> </g> </g></svg>
    
    </button></a></td>";
             echo"</tr>";
             
         }
        //check connection
        //  if (!$conn) {
        //    echo'is  not connected';
        // }
          
        
        
        ?>
    </table>
    


    </div>
   
</body>
</html>

<!-- svg2 -->
