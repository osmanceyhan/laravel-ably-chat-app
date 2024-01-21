import 'bootstrap';  // bootstrap.js'yi içe aktar
import Ably from 'ably'

// Ably'i import ederiz.
window.Ably = Ably;

import Echo from '@ably/laravel-echo';
import axios from 'axios';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Ably broadcaster'ı için yeni bir Echo istemcisi oluşturuyoruz.
window.Echo = new Echo({
    broadcaster: 'ably',
});

// Bağlantı durumlarını listelemek için bir connection kaydedelim.
window.Echo.connector.ably.connection.on((stateChange) => {
    console.log("Log:: Bağlantı başarılı event:: ", stateChange);
    if (stateChange.current === 'disconnected' && stateChange.reason?.code === 40142) {
        console.log("Log: Bağlantı süresi doldu!");
    }
});
