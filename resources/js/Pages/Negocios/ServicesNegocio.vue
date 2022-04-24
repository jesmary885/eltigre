<script>

import Show from '@/Pages/Negocios/Show.vue';
import Paginator from '@/Components/Paginator';
import tableResponsive from '@/Components/TableResponsive.vue';
import JetInput from '@/Jetstream/Input.vue';

export default {
 components:{
     Show,
    Paginator,
     tableResponsive,
          JetInput,
 },
 props:{
     negocio_select:{
         type:Object,
     },
     servicios:Array,
 }


    
}
</script>


<template>
<Show :negocio_select="negocio_select">
    <div class="bg-white rounded shadow-lg mt-1">
        <tableResponsive>
        <div v-if="servicios != ''"> 
            <div class="px-6 py-4">
                <JetInput
                    id="q"
                    v-model="q"
                    type="text"
                    class="mt-1 block w-full"
                    placeholder="Ingrese el nombre del servicio que quiere buscar"
                    autofocus
                />
            </div>
            <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Descripción
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Precio
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                        <!-- @foreach ($products as $product) -->

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">

                                    <div class="text-sm text-gray-900">
                                       Nombre
                                    </div>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">

                                    <div class="text-sm text-gray-900">
                                       descripcion
                                    </div>

                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                     USD
                                </td>

                            </tr>

                        <!-- @endforeach -->
                        <!-- More people... -->
                    </tbody>
            </table>
        </div> 
        <div v-else class="px-6 py-4">
                No hay ningún servicio registrado
        </div>
    </tableResponsive>
    </div>
</Show>
</template>