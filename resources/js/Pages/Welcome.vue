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
    negocios: Array,
});

const categoria = {
    type:Object,
    value:null
};


</script>




<template>

    <AppLayout title="El tigre" :negocios="negocios" ruta="home">
       <div>
           <div>
               <Carousel/>
           </div>
           <div class="bg-white rounded-lg shadow-lg mb-6 mt-2 p-4">
                <h1 class="font-bold text-gray-700 text-center text-lg">NEGOCIOS POR CATEGORIA</h1>
            </div>
           <div class="container mt-2">
               <div v-for="categoria in categorias" :key="categoria.id">
                <section class="mb-6 mt-2 bg-white rounded-lg shadow-lg">
                    <div class="flex items-center mb-2">
                        <h2 class="text-lg uppercase font-semibold text-gray-700 mt-2 ml-8">
                            {{categoria.name}}
                        </h2>
                        <Link :href="route('categories',{category: categoria})" class="text-orange-600 hover:text-blue-400 hover:underline ml-2 font-semibold mt-2">
                        Ver más
                        </Link>
                    </div>
                     <div class="mt-1 mb-12">
                            <CategoriaNegocio :negocios_categorias="categoria.negocios" :images="images" />
                    </div>
                </section>
            </div>

           </div>
            
        </div>

    </AppLayout>
</template>

