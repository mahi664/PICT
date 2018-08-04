<!DOCTYPE html>
<html>
<head>
	<title>Questions Collection</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<script>
	function manage_active(i){
		//alert(i);
		
		document.getElementById("CAF").className="";
		document.getElementById("Hist").className="";
		document.getElementById("geo").className="";
		document.getElementById("eco").className="";
		document.getElementById("poly").className="";
		document.getElementById("sci").className="";

		document.getElementById("CAF").className="nav-link";
		document.getElementById("Hist").className="nav-link";
		document.getElementById("geo").className="nav-link";
		document.getElementById("eco").className="nav-link";
		document.getElementById("poly").className="nav-link";
		document.getElementById("sci").className="nav-link";

		document.getElementById(i).className="nav-link active";


		document.getElementById("CA").style.display="none";
		document.getElementById("history").style.display="none";
		document.getElementById("geography").style.display="none";
		document.getElementById("polity").style.display="none";
		document.getElementById("economy").style.display="none";
		document.getElementById("science").style.display="none";
		if (i == "CAF") {
			document.getElementById("CA").style.display="block";
		}

		if (i == "Hist") {
			document.getElementById("history").style.display="block";
		}	
		if (i == "geo") {
			document.getElementById("geography").style.display="block";
		}	
		if (i == "eco") {
			document.getElementById("economy").style.display="block";
		}	
		if (i == "poly") {
			document.getElementById("polity").style.display="block";
		}		
		if (i == "sci") {
			document.getElementById("science").style.display="block";
		}	
	}




	// Load the Google Transliteration API

  google.load("elements", "1", {

        packages: "transliteration"

      });



  function onLoad() {

    var options = {

      sourceLanguage: 'en',

      destinationLanguage: ['hi'],

      shortcutKey: 'ctrl+m',

      transliterationEnabled: true

    };



    // Create an instance on TransliterationControl with the required

    // options.

    var control =

        new google.elements.transliteration.TransliterationControl(options);



    // Enable transliteration in the textfields with the given ids.

    var ids = [ "language" , "language1", "language2", "language3", "language4", "language5", "language6", "language7", "language8", "language9", "language10", "language11", "language12", "language13", "language14", "language15", "language16", "language17", "language18", "language19", "language20", "language21", "language22", "language23", "language24", "language25", "language26", "language27", "language28", "language29"];

    control.makeTransliteratable(ids);


    // Show the transliteration control which can be used to toggle between

    // English and Hindi and also choose other destination language.

    control.showControl('translControl');

  }
  google.setOnLoadCallback(onLoad);
