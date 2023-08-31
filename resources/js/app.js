
import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import Map from './components/MapScreen.vue';
app.component('example-component', ExampleComponent);
app.component('map-component', Map);
app.mount('#app');
