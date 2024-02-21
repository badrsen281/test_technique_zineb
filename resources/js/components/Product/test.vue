<template>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Starter Page</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container">
      <div class="row">


        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span type="button" class="input-group-text" id="inputGroup-sizing-sm" @click="add_tache()">
              Ajouter une tache
            </span>
          </div>
          <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
            id="description" v-model="tache">
        </div>


        <input type="text" class="form-control" v-model="searchTerm" placeholder="Search..." @change="handleInputChange()">
        <br><br>
        <div>
          <ul class="list-group">
            <li v-for="item in list_taches" class="list-group-item">{{ item.value }}</li>
          </ul>
        </div>
        

      </div>

    </div>
  </div>
</template>

<script>
import {ref} from 'vue';
import axios from 'axios';

export default {

  setup(){

    let tache = ref('');
    let list_taches =ref([]);
    let products = ref([]);
    let searchTerm = ref([]);


    async function get_all_produits(){
      const response =  await axios.get('/products');
      products = response.data;
    }
    //get_all_produits();


    function handleInputChange(){
     console.log(this.searchTerm);
      this.list_taches= this.list_taches.filter( item => {
       return item.value.toLowerCase().includes(this.searchTerm.toLowerCase());
     })
    }


    function add_tache(){
      this.list_taches.push({
          value:tache.value,
          key: Date.now(),
          completed: false
        });
    }

    return {
      tache,
      list_taches,
      products,
      searchTerm,
      add_tache,
      get_all_produits,
      handleInputChange
    }


  }

}

</script>