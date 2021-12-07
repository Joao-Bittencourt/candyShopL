 
<template>
  <nav class="navbar bg-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-home"></i>Home</a>
      </li>
      
      <li class="nav-item"  v-for="category in categories">
        <a class="nav-link" href="#"
          ><i class="fa" v-bind:class = category.icon ></i>{{ category.name }}</a>
      </li>
      
    </ul>
  </nav>
</template>

<script>
    export default {
        data: function () {
            return {
                categories: [],
                // products: [],
                loading: true
            }
        },
        mounted() {
            this.loadCategories();
            // this.loadProducts();
        },
        methods: {
            loadCategories: function () {
                axios.get('/api/categories')
                    .then((response) => {
                        this.categories = response.data.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            // loadProducts: function () {
            //     axios.get('/api/products')
            //         .then((response) => {
            //             this.products = response.data.data;
            //             this.loading = false;
            //         })
            //         .catch(function (error) {
            //             console.log(error);
            //         });
            // }
        }
    }
</script>