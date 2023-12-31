import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from '@/App.vue'
import router from './router'

import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { fas } from '@fortawesome/free-solid-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons';
import { far } from '@fortawesome/free-regular-svg-icons';
import { dom } from "@fortawesome/fontawesome-svg-core";

library.add(far,fab,fas);

// import primevue ui
import PrimeVue from "primevue/config";
import ConfirmDialog from 'primevue/confirmdialog';
import ConfirmPopup from 'primevue/confirmpopup';
import ConfirmationService from 'primevue/confirmationservice';
import Dialog from 'primevue/dialog';
import DialogService from 'primevue/dialogservice'
import Dropdown from 'primevue/dropdown';
import DynamicDialog from 'primevue/dynamicdialog';
import Toast from 'primevue/toast';
import ToastService from 'primevue/toastservice';
import Avatar from 'primevue/avatar';

const app = createApp(App)

app.use(createPinia())

// primevue ui
app.use(PrimeVue, { ripple: true  });
app.use(ConfirmationService);
app.use(ToastService);
app.use(DialogService);

app.component('ConfirmDialog', ConfirmDialog);
app.component('ConfirmPopup', ConfirmPopup);
app.component('Dialog', Dialog);
app.component('Dropdown', Dropdown);
app.component('DynamicDialog', DynamicDialog);
app.component('Toast', Toast);
app.component('Avatar', Avatar);

app.use(router)
// fontawesome
app.component('font-awesome-icon', FontAwesomeIcon)

app.mount('#app')
