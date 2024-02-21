<template>

       <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="mt-4" @submit.prevent="submitForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Articles</label>
                                <select class="form-control" v-model="cmd.product_id" required>
                                    <option v-for="product in products" :key="product.id" value="1">{{ product.libelle }}</option>
                                    <!-- <option v-for="product in products" :key="product.id" value="{{ product.id }}">{{ product.libelle }}</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Qte</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Qte" aria-label="Recipient's username" aria-describedby="basic-addon2" v-model="cmd.qte" required>
                                <div class="input-group-append">
                                  <button class="btn btn-outline-secondary" type="submit">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
                <!-- *** list des tables *** -->
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Libelle</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Qte</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr v-for="commande in commandes" :key="commande.id">
                            <td>{{ commande.libelle }}</td>
                            <td>{{ commande.prix }}</td>
                            <td>{{ commande.qte }}</td>
                            <td>{{ commande.prix_total }}</td>
                            <td>
                              <div class="row gap-3">
                                <button @click="deleteCommande(commande.id)" type="button" class="p-2 col border btn btn-danger">Delete</button>
                              </div>
                            </td>
                        </tr>
                    </tbody>
                </table>



            </div>
        </div>

       </div>
   

</template>

<script>
//import {ref} from 'vue';
import axios from 'axios';

export default {
    

  data() {
    return {
      products: [],
      commandes: [],
      cmd:{
        qte:'',
        product_id:''
      }
    }
  },
  async created() {
    try {
      //get all products
      const response = await axios.get('/products');
      this.products = response.data;

      //get all commdes
      const res_cmd = await axios.get('/commandes');
      this.commandes = res_cmd.data;

      
    } catch (error) {
      console.error(error);
    }
  },
  methods: {
    async deleteCommande(id) {
      try {
        await axios.delete(`/commandes/${id}`);
        this.products = this.products.filter(product => product.id !== id);
      } catch (error) {
        console.error(error);
      }
    },
    async submitForm() {
        try {
            await axios.post('/commandes', this.cmd)
                    .then(() =>{
                        console.log("Bonjour !");
                    });
        } catch (error) {
          console.error(error);
        }
    }

   }
}
</script>