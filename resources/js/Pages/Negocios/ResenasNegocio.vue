<script>

import Show from '@/Pages/Negocios/Show.vue';
import Paginator from '@/Components/Paginator';
import JetInput from '@/Jetstream/Input.vue';

export default {
 components:{
     Show,
    Paginator,
          JetInput,
 },
 props:{
     negocio_select:{
         type:Object,
     },
 }


    
}
</script>


<template>
<Show :negocio_select="negocio_select">
    <div class="bg-white rounded shadow-lg mt-1">
        <div>
            <input type="text" name="resena" placeholder="Añadir un comentario..." class="w-full px-4 py-2 text-base border-b-2 focus:outline-none focus:border-blue-400"/>
        </div>

      
    </div>
</Show>
</template>