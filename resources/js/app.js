require('@/bootstrap');

const app = new Vue({
    el: '#app',

    data() {
        return {
            auth: {
                permisos: [],
                roles: []
            }
        }
    },

    created() {
        axios.get('/api/usuario/permisos/@')
            .then(response => this.auth.permisos = response.data)
            .catch(error => this.auth.permisos = []);
    },

    methods: {
        can(permiso) {
            if (!this.auth.permisos.length)
                return false

            return this.auth.permisos.includes(permiso);
        },

        hasRol(rol) {
            if (!this.auth.roles.length)
                return false

            return this.auth.roles.includes(rol);
        }
    }
});
