<!DOCTYPE html>
<html>	
	<head>
		<meta charset="utf-8">
		<title>VUE2 and SPRING5</title>
		
		<link rel="stylesheet" type="text/css" href="css/main.css" />		
	</head>
	<body>
	
	  <div class="main">
		<div id="app">
		
			<ul>
				<li v-for="msg in messages">
					{{ msg.text }} - {{ msg.createdAt }}				
				</li>
			</ul>
			<form v-on:submit.prevent="addMessage">
				<textarea v-model="newMessage"
					placeholder="Leave a message"				
				></textarea>
			
			
			</form>
		
		
		
		

		</div>		  
	  </div>
		
	  <footer><a href="/learnVue">Home</a></footer>	
	
<script type="text/javascript" src="js/vue2-6-11.js"></script>
<script type="text/javascript">
	let viewModel = new Vue({
		el:   '#app',
		data: {
			messages:   [],
			newMessage: ''
		}
	});


</script>
	
	</body>
</html>	