<template>
    <div class="w-full max-w-[1180px] m-auto">
        <div class="w-full p-3 d-none md:flex items-center justify-between px-2">
            <AppLogo />
            <div class="hidden md:flex items-end gap-3">
                <Link :href="route('home')" class="p-2" :class="url == 'home' ? 'text-red-900' : ''">Home</Link>
                <Link :href="route('about')" class="p-2" :class="url == 'about' ? 'text-red-900' : ''">About</Link>
                <Link :href="route('registration')" class="p-2" :class="url == 'faq' ? 'text-red-900' : ''">Registration</Link>
                <Link :href="route('contact')" class="bg-orange-500 text-white rounded-md p-2">Concat</Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import { computed } from 'vue'
import AppLogo from '../logo/AppLogo.vue'
import { Link, usePage } from '@inertiajs/vue3';
import { route } from '../../../../../vendor/tightenco/ziggy/src/js';

const uri = computed(() => usePage().url)
const url = computed(() => uri.value.substring(1) || 'home')
</script>
