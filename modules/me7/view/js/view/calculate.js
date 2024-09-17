import { ref, createApp } from 'vue'

const App = createApp({
  setup() {
    const intTotal = ref('i love you mom');

    return {
      intTotal
    }
  }
});

export default App;