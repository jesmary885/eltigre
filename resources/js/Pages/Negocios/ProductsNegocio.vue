<script>

import Show from '@/Pages/Negocios/Show.vue';
import Paginator from '@/Components/Paginator';

export default {
 components:{
     Show,
          Paginator,
 },
 props:{
     negocio_select:{
         type:Object,
     }
 }


    
}
</script>


<template>
<Show :negocio_select="negocio_select">
    <div class="bg-white rounded shadow-lg mt-1">
       
                                       
                                    

        
    </div>
</Show>
</template>