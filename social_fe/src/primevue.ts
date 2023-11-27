import { createApp } from "vue";
import App from '@/App.vue'

const app = createApp(App)


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


