<template>

  <router-link :to="`/products/create`" class="p-2 col border btn btn-primary col-md-3 m-3 float-left">Add</router-link>

    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Libelle</th>
                <th scope="col">Prix</th>
                <th scope="col">Qte stocker</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                <tr v-for="product in products" :key="product.id">
                    <td>{{ product.libelle }}</td>
                    <td>{{ product.prix }}</td>
                    <td>{{ product.qte_stocker }}</td>
                    <td>
                      <div class="row gap-3">
                        <router-link :to="`/products/${product.id}`" class="p-2 col border btn btn-primary">View</router-link>
                        <router-link :to="`/products/${product.id}/edit`" class="p-2 col border btn btn-success">Edit</router-link>
                        <button @click="deleteProduct(product.id)" type="button" class="p-2 col border btn btn-danger">Delete</button>
                      </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      products: []
    }
  },
  async created() {
    try {
      const response = await axios.get('/products');
      this.products = response.data;

      console.log(response.data);
      
    } catch (error) {
      console.error(error);
    }
  },
  methods: {
    async deleteProduct(id) {
      try {
        await axios.delete(`/products/${id}`);
        this.products = this.products.filter(product => product.id !== id);
      } catch (error) {
        console.error(error);
      }
    }
  }
}
</script>