<script>

import Show from '@/Pages/Negocios/Show.vue';
import Paginator from '@/Components/Paginator.vue';
import tableResponsive from '@/Components/TableResponsive.vue';
import JetInput from '@/Jetstream/Input.vue';
import { Inertia } from '@inertiajs/inertia';

export default {
 components:{
     Show,
          Paginator,
          tableResponsive,
          JetInput,
 },
 props:{
     negocio_select: Object,
     productos:Array,
 },
 data(){
     return{
         q:'',
         negocio:''
     }
 },
 watch:{
     q:function(value){
     //  this.negoc = JSON.stringify(this.negocio_select);
      // console.log('hola' + JSON.stringify(this.negocio_select));
        // console.log('hola' + this.negoc)
         Inertia.replace(this.route('negocioProd', {
             negocio:this.negocio_select,
             q:value
        }));

     }
 },


}
</script>


<template>
<Show :negocio_select="negocio_select" :q="q">
    <div class="bg-white rounded shadow-lg mt-1">
        <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
             <div v-if="productos != ''"> 
            <div class="px-6 py-4">

                <JetInput
                    v-model="q"
                    type="text"
                    class="mt-1 block w-full text-sm"
                    placeholder="Ingrese el nombre del procucto que quiere buscar"
                />
            </div>

           
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class=" py-3 px-2 text-justify text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th scope="col"
                                class=" py-3 text-justify text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Descripción
                            </th>
                            <th scope="col"
                                class="py-3 text-justify text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Precio
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                            <tr  v-for="producto in productos.data" :key="producto.id">
                                <td class="py-4 px-2 text-justify whitespace-nowrap text-sm text-gray-900">
                                     {{producto.producto.name}}
                                </td>
                                <td class=" py-4 text-justify whitespace-nowrap text-sm text-gray-900">
                                       {{producto.description}}
                                </td>
                                <td class=" py-4 text-justify whitespace-nowrap text-sm text-gray-500">
                                     USD {{producto.price}}
                                </td>

                            </tr>
                    </tbody>
                </table>
                <paginator class=" m-3   " :paginator="productos" />
             </div> 
            <div v-else class="px-6 py-4">
                      No hay ningún producto registrado
            </div>
        </div>
        </div>
    </div>
</div>
    </div>
</Show>
</template>