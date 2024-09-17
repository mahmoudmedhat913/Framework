import { ref, createApp } from 'vue'

const App = createApp({
  setup() {
    const intTotal = ref('i love you mom');
    function CheckCost () {
      console.log('3zamaaaa');
      
    }
    return {
      CheckCost,
      intTotal
    }
  }
});

App.mount("#app");