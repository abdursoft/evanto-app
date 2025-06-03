<template>
  <div class="w-full max-w-[1120px] m-auto py-[50px] px-3 md:px-0" data-aos="fade-up">
    <h3 class="text-left mb-3 text-base md:text-xl">SMS Gateways</h3>
    <swiper
      :direction="'horizontal'"
      :slides-per-view="3"
      :space-between="10"
      :autoplay="{
        delay: 2500,
        disableOnInteraction: false,
        }"
      :breakpoints="{
        '640': {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        '768': {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        '1024': {
            slidesPerView: 6,
            spaceBetween: 50,
        }
      }"
      :modules="modules"
      class="mySwiper h-[40px]"
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
