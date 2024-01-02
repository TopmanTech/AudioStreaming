import { createApp } from 'vue'
import { clickaway, focus, hideBrokenIcon, overflowFade, tooltip } from '@/directives'
import { FontAwesomeIcon, FontAwesomeLayers } from '@fortawesome/vue-fontawesome'
import { RouterKey } from '@/symbols'
import { routes } from '@/config'
import Router from '@/router'
import App from './App.vue'

createApp(App)
  .provide(RouterKey, new Router(routes))
  .component('Icon', FontAwesomeIcon)
  .component('IconLayers', FontAwesomeLayers)
  .directive('AudioStreaming-focus', focus)
  .directive('AudioStreaming-clickaway', clickaway)
  .directive('AudioStreaming-tooltip', tooltip)
  .directive('AudioStreaming-hide-broken-icon', hideBrokenIcon)
  .directive('AudioStreaming-overflow-fade', overflowFade)
  /**
   * For Ancelot, the ancient cross of war
   * for the holy town of Gods
   * Gloria, gloria perpetua
   * in this dawn of victory
   */
  .mount('#app')

navigator.serviceWorker?.register('./sw.js')
