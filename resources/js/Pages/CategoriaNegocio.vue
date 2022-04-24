<script>
import { Link } from '@inertiajs/inertia-vue3';
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
import { ref } from '@vue/reactivity';



export default {
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
    Link,
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
  <carousel :items-to-show="4" :itemsToScroll="3">

      <slide v-for="negocio in negocios_categorias" :key="negocio.id">
      
        <ul class=" mr-2 w-52 h-64">
          <li class="bg-white rounded-lg shadow">
            <article>
               
                <figure>
                  <img class="w-full h-48 object-cover object-center" :src="`/storage/${negocio.images[0].url}`" alt="">
                  <!-- <p>{{image.url}}</p> -->
                  <!-- <img class=" w-full object-cover object-center" :src="`/storage/${images.negocios.url}`" alt=""> -->
                <!-- <figure v-for="image in images" :key="image.id"> -->
                  <!-- <div v-if="image.imageable_id == negocio.id">  -->
                      <!-- <img class=" w-full object-cover object-center" :src="`/storage/${image.url}`" alt=""> -->
                  <!-- </div> -->
                </figure>
                <Link :href="route('negocio',negocio)" class="text-sm md:text-md lg:text-lg font-semibold text-gray-700">
         {{negocio.name}}
                <!-- <div class="p2">
                  <h1 class="text-sm md:text-md lg:text-lg font-semibold text-gray-700">
                     
                          {{negocio.name}}
                   
                  </h1>
                </div> -->
                   </Link>
            </article>
          </li>
        </ul>
        
      </slide>
       <template #addons>
 
      <pagination />
    </template>
   
  </carousel>
</template>