import MessageList from './components/MessageList.js';


const MESSAGES_LIMIT         = 3;
const MESSAGES_LENGTH_LIMIT = 50;


let vm = new Vue({
	el:   '#app',
	data: {		
		messages:   [],
		newMessage: ''
	},
	computed: {
		disableNewMessages() {
			return this.messages.length >= MESSAGES_LIMIT || this.newMessage.length > MESSAGES_LENGTH_LIMIT; 
		}			
	},
	methods: {
		addMessage(e) {
			if(!this.newMessage) return;
			
			let now = new Date();
			
			this.messages.push({
				id:        now.getTime(),
				text:      this.newMessage,
				createdAt: now					
			});
			this.newMessage = '';
		},
		deleteMessage(msg) {
			this.messages.splice(this.messages.indexOf(msg));
		}
		
	},
	components: {
		MessageList
	}	
});