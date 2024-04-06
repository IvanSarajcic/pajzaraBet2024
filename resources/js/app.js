

alert('Hello, Vue!');

import { createApp } from 'vue';
import App from './components/App.vue';
import TeamsComponent from './components/TeamsComponent.vue';
import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  { path: '/teams', component: TeamsComponent }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

const app = createApp(App);
app.use(router);
app.mount('#app');
