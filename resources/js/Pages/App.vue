<template>
    <head>
        <title>{{ $t('pageTitle.home') }}</title>
    </head>
    <div>
        <reviews />
        <!-- <hero-section data-aos="fade-in" /> -->
        <HowWorks />
        <Device />
        <Features />
        <payments />
        <Sms />
    </div>
</template>

<script>
import Device from './components/partials/Device.vue';
import FAQ from './components/partials/FAQ.vue';
import Features from './components/partials/Features.vue';
import HeroSection from './components/partials/HeroSection.vue';
import HowWorks from './components/partials/HowWorks.vue';
import Payments from './components/partials/Payments.vue';
import Result from './components/partials/Result.vue';
import Reviews from './components/partials/Reviews.vue';
import Sms from './components/sliders/Sms.vue';
import HomeLayout from "./layouts/HomeLayout.vue";

export default{
  components: { HeroSection, Result, HowWorks, Device, Features, Sms, FAQ, Reviews, Payments },
    layout: (h,page) => h(HomeLayout, {size: 'large'}, () => page)
}
</script>
