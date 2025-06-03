<template>
    <div>
        <main-menu />
        <div class="w-full" :class="size == 'small' ? 'max-w-[1180px] m-auto' : ''">
            <slot />
        </div>
        <MainFooter></MainFooter>
    </div>
</template>
<script setup>
import MainMenu from '../components/navbar/MainMenu.vue';
import MainFooter from '../components/footer/MainFooter.vue';

defineProps({
  size: {
    type: String,
    default: 'small'
  }
})
</script>
