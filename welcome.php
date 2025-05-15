   <html>
   <head>
   </head>

   <body>
         

        <?php
       $x = $_GET["name"];
       $y = $_GET["password"];       
     


          if ($x != "shahid" )
             { 
                 echo " Welcome Administerator" . $x ;
       
             }
        else
           {
                echo   $x. " Sorry! You are Not Administrator" ;
           }
?>

   </body>
</html>
