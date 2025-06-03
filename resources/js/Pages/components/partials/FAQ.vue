<template>
    <div class="w-full max-w-[1120px] m-auto flex flex-col items-center py-[50px] px-3 md:px-0" data-aos="fade-up">
        <h4 class="bg-slate-200 py-2 px-4 rounded-lg max-w-[140px] text-blue-800 font-bold">{{ $t('howItWorks.tag') }}
        </h4>
        <h1 class="font-base md:font-[700] text-center text-slate-600 mt-3 text-[28px] md:text-[45px] ls-0">{{
            $t('howItWorks.title') }}</h1>
        <h4 class="text-justify md:text-center text-slate-500 text-base md:text-lg md:font-semibold mt-3">{{
            $t('howItWorks.info') }}</h4>
        <div class="w-full flex flex-col md:flex-row md:flex-wrap">
            <div v-for="(item, index) in items" :key="index" class="w-full md:w-1/2  md:p-3 my-1 md:my-3">
                <div class="bg-slate-100 rounded-lg">
                    <button
                        class="w-full text-left px-4 py-6 flex justify-between items-center bg-[linear-gradient(-54.94deg,#f9ce34,#ee2a7b,#6228d7)] text-white rounded-md"
                        @click="toggle(index)">
                        <span class="font-semibold text-white">{{ item.title }}</span>
                        <svg :class="{ 'rotate-180': activeIndex === index }"
                            class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div v-show="activeIndex === index" class="px-4 pb-4 text-gray-600">
                        {{ item.content }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";

const activeIndex = ref(null);

const items = [
    { title: "Accordion 1", content: "This is the first accordion content." },
    { title: "Accordion 2", content: "This is the second accordion content." },
    { title: "Accordion 3", content: "This is the third accordion content." },
    { title: "Accordion 3", content: "This is the third accordion content." },
    { title: "Accordion 3", content: "This is the third accordion content." },
];

function toggle(index) {
    activeIndex.value = activeIndex.value === index ? null : index;
}
</script>
