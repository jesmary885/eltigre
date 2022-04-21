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
  <carousel class="text-blue-500" :autoplay="9000" :wrapAround="true"  >
    <slide v-for="slide in 2" :key="slide">
<img src="https://cdn.pixabay.com/photo/2018/02/13/06/59/smartphone-3149992__340.jpg" class="object-cover w-full h-80" alt="">
        
    </slide>
    <template #addons>
      <navigation />
    </template>
  </carousel>
</template>