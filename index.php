<!DOCTYPE html>
<html>	
<head>
	<meta charset="utf-8">
	<title>VUE2 and SPRING5</title>
	
	<link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">		
	<link rel="stylesheet" type="text/css" href="css/main.css" />		
</head>
<body>
	
	<div class="main">
		<div id="app" v-cloak>
			<!-- Vue stuff  : is short for v-bind  @ - v-on  -->
		
			<!-- Define 'MessageList' Vue component -->
			<message-list v-bind:items="messages" @on-delete="deleteMessage"></message-list>
			<!-- <ul>
				<li v-for="msg in messages">
					{{ msg.text }} - {{ msg.createdAt }}
					<button @click="deleteMessage">X</button>	
				</li>
			</ul> -->
			
			<form v-on:submit.prevent="addMessage">
				<textarea v-model="newMessage" placeholder="Leave a message"></textarea>
				<div>	
					<button type="submit" v-bind:disabled="disableNewMessages">Add</button>
				</div>		
			</form>		

		</div>		  
	</div>
		
	<footer><a href="/learnVue">Home</a></footer>	
	
<script type="text/javascript" src="vendor/vue2-6-11.js"></script>
<script type="module" src="js/main.js"></script>
	
</body>
</html>	