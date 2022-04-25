<script>
import JetInput from '@/Jetstream/Input.vue';
import { Inertia } from '@inertiajs/inertia';

export default {
    data(){
        return{
            search:'',
            open: 'false',
        }
    },
  
    props:{
        negocios:Array,
    },
    watch:{
     search:function(value){

         Inertia.replace(this.route('search', {search:value}));
     },
    }
}
</script>

<template>
    <div class="flex-1 relative">
    
        <form action="#" autocomplete="off">
        <input type="text" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" v-model="search" placeholder="¿Estás buscando algún negocio?" >
            <button class="absolute top-0 right-0 w-12 h-full bg-blue-500 flex items-center justify-center rounded-r-md">
                <i class="	fas fa-search text-white text-xl cursor-pointer"></i>
            </button>
        </form>

        <div class="absolute w-full mt-1">
            <div class="bg-white rounded-lg shadow-lg">
                <div v-if="negocios != ''">
                        <div class="px-4 py-3 space-y-1" v-for="negocio in negocios" :key="negocio.id">
                                <a class="flex">
                                    <img class="w-16 h-12 object-cover" :src="`/storage/${negocio.images[0].url}`" alt="">
                                    <div class="ml-4 text-gray-700">
                                        <p class="text-lg font-semibold leading-5">{{negocio.name}}</p>
                                        <p>Categoria: </p>
                                    </div>
                                </a>
                        </div>
                </div>

                <div v-else>
                    <p class="text-lg leading-5">
                        No existe ningún registro con los parametros especificados
                    </p>
                </div>
            
            </div>
        </div>
    </div>
</template>

