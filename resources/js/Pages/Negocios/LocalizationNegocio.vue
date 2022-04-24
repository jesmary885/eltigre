<script>

import Show from '@/Pages/Negocios/Show.vue';
import { defineComponent } from "vue";
import { GoogleMap, Marker } from "vue3-google-map";

export default {
 components:{
     Show,
     GoogleMap,
     Marker
 },
 props:{
     negocio_select:{
         type:Object,
     }
 },
 setup(){
     const center = { lat: 8.884456744468853, lng: -64.23289175583996 };

    return { center };
 
  },

}
</script>


<template>
<Show :negocio_select="negocio_select">
    <div class="bg-white rounded shadow-lg mt-1">

      <GoogleMap api-key="AIzaSyDe7DXqh9aZhpd57fZoj4TV4W0RPribGlg" style="width: 100%; height: 500px" :center="center" :zoom="15">
            <Marker :options="{ position: center }" />
    </GoogleMap>
    </div>
</Show>
</template>