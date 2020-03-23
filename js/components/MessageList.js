import MessageListItem from './MessageListItem.js';
import lifecycleLogger from '../mixins/lifecycle-logger.mixin.js';

export default {
	name: 'MessageList',
	template: `<ul>
				<message-list-item v-for="item in items" :item="item" :key="item.id" @on-delete="deleteMessage(item)">
					{{ item.text }} - {{ item.createdAt }}
					<button @click="deleteMessage">X</button>	
				</message-list-item>
			  </ul>`,
	props: {
		items: {
			type: Array,
			required: true
		}
	},
	methods: {
		deleteMessage(msg) {
			this.$emit('on-delete', msg);
		} 
	},
	components: {
		MessageListItem
	},
	mixins: [lifecycleLogger]
};