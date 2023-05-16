import './bootstrap';
import { createApp } from 'vue';
import axios from "axios";
import App from './App.vue';
import router from "./router";
import VueScrollTo from 'vue-scrollto'
const app = createApp(App);
app.use(VueScrollTo)
app.config.globalProperties.axios = axios
app.use(router)
app.mount('#app')
