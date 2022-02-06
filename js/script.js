const App = new Vue(
    {
        el: '#app',
        data: {
            cars: [],
            colorFilter: 'all',
            fuelFilter: 'all',
            filteredArray: [],
        },
        created() {
            axios.get('http://localhost:8888/php-snacks-b1/server/controller-api.php').then((result) => {
            this.cars = result.data.results;
            this.filteredArray = this.cars;
            console.log(this.cars);
            }).catch((error) => { console.log(error); });
        },
        methods: {
            filterCars() {
                if (this.colorFilter != 'all' && this.fuelFilter != 'all') {
                    this.filteredArray = this.cars.filter((element) =>
                    {
                        return element.colore == this.colorFilter && element.carburante == this.fuelFilter;
                    });
                } else if (this.colorFilter == 'all' && this.fuelFilter != 'all') {
                    this.filteredArray = this.cars.filter((element) => {
                        return element.carburante == this.fuelFilter;
                    });
                } else if (this.colorFilter != 'all' && this.fuelFilter == 'all') {
                    this.filteredArray = this.cars.filter((element) => {
                        console.log(this.colorFilter);
                        return element.colore == this.colorFilter;
                    });
                } else {
                    this.filteredArray = this.cars;
                }
            },
        }
    }
);