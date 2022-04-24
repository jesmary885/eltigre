<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
import { Inertia } from '@inertiajs/inertia';
import { Head, Link } from '@inertiajs/inertia-vue3';
import JetApplicationMark from '@/Jetstream/ApplicationMark.vue';
import Search from '@/Pages/Search.vue';
import JetDropdown from '@/Jetstream/Dropdown.vue';
import JetDropdownLink from '@/Jetstream/DropdownLink.vue';
import Carousel from '@/Pages/Carousel.vue';
import CategoriaNegocio from '@/Pages/CategoriaNegocio.vue';


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    categorias : Array,
    subcategorias : Array,
    negocioss : Array,
});

const categoria = {
    type:Object,
    value:null
};


</script>




<template>

    <AppLayout title="El tigre">

       <div>
           <div class="mt-0">
               <Carousel />
           </div>

           <div class="bg-white rounded-lg shadow-lg mb-6 mt-6 p-4">
      
            <h1 class="font-bold text-gray-700 text-center text-lg">NEGOCIOS POR CATEGORIA</h1>

           
        </div>
  

           <div class="container mt-2">
               <div v-for="categoria in categorias" :key="categoria.id">
                <section class="mb-6 mt-2 bg-white rounded-lg shadow-lg">
                    <div class="flex items-center mb-2">
                        <h2 class="text-lg uppercase font-semibold text-gray-700 p-4 ml-8">
                            {{categoria.name}}
                        </h2>
                        <a href="#" class="text-orange-600 hover:text-blue-400 hover:underline ml-2 font-semibold">Ver más</a>
                    </div>
                     <div class="mt-4 p-2">
                            <CategoriaNegocio :negocios_categorias="categoria.negocios" :images="images" />
                    </div>

                    <!-- <div v-for="negocio in categoria.negocios" :key="negocio.id">
                        {{negocio.name}}
                        {{negocio.images[0]}} -->
                         <!-- <div v-for="imagen in negocioss.images" :key="imagen.id">
                        {{imagen}}
                        </div> -->
             
                </section>
            </div>

           </div>
            
        </div>
    </AppLayout>
</template>

