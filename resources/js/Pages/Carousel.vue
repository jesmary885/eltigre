<script>
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';


export default {
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,

  },
};

</script>

<template>
  <carousel :autoplay="12000" :wrapAround="true" :transition="800"  >
    <slide v-for="slide in 2" :key="slide">
<img src="img/Tigre.jpg" class="object-cover w-full h-full p-0 m-0" alt="">
        
    </slide>
    <template #addons>

      <pagination />
    </template>
  </carousel>
</template>