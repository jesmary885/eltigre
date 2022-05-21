<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components:{
        AppLayout,
        Link,
    },
    data(){
        return{
            name:null,
            view : 'grid',
        }
    },

    props:{
        category:Object,
        negocios_select:Array,
        subcategories_categories:Array,
        negocios_select_s : Array,
        negocios: Array,
        categorias:Array,
        subcategorias:Array,
    },
    methods:{
        getNameNegocio(name){
            this.name = name;
            return name.length>20 ?name.substring(0,20) + '...' :name;
        },
        
    }
}
</script>


<template>
<AppLayout title="El tigre" :negocios="negocios" ruta="categories" :category="category">
    <div class="container mb-6">
        <figure>
            <img class="w-full h-80 object-cover object-center" :src="`/storage/${category.image}`" alt="">

        </figure>

        <div class="bg-white rounded-lg shadow-lg mb-6">
            <div class="px-6 py-2 flex justify-between items-center">
                <h1 class="font-bold text-blue-800 uppercase">{{category.name}}</h1>

                <div class="grid grid-cols-2 border border-gray-300 divide divide-gray-300 text-gray-500">
                    <i @click="view='grid'" class="fas fa-border-all p-3 cursor-pointer"></i>
                    <i @click="view='list'" class="fas fa-th-list p-3 cursor-pointer" ></i>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <aside>
                <h2 class="font-semibold text-center mb-4 text-gray-800">
                    Subcategorías
                </h2>
                <ul class="divide-y divide-gray-200">
                    <div v-for="subcategory in subcategories_categories" :key="subcategory.id">
                        <li class="py-2 text-sm ">
                            <Link class="cursor-pointer hover:text-blue-600 capitalize" :href="route('categories',{category:category,subcategory:subcategory})">
                                {{subcategory.name}}
                            </Link>
                        </li>
                    </div>

                </ul>
            </aside>
            <div v-if="view == 'grid'" class="md:col-span-2 lg:col-span-4">
                <ul v-if="negocios_select_s == ''" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                         <div v-for="negocio in negocios_select" :key="negocio.id">
                            <li class="bg-white rounded-lg shadow">
                                <Link :href="route('negocio',negocio)">
                                <figure>
                                    <img class="h-48 w-full object-cover object-center" :src="`/storage/${negocio.images[0].url}`" alt="">
                                </figure>
                                <div class="py-4 px-6">
                                    <h1 class="text-sm text-center font-bold text-gray-800">
                                            {{getNameNegocio(negocio.name)}}
                                    </h1>
                                </div>
                                </Link>
                            </li>
                    </div>
                 </ul>

                 <ul v-else class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                     <div v-for="negocio in negocios_select_s" :key="negocio.id">
                            <li class="bg-white rounded-lg shadow">
                                <article> 
                                    <Link :href="route('negocio',negocio)">          
                                        <figure>
                                            <img class="h-48 w-full object-cover object-center" :src="`/storage/${negocio.negocio.images[0].url}`" alt="">
                                        </figure>
                                        <div class="py-4 px-6">
                                            <h1 class="text-sm text-center font-bold text-gray-800">
                                                {{getNameNegocio(negocio.negocio.name)}}
                                            </h1>
                                        </div>
                                  </Link>
                                </article>
                            </li>
                        </div>
                 </ul>
            </div>

            <div v-else class="md:col-span-2 lg:col-span-4">
                <ul v-if="negocios_select_s == ''">
                         <div v-for="negocio in negocios_select" :key="negocio.id">
                            <li class="bg-white rounded-lg shadow mb-4">
                                <article class="flex">
                                   
                                        <figure>
                                            <img class="h-48 w-56 object-cover object-center" :src="`/storage/${negocio.images[0].url}`" alt="">
                                        </figure>
                                        <div class="flex-1 py-4 px-6 flex flex-col">
                                            <div class="flex justify-between">
                                                <div>
                                                     <Link :href="route('negocio',negocio)">
                                                    <h1 class="text-sm text-center font-bold text-gray-800">
                                                        {{getNameNegocio(negocio.name)}}
                                                    </h1>
                                                      </Link>
                                                </div>
                                                <div class="flex items-center">
                                                    <ul class="flex text-sm">
                                                    <li>
                                                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                                                    </li>
                                                    </ul>
                                                    <span class="text-gray-700 text-sm">(24)</span>
                                                </div>
                                            </div>
                                        </div>
                                  
                                </article>
                            </li>
                        </div>
                    </ul>

                 <ul v-else>
            
                    <div v-for="negocio in negocios_select_s" :key="negocio.id">
                            <li class="bg-white rounded-lg shadow mb-4">
                                <article class="flex">
                                
                                        <figure>
                                            <img class="h-48 w-56 object-cover object-center" :src="`/storage/${negocio.negocio.images[0].url}`" alt="">
                                        </figure>
                                        <div class="flex-1 py-4 px-6 flex flex-col">
                                            <div class="flex justify-between">
                                                <div>
                                                    <Link :href="route('negocio',negocio)">
                                                        <h1 class="text-sm text-center font-bold text-gray-800">
                                                            {{getNameNegocio(negocio.negocio.name)}}
                                                        </h1>
                                                     </Link>
                                                </div>
                                                <div class="flex items-center">
                                                    <ul class="flex text-sm">
                                                    <li>
                                                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                                                    </li>
                                                    </ul>
                                                    <span class="text-gray-700 text-sm">(24)</span>
                                                </div>
                                            </div>
                                        </div>
                                   
                                </article>
                            </li>
                        </div>




                 </ul>
                
            </div>
        </div>
    </div>
</AppLayout>
</template>