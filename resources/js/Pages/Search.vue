<script>
import JetInput from '@/Jetstream/Input.vue';

export default {
    data(){
        return{
            search:''
        }
    }
    
}
</script>

<template>
    <div class="flex-1 relative">
    
    <form action="#" autocomplete="off">

        <!-- <x-jet-input  type="text" class="w-full" /> -->

    <input type="text" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" v-model="search" placeholder="¿Estás buscando algún negocio?" >
<!-- 
       <JetInput
                    id="search"
                    v-model="search"
                    type="text"
                    placeholder="¿Estás buscando algún negocio?"
                    class="w-full"
                    autofocus
                /> -->


     
        <button class="absolute top-0 right-0 w-12 h-full bg-blue-500 flex items-center justify-center rounded-r-md">
     
             <i class="	fas fa-search text-white text-xl cursor-pointer"></i>
        </button>

    </form>

  
</div>
</template>

