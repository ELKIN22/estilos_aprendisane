//Importar la libreria de manejo de fechas
import moment from 'moment';
//Importat la libreria de manejo de fechas para dias habiles
import business from 'moment-business';

//Registrar globalmente
Object.defineProperty(window, 'moment', { value: moment });
Object.defineProperty(window, 'business', { value: business });

export default { moment, business };
