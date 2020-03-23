// https://vuejs.org/v2/guide/custom-directive.html
Vue.directive('focus', {
	// When the bound element is inserted into the DOM
	inserted: function(el) {
		el.focus();
	}
});