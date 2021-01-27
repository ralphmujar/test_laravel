import Vue from 'vue';
import App from './components/App';
import router from './router';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify, {
	iconfont: 'md'
});

const app = new Vue({
	el: '#app',
	router,
	render: h => h(App),
	vuetify: new Vuetify()
});
