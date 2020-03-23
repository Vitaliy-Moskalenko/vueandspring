import lifecycleLogger from '../mixins/lifecycle-logger.mixin.js';

export default {
	name: 'MessageListItem',
	template: '<li>{{ item.text }} - {{ item.createdAt | datetime }}<button @click="deleteClicked">X</button></li>',	
	props: {
		item: {
			type: Object,
			required: true
		}
	},
	methods: {
		deleteClicked() {
			this.$emit('on-delete');
		}
	},
	mixins: [lifecycleLogger]
};