<template>
    <div>
      <h2 v-if="isNewProduct">Ajouter article</h2>
      <h2 v-else>Modifie article</h2>
        <form @submit.prevent="submitForm">
          <div class="mb-3">
            <label for="libelle" class="form-label">Libelle:</label>
            <input class="form-control" type="text" id="libelle" v-model="product.libelle" required />
          </div>
          <div class="mb-3">
            <label for="prix" class="form-label">Prix:</label>
            <input class="form-control" type="number" id="prix" v-model="product.prix" required />
          </div>
          <div class="mb-3">
            <label for="qte_stocker" class="form-label">Qte stocker:</label>
            <input class="form-control" type="number" id="qte_stocker" v-model="product.qte_stocker" required />
          </div>
          <button type="submit" v-if="isNewProduct" class="btn btn-primary">Ajouter Article</button>
          <button type="submit" v-else class="btn btn-primary">Modéfie Article</button>
        </form>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        product: {
          libelle: '',
          qte_stocker: 0,
          prix: 0
        }
      }
    },
    computed: {
      isNewProduct() {
        return !this.$route.path.includes('edit');
      }
    },
    async created() {
      if (!this.isNewProduct) {
        const response = await axios.get(`/products/${this.$route.params.id}`);
        this.product = response.data;
      }
    },
    methods: {
      async submitForm() {
        try {
          if (this.isNewProduct) {
            // *** api/products ***
            await axios.post('/products', this.product);
          } else {
            // *** api/products ***
            await axios.put(`/products/${this.$route.params.id}`, this.product);
          }
          this.$router.push('/list-produits');
        } catch (error) {
          console.error(error);
        }
      }
    }
  }
  </script>