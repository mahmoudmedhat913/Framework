import { createApp } from 'vue'
console.log(strVuePath);

const path =  `${strVuePath+'?ver='+1.1}`;

const AppModule = await import(path);
const app = AppModule.default;
// import App from "modules/cal/view/js/view/calculate.js";

/* import App from strVuePath; */

app.mount('#app');