<script>
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { Head, Link } from '@inertiajs/inertia-vue3';
import JetApplicationMark from '@/Jetstream/ApplicationMark.vue';
import JetBanner from '@/Jetstream/Banner.vue';
import JetDropdown from '@/Jetstream/Dropdown.vue';
import JetDropdownLink from '@/Jetstream/DropdownLink.vue';
import JetNavLink from '@/Jetstream/NavLink.vue';
import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue';
import Navigation from '@/Pages/Navigation.vue';
import Search from '@/Pages/Search.vue';


export default{
    props:{
         title: String,
        canLogin: Boolean,
        canRegister: Boolean,
        categorias:Array,
    },
    methods:{
        logout(){
            Inertia.post(route('logout'));
        }
    }
}

</script>

<template>
    <AppLayout title="El tigre">
    <Head title="Navigation" />
        <header class="bg-gray-700 sticky top-0" style="z-index: 900">
                <div class="container flex items-center h-16 justify-between md:justify-start">
                    <!-- logo -->
                    <div class="shrink-0 flex items-center">
                            <Link :href="route('home')">
                                <JetApplicationMark class="block h-9 w-auto" />
                            </Link>
                    </div>
                    <!-- boton categorias -->
                    <div class="flex items-center justify-center md:order-first mr-6 px-6 md:px-4 bg-white bg-opacity-20 text-white cursor-pointer font-semibold h-full">
                        
                         
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <span class="ml-2 text-lg font-semibold hidden md:block">Menú</span>

                           
                        </div>
                    <!-- buscador -->
                    <div class="flex-1 hidden md:block ml-4">
                        <Search />
                    </div>
                    <!-- opciones de usuario -->
                     
                    <div class="mx-2 relative hidden md:block">
                    <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                        <template v-if="$page.props.user">
                             <div class="ml-3 relative">
                                    <JetDropdown align="right" width="48">
                                        <template #trigger>
                                            <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">
                                            </button>

                                            <span v-else class="inline-flex rounded-md">
                                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                    {{ $page.props.user.name }}

                                                    <svg
                                                        class="ml-2 -mr-0.5 h-4 w-4"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                    >
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <!-- Account Management -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                Manage Account
                                            </div>

                                            <JetDropdownLink :href="route('profile.show')">
                                                Perfil
                                            </JetDropdownLink>

                                            <JetDropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                                                API Tokens
                                            </JetDropdownLink>

                                            <div class="border-t border-gray-100" />

                                            <!-- Authentication -->
                                            <form @submit.prevent="logout">
                                                <JetDropdownLink as="button">
                                                    Cerrar sesión
                                                </JetDropdownLink>
                                            </form>
                                        </template>
                                    </JetDropdown>
                        </div>
                        </template>
                        <template v-else>
                              <div class="relative">
                               <JetDropdown align="right" width="48">
                                    <template #trigger>
                                         <i class="fas fa-user-circle text-white text-3xl cursor-pointer"></i>
                                    </template>
                                     <template #content>
                                        <JetDropdownLink>
                                        <Link :href="route('login')" class="text-sm text-gray-700 ">
                                        Acceder
                                        </Link>
                                        </JetDropdownLink>
                                         <JetDropdownLink>
                                        <Link :href="route('register')" class="text-sm text-gray-700">
                                         Registro
                                        </Link>
                                        </JetDropdownLink>
                                      
                                     </template>
                                </JetDropdown>
                                 </div>
                        </template>
                    </div>
                    </div>
                </div>

                 <nav id="navigation-menu" class="bg-gray-600 bg-opacity-25 w-full absolute">
                 
                    <div class="container h-full md:block">
                     
                        <div class="grid grid-cols-4 h-full relative">
                            <ul class="bg-white">
                                <div v-for="categoria in categorias" :key="categoria.id">
                                    <li class="navigation-link text-gray-500 hover:bg-blue-500 hover:text-white">
                                        <a class="py-2 px-4 text-sm flex items-center" href="#">
                                            <span>
                                                {!!categoria.icon!!}
                                            </span>
                                            {{categoria.name}}
                                        </a>
                                    </li>
                                </div>
                                
                                

                            </ul>

                            <div class="col-span-3 bg-gray-100">
                                <p>hola</p>

                            </div>

                        </div>

                    </div>


                </nav> 
            </header>
    </AppLayout>
</template>
