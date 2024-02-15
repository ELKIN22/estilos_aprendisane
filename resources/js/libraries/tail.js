//Idioma español para el select
import 'tail.select/langs/tail.select-es';
//Importar la libreria
import tail from "tail.select";

//Registrar globalmente
Object.defineProperty(window, 'tail', { value: tail });

export default tail;
