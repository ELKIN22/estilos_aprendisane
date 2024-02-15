window._ = require('lodash');

//Importar todas las librerias o plugins
//Importar Vue 2.6.x -> https://es.vuejs.org/v2/guide/index.html
import Vue from 'vue';
Object.defineProperty(window, 'Vue', { value: Vue });

//Validacion con vee-validate -> https://vee-validate.logaretm.com/v3/guide/basics.html
import '@/plugins/vee-validate';

//Manejo de archivos con -> https://safrazik.github.io/vue-file-agent/
import VueFileAgent from '@/plugins/vue-file-agent';
//Indicar que Vue va usar el plugin de vue-file-agent
Vue.use(VueFileAgent);

//Importar el componente de manejo de fechas -> https://github.com/mengxiong10/vue2-datepicker
import Datepicker from '@/plugins/vue2-datepicker';
Vue.use(Datepicker);

//Alertas con Sweetalert2 -> https://sweetalert2.github.io/
import { Swal, toast } from '@/libraries/sweetalert2'

//Select inteligente con busqueda y agrupación -> https://github.com/wolffe/tail.select.js
import tail from '@/libraries/tail'

//Importar la libreria de los iconos -> https://github.com/feathericons/feather
import feather from '@/libraries/feather'

//Importar la libreria de manejo de fechas -> https://momentjs.com/docs/ y https://github.com/jamesplease/moment-business
import { moment, business } from '@/libraries/moment'

//Importar la libreria para manejar las tablas -> http://tabulator.info/docs/5.1
import { Tabulator as tabulator } from '@/libraries/tabulator';

//Importar la libreria de peticiones http -> https://axios-http.com/es/docs/intro
import '@/libraries/axios'

//Importar todos los componentes de la aplicacion
import '@/components/main'
