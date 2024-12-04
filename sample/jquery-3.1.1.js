$(document).ready(function(){
    $error = $('<center><label style = "color:#ff0000;">Invalid username or password</label></center>');
    $error2 = $('<center><label style = "color:#ff0000;">User not found!</label></center>');
    $success = $('<center><label style = "color:#00ff00;">Successfully login!</label></center>');
    $loading = $('<center><img src = "loading.gif" height = "5px" width = "100%"/></center>');
      $('#login').on('click', function(){
        $error.remove();
        $error2.remove();
        $username = $('#username').val();
        $password = $('#password').val();
        if($username == "" && $password == ""){
          $error.appendTo('#result');
        }else{
          $loading.appendTo('#result');
          setTimeout(function(){
          $loading.remove();
          $.post('validator.php', {username: $username, password: $password},
            function(result){
            if(result == "Success"){
              $('#username').val('');
              $('#password').val('');
              $success.appendTo('#result');
              setTimeout(function(){
                $success.remove();
                  window.location = 'home.php';
               }, 1000);
                  }else{
                $('#username').val('');
                $('#password').val('');
                $error2.appendTo('#result');
              }
                }
              ) 
            }, 3000);   
              }
          });
    });