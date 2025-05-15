<html>
	<head>

	</head>
	<body>

      <?php

            echo "<br> Functions Definition";   
     #1. function with no Arguments
        function  display()
                     {
                           echo " <br>Hello Dear Friend from with infunction";
                     }

     #2.  function with one Argument
        function  gdisplay($greeting)
                  {
                        echo "<br>".$greeting;
                       }

   #3. Function with two arguments 

               function gmdisplay($g,$m)
                {
                  echo "<br>  ".$g."    ".$m;
                    }

  #4. Function Sum

              function sum($g ,$m)
                {

                  $c  = $g+$m;
                  return $c;


               }

#5. Passing Array to the Function
         function asum($aname)
                {
                   $total =0;
                      foreach($aname as $x)
                         {
                            $total = $total +$x;
                           }
                  return $total;

              }
     
               display();   #   Calling the function
               display();
               display();


        gdisplay("Asalamualikum Tasaduq");
         $x ="Hello Kaisar";
     
        gdisplay($x);
       gdisplay("Muzamil Hi");

     echo "<br>-------Output from 3rd Function------";
                  gmdisplay("Asalamu Alaikum","Yawar Work Hard on this Subject");
                   gmdisplay("Hello","Nadeem Dont watch Phone During Class");

      
echo "<br>-----Calling Sum function------";
        $z = sum(10,20);
                  echo "<br>Sum of Two Numbers is ". $z;

             echo "<br>Sum of 50 and 60 is  ".sum(50,60);
             echo  "<br> The reverse of Saika is <b> ".strrev("Saika");


echo "<br> Calling Array Sum----------------";
                 $u = array(10,20,30,50);
                  $t = asum($u);
                 echo "<br> Sum of Elements of Array is".$t;


    ?>   
   
	</body>
</html>