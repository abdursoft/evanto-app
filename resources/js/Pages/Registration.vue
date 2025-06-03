<template>
    <head>
        <title>Product Registration</title>
    </head>
    <div class="w-full max-w-[1060px] m-auto flex items-center flex-col my-12 px-3 md:px-0" data-aos="fade-up">
        <h4 class="bg-slate-200 py-2 px-4 rounded-lg max-w-[250px] text-blue-800 font-bold">Product Registration</h4>
        <h1 class="font-base md:font-[700] text-center text-slate-600 mt-3 text-[28px] md:text-[45px] ls-0">Let's secure your software</h1>
        <h4 class="text-justify md:text-center text-slate-500 text-base md:text-lg md:font-semibold mt-3">Protect your software and let's connected for new updates, <br />We'll notify you for every updates.</h4>
        <div class="my-5 w-full md:w-2/3 flex items-center flex-col md:flex-row justify-center gap-5">
            <AddProduct />
        </div>
    </div>
</template>

<script>
import AddProduct from "./components/forms/AddProduct.vue";
import HomeLayout from "./layouts/HomeLayout.vue";

export default{
    components:{AddProduct},
    layout: (h,page) => h(HomeLayout, {size: 'large'}, () => page)
}
</script>