</script>
<body>

	<!---->
	<h3><center>Questions Collection Portal</center></h3>


	<p style="color: red;">विशिष्ट विषयाचा प्रश्न समाविष्ठ करण्यासाठी पुढे दिलेल्या समबंधित बटनवार क्लिक करा<br><b>(कृपया आपले प्रश्न विषयनिहाय समाविष्ट करावेत.)<br>(मोबाइल वरुन प्रश्न अपलोड करताना कृपया मराठी कीपैडचा उपयोग करावा.)</b></p>
	<div class="container-fluid">
		 <ul class="nav nav-tabs">
		    <li class="nav-item">
		      <a class="nav-link active" id="CAF" onclick="manage_active(this.id)" href="#CAF">चालू घडामोडी</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" id="Hist" onclick="manage_active(this.id)" href="#Hist">इतिहास</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" id="geo" onclick="manage_active(this.id)" href="#geo">भूगोल</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" id="eco" onclick="manage_active(this.id)" href="#eco">अर्थशास्त्र</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" id="poly" onclick="manage_active(this.id)" href="#poly">राज्यशास्त्र </a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" id="sci" onclick="manage_active(this.id)" href="#sci">सामान्य विद्न्यान</a>
		    </li>
  		</ul>

  		<div class="container display_block" style="margin-top: 50px;" id="CA">
  			<form action="submit.php" method="POST">
			  	<div class="form-group">
			    	<label for="email">संपूर्ण व बरोबर प्रश्न:</label>
			    	<textarea class="form-control" name="question" placeholder="तुमचा प्रश्न इथे लिहा...."  rows="6"  id="language" cols="6"></textarea>
			  	</div>
			  	<div class="form-group">
			  		<label>पर्याय:</label>
			    	<input  type="text" name="optionA" class="form-control" placeholder="पर्याय A येथे लिहा..." id="language1">
			  	</div>
			  	<div class="form-group">
			    	<input  type="text" name="optionB" class="form-control" placeholder="पर्याय B येथे लिहा..." id="language2">
			  	</div>
			  	<div class="form-group">
			    	<input  type="text" name="optionC" class="form-control" placeholder="पर्याय C येथे लिहा..." id="language3">
			    </div>
			    <div class="form-group">
			    	<input  type="text" name="optionD" class="form-control" placeholder="पर्याय D येथे लिहा..." id="language4">
			  	</div>
			  	<div class="form-group">
			  		<label>बरोबर उत्तराचा पर्याय निवडा:</label>
			    	<select class="form-control" name="correctopt">
			    		<option value="A">पर्याय A</option>
			    		<option value="B">पर्याय B</option>
			    		<option value="C">पर्याय C</option>
			    		<option value="D">पर्याय D</option>
			    	</select>
			  	</div>
			  
			  <button type="submit" name="current-affair" class="btn btn-primary">प्रश्न सबमिट करा </button>
			</form>
  			
  		</div>

  		<div class="container hide_block" style="margin-top: 50px;" id="history">
  			<form action="submit.php" method="POST">
			  	<div class="form-group">
			    	<label for="email">संपूर्ण व बरोबर प्रश्न:</label>
			    	<textarea class="form-control" name="question" placeholder="तुमचा प्रश्न इथे लिहा...."  rows="6"  id="language5" cols="6"></textarea>
			  	</div>
			  	<div class="form-group">
			  		<label>पर्याय:</label>
			    	<input  type="text" name="optionA" class="form-control" placeholder="पर्याय A येथे लिहा..." id="language6">
			  	</div>
			  	<div class="form-group">
			    	<input  type="text" name="optionB" class="form-control" placeholder="पर्याय B येथे लिहा..." id="language7">
			  	</div>
			  	<div class="form-group">
			    	<input  type="text" name="optionC" class="form-control" placeholder="पर्याय C येथे लिहा..." id="language8">
			    </div>
			    <div class="form-group">
			    	<input  type="text" name="optionD" class="form-control" placeholder="पर्याय D येथे लिहा..." id="language9">
			  	</div>
			  	<div class="form-group">
			  		<label>बरोबर उत्तराचा पर्याय निवडा:</label>
			    	<select class="form-control" name="correctopt">
			    		<option value="A">पर्याय A</option>
			    		<option value="B">पर्याय B</option>
			    		<option value="C">पर्याय C</option>
			    		<option value="D">पर्याय D</option>
			    	</select>
			  	</div>
			  
			  <button type="submit" name="History" class="btn btn-primary">प्रश्न सबमिट करा</button>
			</form>
  			
  		</div>

  		<div class="container hide_block" style="margin-top: 50px;" id="geography">
  			<form action="submit.php" method="POST">
			  	<div class="form-group">
			    	<label for="email">संपूर्ण व बरोबर प्रश्न:</label>
			    	<textarea class="form-control" name="question" placeholder="तुमचा प्रश्न इथे लिहा...."  rows="6"  id="language10" cols="6"></textarea>
			  	</div>
			  	<div class="form-group">
			  		<label>पर्याय:</label>
			    	<input  type="text" name="optionA" class="form-control" placeholder="पर्याय A येथे लिहा..." id="language11">
			  	</div>
			  	<div class="form-group">
			    	<input  type="text" name="optionB" class="form-control" placeholder="पर्याय B येथे लिहा..." id="language12">
			  	</div>
			  	<div class="form-group">
			    	<input  type="text" name="optionC" class="form-control" placeholder="पर्याय C येथे लिहा..." id="language13">
			    </div>
			    <div class="form-group">
			    	<input  type="text" name="optionD" class="form-control" placeholder="पर्याय D येथे लिहा..." id="language14">
			  	</div>
			  	<div class="form-group">
			  		<label>बरोबर उत्तराचा पर्याय निवडा:</label>
			    	<select class="form-control" name="correctopt">
			    		<option value="A">पर्याय A</option>
			    		<option value="B">पर्याय B</option>
			    		<option value="C">पर्याय C</option>
			    		<option value="D">पर्याय D</option>
			    	</select>
			  	</div>
			  
			  <button type="submit" name="Geography" class="btn btn-primary">प्रश्न सबमिट करा</button>
			</form>
  			
  		</div>

  		<div class="container hide_block" style="margin-top: 50px;" id="economy">
  			<form action="submit.php" method="POST">
			  	<div class="form-group">
			    	<label for="email">संपूर्ण व बरोबर प्रश्न:</label>
			    	<textarea class="form-control" name="question" placeholder="तुमचा प्रश्न इथे लिहा...."  rows="6"  id="language15" cols="6"></textarea>
			  	</div>
			  	<div class="form-group">
			  		<label>पर्याय:</label>
			    	<input  type="text" name="optionA" class="form-control" placeholder="पर्याय A येथे लिहा..." id="language16">
			  	</div>
			  	<div class="form-group">
			    	<input  type="text" name="optionB" class="form-control" placeholder="पर्याय B येथे लिहा..." id="language17">
			  	</div>
			  	<div class="form-group">
			    	<input  type="text" name="optionC" class="form-control" placeholder="पर्याय C येथे लिहा..." id="language18">
			    </div>
			    <div class="form-group">
			    	<input  type="text" name="optionD" class="form-control" placeholder="पर्याय D येथे लिहा..." id="language19">
			  	</div>
			  	<div class="form-group">
			  		<label>बरोबर उत्तराचा पर्याय निवडा:</label>
			    	<select class="form-control" name="correctopt">
			    		<option value="A">पर्याय A</option>
			    		<option value="B">पर्याय B</option>
			    		<option value="C">पर्याय C</option>
			    		<option value="D">पर्याय D</option>
			    	</select>
			  	</div>
			  
			  <button type="submit" name="Economy" class="btn btn-primary">प्रश्न सबमिट करा</button>
			</form>
  			
  		</div>

  		<div class="container hide_block" style="margin-top: 50px;" id="polity">
  			<form action="submit.php" method="POST">
			  	<div class="form-group">
			    	<label for="email">संपूर्ण व बरोबर प्रश्न:</label>
			    	<textarea class="form-control" name="question" placeholder="तुमचा प्रश्न इथे लिहा...."  rows="6"  id="language20" cols="6"></textarea>
			  	</div>
			  	<div class="form-group">
			  		<label>पर्याय:</label>
			    	<input  type="text" name="optionA" class="form-control" placeholder="पर्याय A येथे लिहा..." id="language21">
			  	</div>
			  	<div class="form-group">
			    	<input  type="text" name="optionB" class="form-control" placeholder="पर्याय B येथे लिहा..." id="language22">
			  	</div>
			  	<div class="form-group">
			    	<input  type="text" name="optionC" class="form-control" placeholder="पर्याय C येथे लिहा..." id="language23">
			    </div>
			    <div class="form-group">
			    	<input  type="text" name="optionD" class="form-control" placeholder="पर्याय D येथे लिहा..." id="language24">
			  	</div>
			  	<div class="form-group">
			  		<label>बरोबर उत्तराचा पर्याय निवडा:</label>
			    	<select class="form-control" name="correctopt">
			    		<option value="A">पर्याय A</option>
			    		<option value="B">पर्याय B</option>
			    		<option value="C">पर्याय C</option>
			    		<option value="D">पर्याय D</option>
			    	</select>
			  	</div>
			  
			  <button type="submit" name="Polity" class="btn btn-primary">प्रश्न सबमिट करा</button>
			</form>
  			
  		</div>

  		<div class="container hide_block" style="margin-top: 50px;" id="science">
  			<form action="submit.php" method="POST">
			  	<div class="form-group">
			    	<label for="email">संपूर्ण व बरोबर प्रश्न:</label>
			    	<textarea class="form-control" name="question" placeholder="तुमचा प्रश्न इथे लिहा...."  rows="6"  id="language25" cols="6"></textarea>
			  	</div>
			  	<div class="form-group">
			  		<label>पर्याय:</label>
			    	<input  type="text" name="optionA" class="form-control" placeholder="पर्याय A येथे लिहा..." id="language26">
			  	</div>
			  	<div class="form-group">
			    	<input  type="text" name="optionB" class="form-control" placeholder="पर्याय B येथे लिहा..." id="language27">
			  	</div>
			  	<div class="form-group">
			    	<input  type="text" name="optionC" class="form-control" placeholder="पर्याय C येथे लिहा..." id="language28">
			    </div>
			    <div class="form-group">
			    	<input  type="text" name="optionD" class="form-control" placeholder="पर्याय D येथे लिहा..." id="language29">
			  	</div>
			  	<div class="form-group">
			  		<label>बरोबर उत्तराचा पर्याय निवडा:</label>
			    	<select class="form-control" name="correctopt">
			    		<option value="A">पर्याय A</option>
			    		<option value="B">पर्याय B</option>
			    		<option value="C">पर्याय C</option>
			    		<option value="D">पर्याय D</option>
			    	</select>
			  	</div>
			  
			  <button type="submit" name="Science" class="btn btn-primary">प्रश्न सबमिट करा</button>
			</form>
  			
  		</div>
	</div>
	<footer class="footer" style="background-color: gray; width: 100%; position: relative; margin-top: 10px; bottom: 0;">
		<center style="color: white;">&copy Developed by D Developers<br>For technical queries contact D Developers: 8600429732/9284493836</center>
	</footer>
</body>
</html>