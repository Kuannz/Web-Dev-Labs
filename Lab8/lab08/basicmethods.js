<!DOCTYPE html>
<html>
<body>

<script>
	for(x = 1; x < 11; x++) {
	   document.write(x);
	   document.write('<br>');
	}



	document.body.style.backgroundColor="red";
    document.write('\n test');

    
    
    
    var str = fjdsfkj;
    for(var x=0; x < str.length;x++) {
        document.write('test \n');
        
    }
    
    
    var str = "How are you doing today?";
    var res = str.split("");
    for(var x=0; x < str.length;x++) {
    if(res[x] === " ") {
        document.write(" <br> ");
    }
    document.write(res[x]);    
    }
    
    
    
    
    function details() {
       var name = 'fsadfa';
       this.name = name;
       
       var email = 'fsdafjdas';
       this.email = email;


  
  		this.changeDetails= function(name, email) {
  			this.name = name;
  			this.email = email;

  		}
    
        
        this.addItems= function() {
            
            var row0 = {name:"John", email:"doe@gmail.com"};
            
            var row1 = {name:"mary", email:"mary@gmail.com"};
            
            var row2 = {name:"ian", email:"ian@gmail.com"};
            


            document.write(row0.name+ " | " + row0.email+"<br>");
            document.write(row1.name+ " | " + row1.email+"<br>");
            document.write(row2.name+ " | " + row2.email+"<br>");
           
        
        }
        this.printInfo = function() {
        	document.write(this.name+ " | "+ this.email);

/*            document.write(row0.name+ " | " + row0.email+"<br>");
            document.write(row1.name+ " | " + row1.email+"<br>");
            document.write(row2.name+ " | " + row2.email+"<br>"); */
        }


        
    }
    
    var testDeat = new details();

    testDeat.addItems();
    testDeat.printInfo();
    testDeat.changeDetails("james", "james@gmail.com");
    
    testDeat.printInfo();
    
    



</script>

</body>
</html>
