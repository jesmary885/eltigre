<script>
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
import { ref } from '@vue/reactivity';


export default {
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
  },
  data(){
    return{
      cont:false,
      cat:null,
    
    }
  },
    props: {
      categoria:Object,
      negocios_categorias :Array,
      negocio:Object,
   
      itemsToShow: Number,
      itemsToScroll: Number,
      images:Array,
      snapAlign: String,

    },

    // mounted(){

    //   this.pp=JSON.stringify(this.negocios_categorias);
    //   console.log("este"+this.pp);

    // },
    methods:{
      otra(negocio){
        this.cont = negocio;
        console.log(this.cont);

      }
    },

     computed:{
       imageNegocio(){
         this.images.forEach(function(image) {
           //if(image.negocio_id == this.negocio){
           //  return image.url;
           console.log('hola'+ this.negocio);
          // }
         });
     }
     }

};

</script>

<style>
  :root {
     --vc-clr-primary: rgba(60, 127, 165, 0.301);
  }

</style>


<template>
  <carousel :items-to-show="3" :itemsToScroll="3" :snapAlign='start'>

      <slide class="h-full bg-white rounded-lg shadow" v-for="negocio in negocios_categorias" :key="negocio.id">

         <article class="mr-2">
            <figure>
              <img class=" w-full object-cover" :src="`/storage/${negocio.images[0].url}`" alt="">
           
            
              <!-- <p>{{image.url}}</p> -->
            
              <!-- <img class=" w-full object-cover object-center" :src="`/storage/${images.negocios.url}`" alt=""> -->


              
            <!-- <figure v-for="image in images" :key="image.id"> -->
              <!-- <div v-if="image.imageable_id == negocio.id">  -->
                   <!-- <img class=" w-full object-cover object-center" :src="`/storage/${image.url}`" alt=""> -->


              <!-- </div> -->
            </figure>
            <div class="py-4 px-6">
              <h1 class="text-lg font-semibold">
                  <a href="#">
                      {{negocio.name}}
                  </a>
               </h1>
              <p class="font-bold text-trueGray-700">Descripción</p>
            </div>
        </article>
      </slide>
  </carousel>
</template>