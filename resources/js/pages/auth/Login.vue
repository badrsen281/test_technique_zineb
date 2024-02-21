<template>
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>ECG</b> GROUPE PEREIRE</a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>
                <form @submit.prevent="handleSubmit">
                    
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" id="email" v-model="form.email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Mot de passe" v-model="form.password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8"></div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Connecter</button>
                        </div>

                    </div>
                </form>

            </div>

        </div>
    </div>
</template>

<script setup>
import { reactive } from 'vue';
import axios from 'axios';

const form = reactive({
    email: '',
    password:''
})

const handleSubmit = () =>{

    // axios.post('/login', form)
    // .then(() =>{
    //     window.location.href ="/test";
    // })


    axios.post('/logout', form)
    .then(() =>{
        window.location.href ="/test";
    })
}





</script>