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
  // data(){

  //   return{
  //     cont:false,
  //     cat:null,
  //   }
  // },
  data: () => ({
    // carousel settings
    settings: {
      itemsToShow: 4,
      snapAlign: 'center',
    },
    // breakpoints are mobile first
    // any settings not specified will fallback to the carousel settings
    breakpoints: {
      // 700px and up
      100: {
        itemsToShow: 1,
        snapAlign: 'center',
      },
      300: {
        itemsToShow: 2,
        snapAlign: 'center',
      },
      700: {
        itemsToShow: 4,
        snapAlign: 'center',
      },
    },
    cont:false,
    cat:null,
    name:null,
  }),
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
      },
      getNameNegocio(name){
          this.name = name;
          return name.length>15 ?name.substring(0,15) + '...' :name;
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
     --vc-clr-primary: rgba(200, 202, 200, 0.301);
      --vc-clr-white: rgba(234, 238, 234, 0.301);
  }

  .carousel__item {
  min-height: 200px;
  width: 100%;
  background-color: var(--vc-clr-primary);
  color:  var(--vc-clr-white);
  font-size: 20px;
  border-radius: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.carousel__slide {
  padding: 10px;
}

.carousel__prev,
.carousel__next {
  box-sizing: content-box;
  border: 5px solid white;
}

  .carousel__slide > .carousel__item {
  transform: scale(1);

  transition: 0.5s;
}
.carousel__slide--visible > .carousel__item {
  opacity: 1;
  transform: rotateY(0);
}
.carousel__slide--next > .carousel__item {
  transform: scale(0.9) translate(-10px);
}
.carousel__slide--prev > .carousel__item {
  transform: scale(0.9) translate(10px);
}
.carousel__slide--active > .carousel__item {
  transform: scale(1.1);
}

</style>


<template>
  <carousel :settings="settings" :breakpoints="breakpoints" :wrapAround="true">

      <slide v-for="negocio in negocios_categorias" :key="negocio.id">
      
        <ul class="w-full h-64 carousel__item">
    
          <li class="bg-white rounded-lg">
            
            <article class="p-5 transform hover:scale-110 transition ease-out duration-500">
               <Link :href="route('negocio',{negocio: negocio})" class="text-sm md:text-md lg:text-md font-semibold text-gray-700">
                <figure>
                  <img class="w-full h-48 object-cover object-center " :src="`/storage/${negocio.images[0].url}`" alt="">
                  <!-- <p>{{image.url}}</p> -->
                  <!-- <img class=" w-full object-cover object-center" :src="`/storage/${images.negocios.url}`" alt=""> -->
                <!-- <figure v-for="image in images" :key="image.id"> -->
                  <!-- <div v-if="image.imageable_id == negocio.id">  -->
                      <!-- <img class=" w-full object-cover object-center" :src="`/storage/${image.url}`" alt=""> -->
                  <!-- </div> -->
                </figure>
                
                {{getNameNegocio(negocio.name)}}
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
          <Navigation class="m-8" />
 
      <pagination />
    </template>
   
  </carousel>
</template>