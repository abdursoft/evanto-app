<template>
  <div class="w-full max-w-[1120px] m-auto flex flex-col items-center py-[50px] px-3 md:px-0" data-aos="fade-up">
    <swiper
      :direction="'vertical'"
      :slides-per-view="1"
      :space-between="30"
      :mousewheel="true"
      :autoplay="{
        delay: 2500,
        disableOnInteraction: false,
        }"
      :pagination="{ clickable: true }"
      :modules="modules"
      class="mySwiper h-[460px]"
    >
      <swiper-slide v-for="(slide, index) in slides" :key="index">
        {{ slide }}
      </swiper-slide>
    </swiper>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import 'swiper/css'
import 'swiper/css/pagination'
import { Mousewheel, Pagination, Autoplay } from 'swiper/modules'

// Use Swiper modules
const modules = [Mousewheel, Pagination, Autoplay]

// Slide content
const slides = ref([
  'Slide 1',
  'Slide 2',
  'Slide 3',
  'Slide 4',
  'Slide 5',
  'Slide 6',
  'Slide 7',
  'Slide 8',
  'Slide 9',
])
</script>


<style>
.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #e2dfde;
    border-radius: 14px;

    /* Center slide text vertically */
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
