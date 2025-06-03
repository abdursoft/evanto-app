<template>
    <div class="w-full flex flex-col items-center min-h-[80px] bg-slate-100 py-6  px-3">
        <img src="../../../images/rstream.png" alt="rstream video ott platform" class="rounded-lg">
        <h4 class="text-blue-500 text-2xl font-semibold">RStream OTT video platform</h4>
        <h5 class="text-xl text-slate-600 text-center mb-6">Let's connect and update your platform with new things</h5>
        <div class="w-full max-w-[1180px] m-auto border-t border-gray-200 py-6 ">
            <div class="flex items-center justify-between flex-col md:flex-row md:flex-row-reverse">
                <social-icons />
                <div class="w-full text-center md:text-left md:w-2/4 text-slate-700">@{{ year }} RStream All right reserved</div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import SocialIcons from '../partials/SocialIcons.vue';

let year = ref('');
const date = new Date();
year = date.getFullYear();
</script>
