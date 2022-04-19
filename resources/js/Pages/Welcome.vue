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
});

const categoria = {
    type:Object,
    value:null
};


</script>


<template>

    <AppLayout title="El tigre">

       <div class="container py-1">
           <div class="mt-0">
               <Carousel />
           </div>
            <div v-for="categoria in categorias" :key="categoria.id">
                <section class="mb-6">
                    <div class="flex items-center mb-2">
                        <h1 class="text-lg uppercase font-semibold text-gray-700">
                            {{categoria.name}}
                           <div v-for="negocio in categoria.negocios">
                               {{negocio}}
                            </div>
                        </h1>
                        <a href="#" class="text-blue-600 hover:text-blue-400 hover:underline ml-2 font-semibold">Ver más</a>
 
                    </div>

                    <!-- <CategoriaNegocio :categoria="categoria" /> -->

                </section>
            </div>

        </div>

        <div>
            
        </div>

        

    </AppLayout>
</template>

