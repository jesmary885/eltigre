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
  <carousel>
    <slide class="h-72" v-for="slide in 2" :key="slide">
<img src="img/Tigre.jpg" class="h-full w-full overflow-hidden rounded-md" alt="">
        
    </slide>
    <template #addons>
      <navigation />
    </template>
  </carousel>
</template>