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
  <carousel class="text-blue-500" :autoplay="5000" :wrapAround="true" >
    <slide v-for="slide in 2" :key="slide">
<img src="img/Tigre.jpg" class="w-full overflow-hidden" alt="">
        
    </slide>
    <template #addons>
      <navigation />
    </template>
  </carousel>
</template>