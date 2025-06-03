<template>
  <div class="min-h-[400px] px-3 md:px-0 w-full bg-[linear-gradient(-54.94deg,#f9ce34,#ee2a7b,#6228d7)] py-9 flex items-center flex-col justify-between">
    <div class="flex items-center gap-0 justify-evenly">
      <div
        class="flex items-center gap-2 text-white cursor-pointer group bg-[#8143C4] rounded-l-md border-r-2 py-2 px-3"
      >
        <Icon icon="lets-icons:video-fill" class="w-[24px] h-[24px] text-white group-hover:text-green-300" />
        <span class="hidden md:flex group-hover:text-green-300">{{ $t('media.video') }}</span>
      </div>
      <div class="flex items-center gap-2 text-white cursor-pointer group bg-[#8143C4] py-2 px-3 border-r-2">
        <Icon icon="zondicons:photo" class="w-[24px] h-[24px] text-white group-hover:text-green-300" />
        <span class="hidden md:flex group-hover:text-green-300">{{ $t('media.photo') }}</span>
      </div>
      <div class="flex items-center gap-2 text-white cursor-pointer group bg-[#8143C4] border-r-2 py-2 px-3">
        <Icon icon="fluent:video-clip-24-filled" class="w-[24px] h-[24px] text-white group-hover:text-green-300" />
        <span class="hidden md:flex group-hover:text-green-300">{{ $t('media.story') }}</span>
      </div>
      <div class="flex items-center gap-2 text-white cursor-pointer group bg-[#8143C4] border-r-2 py-2 px-3">
        <Icon icon="solar:video-library-bold" class="w-[24px] h-[24px] text-white group-hover:text-green-300" />
        <span class="hidden md:flex group-hover:text-green-300">{{ $t('media.reel') }}</span>
      </div>
      <div class="flex items-center gap-2 text-white cursor-pointer group bg-[#8143C4] rounded-r-md py-2 px-3">
        <Icon icon="akar-icons:airplay-video" class="w-[24px] h-[24px] text-white group-hover:text-green-300" />
        <span class="hidden md:flex group-hover:text-green-300">{{ $t('media.igtv') }}</span>
      </div>
    </div>

    <div>
      <h1 class="text-3xl text-center text-white font-[600]">{{ $t('insta_downloader') }}</h1>
      <p class="mt-6 text-white text-center text-[18px]">{{ $t('insta_desc') }}</p>
    </div>

    <div class="w-full max-w-[550px]">
      <div class="w-full relative h-[66px] bg-white rounded-[14px] flex items-center rounded-[35px] gap-2 overflow-hidden">
        <div class="w-full flex items-center gap-2">
          <input
            type="text"
            placeholder="@username or instagram URL"
            v-model="instagram"
            class="w-full h-[66px] px-3"
          />
          <button v-if="!instagram" @click="pasteEvent" class="bg-slate-200 p-2 rounded">
            {{ $t('button.paste') }}
          </button>
          <button v-else @click="clearEvent" class="bg-slate-200 p-2 rounded">
            {{ $t('button.clear') }}
          </button>
        </div>
        <button class="w-[70px] text-center flex items-center justify-center bg-[#8143C4] text-white h-full">
          <Icon icon="lucide:search" width="33" height="33" />
        </button>
      </div>
      <p class="text-base rounded-lg p-2 mt-4 text-center bg-[rgba(255,255,255,0.4)] text-white max-w-[90%] m-auto">
        By Using Our Service You Are Accepting Our Terms Of Use.
      </p>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { Icon } from '@iconify/vue'

// Reactive state
const instagram = ref(null)

// Methods
const pasteEvent = async () => {
  try {
    const text = await navigator.clipboard.readText()
    instagram.value = text
  } catch (error) {
    console.error('Clipboard read failed:', error)
  }
}

const clearEvent = () => {
  instagram.value = ''
}
</script>

<script>
// Layout injection (only needed if you're using Inertia or custom layouts)
import HomeLayout from '../../layouts/HomeLayout.vue'
export default {
  layout: (h, page) => h(HomeLayout, { size: 'large' }, () => page),
}
</script>
