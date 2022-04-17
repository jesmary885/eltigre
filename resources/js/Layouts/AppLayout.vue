<script setup>
import { computed, ref } from 'vue';
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


defineProps({
	title: String,
	 canLogin: Boolean,
	canRegister: Boolean,
	 categorias : Array,
	//  open: {
	// 	 type: Boolean,
	// 	 default: false,
	//  }
});

let open = ref(false);

const show = () =>  {
	if(open.value==false){
		open.value=true;
	}
	else{
		open.value=false;
	}
};

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
	Inertia.put(route('current-team.update'), {
		team_id: team.id,
	}, {
		preserveState: false,
	});
};


const logout = () => {
	Inertia.post(route('logout'));
};


const categorias = Inertia.page.props.categorias;
const subcategorias = Inertia.page.props.subcategorias;
const first_categorias = Inertia.page.props.categorias;

</script>

<template class="font-sans antialiased">
			<Head :title="title" />
			<JetBanner />
			
			<div class="min-h-screen bg-gray-100">
					<!-- <Navigation /> -->
			<header class="bg-gray-700 sticky top-0" style="z-index: 900">
				<div class="container flex items-center h-16 justify-between md:justify-start">
					<!-- logo -->
					<div class="shrink-0 flex items-center">
							<Link :href="route('home')">
								<JetApplicationMark class="block h-9 w-auto" />
							</Link>
					</div>
				
					
					<!-- fin logo -->
					<!-- boton categorias -->
					<a @click="show" class="flex items-center justify-center order-last md:order-first mr-6 px-6 md:px-4 bg-white bg-opacity-20 text-white cursor-pointer font-semibold h-full">
						<svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
							<path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M4 6h16M4 12h16M4 18h16" />
						</svg>
						<span class="ml-2 text-lg font-semibold hidden md:block">Menú</span>
					<!-- fin boton categorias -->
					</a>
					<!-- buscador -->
					<div class="flex-1 hidden md:block ml-4">
						<Search />
					</div>
				
					<!-- fin buscador -->
					<!-- opciones de usuario -->
					<div class="mx-2 relative hidden md:block">
				
						<template v-if="$page.props.user">
							 <div class="ml-5 relative">
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
							   <JetDropdown class="ml-5" align="right" width="48">
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
					<!-- fin opciones de usuarios -->
				</div>

			<!-- Contenido del menu -->
		
				<nav :class="{'block': open, 'hidden': !open}"  id="navigation-menu" class="bg-gray-600 bg-opacity-25 w-full absolute" >
				 <!-- Menu computadora -->
					<div class="container h-full md:block hidden">
					 <!-- vista dinamica de menu -->
						<div class="grid grid-cols-4 h-full relative">
							<ul class="bg-white">
					  
								<div v-for="categoria in categorias" :key="categoria.id">
									<li class="navigation-link text-gray-500 hover:bg-blue-500 hover:text-white">
										<a class="py-2 px-4 text-sm flex items-center" href="#">
											<div class="mr-2" v-html="categoria.icon"></div>
											{{categoria.name}}
										</a>

										 <div class="navigation-submenu bg-gray-100 absolute w-3/4 h-full top-0 right-0 hidden">

											<div class="grid grid-cols-4 p-4">
											   <div>
													<!-- <p class="text-lg font-bold text-center text-gray-500 mb-3">Subcategorías</p> -->

													<ul>
														<div v-for="subcategoria in subcategorias" :key="subcategoria.id">
															<li>
																<a>
																		 <span class="text-gray-500 text-md inline-block font-semibold py-1 px-4 hover:text-blue-500 hover:cursor-pointer" v-if="subcategoria.categoria_id == categoria.id">
																			{{subcategoria.name}}
																		</span>
																</a>
															</li>
														</div>
													</ul>
												</div>

												<div class="col-span-3">
													<img class="h-64 w-full object-cover object-center" :src="`/storage/${categoria.image}`" alt="">
												</div>

											</div>

							  
										</div>

									</li>
								</div>
							</ul>
							<!-- vista inicial del menu -->
							<div class="col-span-3 bg-gray-100">
								<div class="grid grid-cols-4 p-4">
								   <div>
										<!-- <p class="text-lg font-bold text-center text-gray-500 mb-3">Subcategorías</p> -->

										<ul>
											<div v-for="subcategoria in subcategorias" :key="subcategoria.id">
											<li>
												<a>
													<span class="text-gray-500 text-md inline-block font-semibold py-1 px-4 hover:text-blue-500 hover:cursor-pointer" v-if="subcategoria.categoria_id == '1'">
														{{subcategoria.name}}
													</span>
												</a>
											</li>
											</div>
										</ul>
									</div>

									<div class="col-span-3">
										<img class="h-64 w-full object-cover object-center" :src="`/storage/categorias/7e928ae57bb76109e1de9ae0d67d2507.png`" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Menu mobil -->

					<div class="bg-white h-full overflow-y-auto">
						<div class="container bg-gray-200 py-3 mb-2">
							<Search />
						</div>
						<ul>
							<div v-for="categoria in categorias" :key="categoria.id">
									<li class="text-gray-500 hover:bg-blue-500 hover:text-white">
										<a class="py-2 px-4 text-sm flex items-center" href="#">
											<div class="mr-2" v-html="categoria.icon"></div>
											{{categoria.name}}
										</a>
									</li>
							</div>

						</ul>
						<p class="text-gray-500 px-6 my-4 font-bold">USUARIOS</p>
						<template v-if="$page.props.user">
							 <Link class="py-2 px-3 text-sm flex items-center text-gray-500 hover:bg-blue-500 hover:text-white" :href="route('profile.show')">
								<span class="flex justify-center w-9">
									<i class="far fa-address-card"></i>
								</span> 
								PERFIL
							</Link>

							<form @submit.prevent="logout">
								<Link as="button" class="py-2 px-3 text-sm flex items-center text-gray-500 hover:bg-blue-500 hover:text-white">
									<span class="flex justify-center w-9">
										<i class="fas fa-sign-out-alt"></i>
									</span>
									CERRAR SESIÓN
								</Link>
							</form>
						</template>
						<template v-else>
							 <Link :href="route('login')" class="py-2 px-3 text-sm flex items-center text-gray-500 hover:bg-blue-500 hover:text-white">
								<span class="flex justify-center w-9">
									<i class="fas fa-user-circle"></i>
								</span>
								ACCEDER
							</Link>
							<Link :href="route('register')" class="py-2 px-3 text-sm flex items-center text-gray-500 hover:bg-blue-500 hover:text-white">
								<span class="flex justify-center w-9">
									<i class="fas fa-fingerprint"></i>
								</span>
								REGISTRO
							</Link>
						</template>
					</div>
				</nav>
			</header>

				<!-- Page Content -->
		<main>
			<slot />
	

		</main>
	</div>
</template>





