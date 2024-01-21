// app.js
import './bootstrap';
import { createApp, defineComponent } from 'vue';
import ChatComponent from './components/ChatComponent.vue';
import MessageComponent from './components/MessageComponent.vue';

// SweetAlert2 yi import ediyoruz
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

const app = createApp({});

// SweetAlert2'yi Vue uygulamasına özellik olarak ekleme
app.use(VueSweetalert2);

// Component tanımlamalarını register ederken Vue3'de `defineComponent` kullanılır
app.component('chat-component', defineComponent(ChatComponent));
app.component('message-component', defineComponent(MessageComponent));
app.mount('#app');

