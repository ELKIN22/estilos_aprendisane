//Importar el componente base
import {
    Tabulator
} from 'tabulator-tables';

//Modulos extra
import {
    AjaxModule
} from 'tabulator-tables';


//Registrar en la tabla los modulos necesarios
Tabulator.registerModule(AjaxModule);

//Registrar globalmente
Object.defineProperty(window, 'tabulator', { value: Tabulator });

export default Tabulator;
