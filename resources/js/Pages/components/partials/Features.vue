<template>
    <div class="bg-slate-100 w-full py-[50px]">
        <div class="w-full max-w-[1060px] m-auto flex flex-col my-[40px] items-center px-3 md:px-0 gap-3" data-aos="fade-up">
            <h4 class="bg-white py-2 px-4 rounded-lg max-w-[140px] text-blue-800 font-bold">Features</h4>
            <h1 class="font-base md:font-[700] text-center text-slate-600 mt-3 text-[28px] md:text-[45px] ls-0">Features and attributes of RStream</h1>
            <h4 class="text-justify md:text-center text-slate-500 text-md md:text-lg md:font-semibold mt-2">We have tried to give you the best quality product. We ensure everything will be good in your system</h4>
            <div class="my-5 w-full flex items-center flex-col md:flex-row md:flex-wrap">
                <div class="md:w-1/3 md:p-3 my-4">
                    <div class="rounded-lg bg-white text-justify md:text-center flex items-center flex-col gap-5 w-full p-3">
                    <Icon icon="mynaui:check-circle" width="54" height="54" class="text-green-600" />
                    <h3 class="text-xl text-center font-semibold text-slate-600">Responsive Design</h3>
                    <p class="text-slate-400 font-semibold">
                        This website built with <strong>Tailwind</strong> CSS and responsive for <strong>mobile, TV, tablet and computer</strong> with any browser.
                    </p>
                </div>
                </div>
                <div class="md:w-1/3 md:p-3 my-4">
                    <div class="rounded-lg bg-white text-justify md:text-center flex items-center flex-col gap-5 w-full p-3">
                        <Icon icon="mynaui:check-circle" width="54" height="54" class="text-green-600" />
                    <h3 class="text-xl text-center font-semibold text-slate-600">Multi-Platform Compatibility</h3>
                    <p class="text-slate-400 font-semibold">
                        Works seamlessly on both <strong>desktop</strong> and <strong>mobile</strong> apps for ultimate convenience. Moreover application <strong>UI</strong> is different in computer and mobile
                    </p>
                </div>
                </div>
                <div class="md:w-1/3 md:p-3 my-4">
                    <div class="rounded-lg bg-white text-justify md:text-center flex items-center flex-col gap-5 w-full p-3">
                    <Icon icon="mynaui:check-circle" width="54" height="54" class="text-green-600" />
                    <h3 class="text-xl text-center font-semibold text-slate-600">Multiple Video Support</h3>
                    <p class="text-slate-400 font-semibold">
                        Support several type of videos. Such as MP4, WEBM, HLS, DASH, Youtube, Vimeo and VR360 videos.
                    </p>
                </div>
                </div>
                <div class="md:w-1/3 md:p-3 my-4">
                    <div class="rounded-lg bg-white text-justify md:text-center flex items-center flex-col gap-5 w-full p-3">
                    <Icon icon="mynaui:check-circle" width="54" height="54" class="text-green-600" />
                    <h3 class="text-xl text-center font-semibold text-slate-600">Content Visibility</h3>
                    <p class="text-slate-400 font-semibold">
                        There are two video Visibility system in our application. You can set your content is <strong>free</strong> either <strong>premium</strong>.
                    </p>
                </div>
                </div>
                <div class="md:w-1/3 md:p-3 my-4">
                    <div class="rounded-lg bg-white text-justify md:text-center flex items-center flex-col gap-5 w-full p-3">
                    <Icon icon="mynaui:check-circle" width="54" height="54" class="text-green-600" />
                    <h3 class="text-xl text-center font-semibold text-slate-600">Authentication</h3>
                    <p class="text-slate-400 font-semibold">
                        There are a strong authentication and authorization system for users and admin. We use laravel and JWT to authenticate users and admin.
                    </p>
                </div>
                </div>
                <div class="md:w-1/3 md:p-3 my-4">
                    <div class="rounded-lg bg-white text-justify md:text-center flex items-center flex-col gap-5 w-full p-3">
                    <Icon icon="mynaui:check-circle" width="54" height="54" class="text-green-600" />
                    <h3 class="text-xl text-center font-semibold text-slate-600">Secure and Private</h3>
                    <p class="text-slate-400 font-semibold">
                        We protect the video URL from scrapper. They can't easily extract it and abuse the URL from your site.
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Icon } from '@iconify/vue';
export default {
    components:{Icon}
}
</script>
