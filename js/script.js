var app = new Vue(
    {
        el: '#app',
        data: {
            disk: []
        },
        methods: {
            getDatabaseFromAPI() {
                axios.get('http://localhost:8888/php-ajax-dischi/api.php')
                .then((response) => {
                    this.disk = response.data;
                });
            }
        },
        mounted() {
            this.getDatabaseFromAPI();
        }
    }
);