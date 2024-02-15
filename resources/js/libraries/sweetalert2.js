import Swal from "sweetalert2";

// Configuracion para las alertas pequeñas
const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true
});

Object.defineProperty(window, 'swal', { value: Swal });
Object.defineProperty(window, 'toast', { value: toast });

export {Swal, toast};
