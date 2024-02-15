import Vue from 'vue';

//Importar los componentes de validación
import {
    ValidationProvider,
    ValidationObserver
} from 'vee-validate';

Vue.component('validation-observer', ValidationObserver);
Vue.component('validation-provider', ValidationProvider);

//Importar las funciones de mejora y configuración
import {
    extend,
    configure
} from 'vee-validate';

// Importar todas las reglas de validacion
import * as rules from 'vee-validate/dist/rules';

//Importar todos los mensajes de validacion en español
import es from 'vee-validate/dist/locale/es.json';

// Configurar las clases cuando una validacion es invalida
configure({
    classes: {
        invalid: ['block', 'text-left', 'sm:ml-auto', 'mt-2', 'text-[10px]', 'leading-tight', 'text-red-600']
    }
})

// Registrar todas las reglas de validacion con sus mensajes en español
Object.keys(rules).forEach(rule => {
    extend(rule, {
        ...rules[rule],
        message: es.messages[rule]
    });
});
