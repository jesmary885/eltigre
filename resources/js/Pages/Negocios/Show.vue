<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
import { ref } from '@vue/reactivity';
import ResponsiveNavLink from '@/Jetstream/NavLink.vue';


export default {
    props:{
        negocio_select:Object,
        wrapAround: Boolean,
        transition:Number,
        q:String,
        negocios:Array,
    },
    components:{
            AppLayout,
            Carousel,
            Slide,
          
            Navigation,
            Link,
            ResponsiveNavLink,

    },
    // data(){
    //     return{
    //         ppp:null,
    //     }
    // },

    // mounted(){
    //     this.ppp=this.negocio_select;
    //     console.log(this.ppp.images)
    // }

}
</script>


<style>
  :root {
     --vc-clr-primary: rgba(25, 35, 41, 0.301);
  }

</style>

<template>
<AppLayout title="El tigre" :negocios="negocios" ruta="negocio" :negocio_select="negocio_select">

    <div class="container py-8">
        <div class="grid grid-cols-2 gap-6">
            <div class="mr-2 w-full h-576">
                <div>
                    <h1 class="text-xl py-2 mb-2 font-bold text-blue-800 text-center">
                        {{negocio_select.name}}
                    </h1>
                </div>
            
                <carousel :autoplay="5000" :wrapAround="true" >
                    <slide v-for="image in negocio_select.images" :key="image.id">
                         <figure>
                        <img class="w-full object-cover object-center rounded h-96" :src="`/storage/${image.url}`" alt="">
                         </figure>
                    </slide>
                     <template #addons>
                        <navigation />
                           <pagination />
                    </template>
                </carousel>
            </div>

            <div>
                <div class="bg-white rounded shadow-inner p-3 text-center mb-2">
                      <ResponsiveNavLink :active="route().current('negocio')" :href="route('negocio',{negocio: negocio_select})" class="text-lg font-semibold p-1 hover:text-blue-700 rounded mr-3">
                               Información
                    </ResponsiveNavLink> 
                     <ResponsiveNavLink :active="route().current('negocioLoc')" :href="route('negocioLoc',{negocio: negocio_select})" class="text-lg font-semibold p-1 hover:text-blue-700 rounded mr-3">
                               Localización
                    </ResponsiveNavLink> 
                    <ResponsiveNavLink :active="route().current('negocioProd')" :href="route('negocioProd', {negocio: negocio_select})"  class="text-lg font-semibold p-1 hover:text-blue-700 rounded mr-3">
                               Productos
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :active="route().current('negocioServ')" :href="route('negocioServ',{negocio: negocio_select})"  class="text-lg font-semibold p-1 hover:text-blue-700 rounded mr-3">
                               Servicios
                    </ResponsiveNavLink> 
                    <ResponsiveNavLink :active="route().current('resena')" :href="route('resena',{negocio: negocio_select})"  class="text-lg font-semibold p-1 hover:text-blue-700 rounded">
                               Reseñas
                    </ResponsiveNavLink> 
                </div>

                <div class="w-full">
                    <main>
			            <slot />
		            </main>
                </div>
            </div>
        </div>
    </div>
</AppLayout>
</template>