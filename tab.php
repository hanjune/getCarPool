<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		//CSS Tab
		.tabs {
		  position: relative;   
		  min-height: 200px; /* This part sucks */
		  clear: both;
		  margin: 25px 0;
		}
		.tab {
		  float: left;
		}
		.tab label {
		  background: #eee; 
		  padding: 10px; 
		  border: 1px solid #ccc; 
		  margin-left: -1px; 
		  position: relative;
		  left: 1px; 
		}
		.tab [type=radio] {
		  display: none;   
		}
		.content {
		  position: absolute;
		  top: 28px;
		  left: 0;
		  background: white;
		  right: 0;
		  bottom: 0;
		  padding: 20px;
		  border: 1px solid #ccc; 
		}
		[type=radio]:checked ~ label {
		  background: white;
		  border-bottom: 1px solid white;
		  z-index: 2;
		}
		[type=radio]:checked ~ label ~ .content {
		  z-index: 1;
		}
	</style>
</head>
<body>
<div class="box">
	<div class="tabs">
		<div class="tab">
		   <input type="radio" id="tab-1" name="tab-group-1" checked>
		   <label for="tab-1">HELP CAT</label>
		   
		   <div class="content">
		       Driver Available 1
		   </div> 
		</div>

		<div class="tab">
		   <input type="radio" id="tab-2" name="tab-group-1">
		   <label for="tab-2">HELP U</label>
		   
		   <div class="content">
		       Driver Available 2
		   </div> 
		</div>

		<div class="tab">
		   <input type="radio" id="tab-3" name="tab-group-1">
		   <label for="tab-3">UM</label>
		 
		   <div class="content">
		       Driver Available 3
		   </div> 
		</div>
	</div>
</div>
</body>
</html>
