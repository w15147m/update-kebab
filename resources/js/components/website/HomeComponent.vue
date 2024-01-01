<template>
    <div class="container my-5">
         <div class="card-body card_head">
             <h1 class="card-title1 text-center" >Najlepszy gyros w mieście!</h1>
             <h5 class="card-title1 text-center">Pierwszy we Wrocławiu od 1995 r.</h5>
         </div>
         <div  v-for="(shop, index) in shops"  :key="index" class="card-deck mb-3 text-center" style="height: 300px;">
             <div class="card mb-4 shadow-sm">
                 <div class="card-body">
                     <h2 class="card-title pricing-card-title">{{shop.name}}</h2>
                     <button type="button" class="btn btn-lg btn-block btn-danger mt-auto">ZAMÓW ONLINE</button>
                 </div>
             </div>
         </div>
     </div>
     <div class="container1">
 
     </div>
 </template>
 
 <script>
 import {
     csrf
 } from '@/config.js'
 export default {
     props: {
         shops: {
             type: Object,
             default: () => ({}),
         },
     },
     data() {
         return {
             csrfToken: csrf,
         };
     },
     methods:{
 
     },
     created(){
         console.log(this.shops);
     },
 }
 </script>