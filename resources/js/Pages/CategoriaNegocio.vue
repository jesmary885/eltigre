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
    },

    mounted(){

      if(this.negocios_categorias){
        this.pp=JSON.stringify(this.negocios_categorias);
        console.log("este"+this.pp);
      }

     // this.control();
     //this.cat= 'peo';
     //this.cat= JSON.stringify(this.categoria);
     console.log("hola"+ this.categoria );
     this.$inertia.replace(this.route('negociocat.show',this.categoria));

     //this.pp= 'holi';
     //this.$inertia.replace(this.route('negociocat.index'),this.categoria_env);
     //this.$inertia.replace(this.route('negocio_categoria'),categoria_env);
    
   // this.cat = this.categoria_env;
     
    },



   /*  methods:{
    control(){
      console.log("hola"+categoria_env);
     // this.$inertia.replace(this.route('negociocat.index'),this.categoria_env);
    },
  },*/

   


    
  
};

</script>

<template>
  <carousel>
 
    <slide class="w-20 h-20" v-for="slide in 1" :key="slide">
      <div v-for="negocio in negocios_categorias" :key="negocio.id">
         {{negocio.name}}
         </div>

         
    </slide>

    <template #addons>
      <navigation />
    </template>
  </carousel>
</template>