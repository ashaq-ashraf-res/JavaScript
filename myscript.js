function myFunction() 
   {
         document.getElementById('myImage').src ='Rahul.jpg';
		 
		var  x ;
		
		for ( x=0 ; x<10 ;x++ )  // start , step , End 
		{
			document.write("10 x  ");
			document.write(x);
			document.write(" = ");
			document.writeln(10*x);
			
			//document.writeln();
		}
   
   
   
      var round = 0 ; // start
	  
	  while (round<10   )  //conditon to end
		  
	  {
		     document.write("Round Completed");
			 round++;  // step
	  }	


     var counter = 10;
     do{
        document.write("Hello Do While");
		counter++; 
	  }while(counter < 50);


		 
   }
   
   
   
   ///  New function will be defined 
   
   function condition()
   {
	   
	      var x ;
		  var iseven;
		  //x=20;
		  x = prompt("Enter first Number") ;
		  if (x%2==0)  
			  
		     iseven =true;
		  else
			  iseven = false;
		  
		  if (iseven)
		  {
			  alert("Number is Even");
		  }
		  else
		  {
			  
			  alert("Number is Odd");
		  }
	   
   }
   
   function greatest()
   {
	 var a ;
     var b;	
     var c;	 
	 
	 
	 
	 a = prompt("Enter First Number");
	 b = prompt("Eneter Second Number");
	 c = prompt("Enter Third Number");
	 
	 
	 
	 //  Ist compare a and back
	 
	 if(a > b)
	 {
		 if(a>c)
		 {
			 alert(a +" is greatest");
		 }
		 else
		 {
			 alert(c+ " is greatest");
		 }
			 
	 }
	 
	 else
	 {
		 if(b>c)
		 {
			 alert(b + " is greatest");
		 }
		 else
		 {
			 alert(c+ " is greatest");
		 }
		 
	 }
	 
	   
   }
   
   
   /// mySwitch functions starts here
   
   function mySwitch()
   {
	   var choice;
	   
	   while (true)
	   {
	   choice = prompt("1-condition,2-greatest ,3- exit");
	   switch(choice)
	   {
		   
		   case "1" :
		            condition();
					break;
		   
		   case "2" :
		             greatest();
					 break;
		   
		   case "3":
		             break;
	   }
	   
	   if (choice == "3")
		  break;
	   }
	   
   }
   
   
   
      
   
 
        function addNumbers() 
		{
            // Get the values from the text boxes
            var num1 = parseFloat(document.getElementById("number1").value);
            var num2 = parseFloat(document.getElementById("number2").value);
        
            /* 
			Validate input (optional)
            if (isNaN(num1) || isNaN(num2)) {
                alert("Please enter valid numbers!");
                return;
            }
			*/

            // Perform the addition
            var sum = num1 + num2;
            document.getElementById("resultbox").value = sum;
            // Display the result
            var resultElement = document.getElementById("result");
            //resultElement.textContent = "The sum of " + num1 + " and " + num2 + " is: " + sum;
		}
		
		
		function subNumbers() 
		{
            // Get the values from the text boxes
            var num1 = parseFloat(document.getElementById("number1").value);
            var num2 = parseFloat(document.getElementById("number2").value);
             
            /* 
			Validate input (optional)
            if (isNaN(num1) || isNaN(num2)) {
                alert("Please enter valid numbers!");
                return;
            }
			*/

            // Perform the addition
            var sum = num1 - num2;
            document.getElementById("resultbox").value = sum;
            // Display the result
            var resultElement = document.getElementById("result");
           // resultElement.textContent = "The diff of " + num1 + " and " + num2 + " is: " + sum;
		}