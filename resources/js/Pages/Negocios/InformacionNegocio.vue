<script>
import Show from '@/Pages/Negocios/Show.vue';
import AppLayout from '@/Layouts/AppLayout.vue';

export default {
    components:{
        Show,
       
    },
    props:{
        negocio_select:{
            type:Object
        },
       
    }
    
}
</script>

<template>
    <Show :negocio_select=negocio_select>
        <div class="bg-white rounded shadow-lg mt-1">
                        <div class="p-4 flex items-center">
                            <span class="flex items-center justify-center h-10 w-10 rounded-full bg-green-600">
                                <i class="far fa-clock text-sm text-white"></i>
                            </span>
                            
                            <div class="ml-4">
                                <p class="text-lg font-semibold text-greenLime-600">Horarios de atención</p>
                                <p>DE LUNES A SABADO DE 7:00 AM A 8 PM</p>
                                <p>DOMINGOS DE 7:00 AM A 12 PM</p>
                            </div>
                        </div>

                        <div class="p-4 flex items-center">
                            <span class="flex items-center justify-center h-10 w-10 rounded-full bg-green-600">
                                <i class="far fa-address-card text-sm text-white"></i>
                            </span>
                            
                            <div class="ml-4">
                                <p class="text-lg font-semibold text-greenLime-600">Dirección y números de contacto</p>
                                <p>{{negocio_select.direction}}</p>
                                <p>Tlfs: {{negocio_select.phone}} / {{negocio_select.mobile_phone}}</p>
                            </div>
                        </div>

                        <div class="p-4">
                            <div class="flex items-center">
                                <span class="flex items-center justify-center h-10 w-10 rounded-full bg-green-600">
                                    <i class="far fas fa-taxi text-sm text-white"></i>
                                </span>
                            
                                <div class="ml-4">
                                    <div v-if="negocio_select.delivery == 'si'">
                                        <p class="text-lg font-semibold text-greenLime-600">Delivery</p>
                                        <p>Este negocio posee servicio de delivery</p>
                                        <p>Precio:USD {{negocio_select.delivery_price}}</p>
                                    </div>
                                    <div v-else>
                                        <p class="text-lg font-semibold text-greenLime-600">Delivery</p>
                                        <p>Este negocio no posee servicio de delivery</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </Show>
    
</template>