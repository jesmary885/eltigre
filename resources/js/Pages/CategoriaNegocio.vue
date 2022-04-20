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
      pp:null,
  //    categoria_env:null,
  cat:null,
 

    }
  },
    props: {
      categoria:Object,
      negocios_categorias :Array,
      itemsToShow: Number,
      itemsToScroll: Number
    },

    // mounted(){

    //   this.pp=JSON.stringify(this.negocios_categorias);
    //   console.log("este"+this.pp);

    // },

};

</script>

<style>
  :root {
     --vc-clr-primary: rgba(60, 127, 165, 0.301);
  }
 
</style>


<template>
  <carousel :items-to-show="3" :itemsToScroll="3" wrapAround="true">
   
      <slide class="h-full bg-white rounded-lg shadow" v-for="negocio in negocios_categorias" :key="negocio.id">
    
         <article class="mr-2">
              <figure>
                <img class=" w-full object-cover object-center" src="img/Tigre.jpg" alt="">
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

    
     
    <template #addons>
      <navigation />
    </template>
  </carousel>
</template>