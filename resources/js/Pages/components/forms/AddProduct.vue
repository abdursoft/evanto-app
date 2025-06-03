<template>
    <div class="rounded-lg bg-slate-100 w-full p-3">
        <div v-if="page.props.message" class="text-sm text-white my-3 rounded-md p-3 bg-green-600">
            {{ page.props.message }}
        </div>

        <form @submit.prevent="formSubmission">
            <div class="w-full flex items-center flex-col md:flex-row flex-wrap md:justify-between p-1">
                <div class="p-2 my-2 w-full md:w-1/2">
                    <input type="text" v-model="form.name" class="py-3 px-4 h-[50px] rounded-md border-gray-400 w-full"
                        placeholder="Your Name">
                    <div v-if="form.errors.name" class="text-sm text-red-500">{{ form.errors.name }}</div>
                </div>
                <div class="p-2 my-2 w-full md:w-1/2">
                    <input type="email" v-model="form.email"
                        class="py-3 px-4 h-[50px] rounded-md border-gray-400 w-full" placeholder="Your Email">
                    <div v-if="form.errors.email" class="text-sm text-red-500">{{ form.errors.email }}</div>
                </div>
                <div class="p-2 my-2 w-full md:w-1/2">
                    <input type="text" v-model="form.purchase_code"
                        class="py-3 px-4 h-[50px] rounded-md border-gray-400 w-full" placeholder="Purchase Code">
                    <div v-if="form.errors.purchase_code" class="text-sm text-red-500">{{ form.errors.purchase_code }}
                    </div>
                </div>
                <div class="p-2 my-2 w-full md:w-1/2">
                    <input type="text" v-model="form.domain"
                        class="py-3 px-4 h-[50px] rounded-md border-gray-400 w-full" placeholder="Your Domain">
                    <div v-if="form.errors.domain" class="text-sm text-red-500">{{ form.errors.domain }}</div>
                </div>
                <div class="p-2 my-2 w-full md:w-1/2">
                    <input type="text" v-model="form.company"
                        class="py-3 px-4 h-[50px] rounded-md border-gray-400 w-full" placeholder="Company Name">
                    <div v-if="form.errors.company" class="text-sm text-red-500">{{ form.errors.company }}</div>
                </div>
                <div class="p-2 my-2 w-full md:w-1/2">
                    <input type="text" v-model="form.address"
                        class="py-3 px-4 h-[50px] rounded-md border-gray-400 w-full" placeholder="Address">
                    <div v-if="form.errors.address" class="text-sm text-red-500">{{ form.errors.address }}</div>
                </div>
                <div class="p-2 my-2 w-full">
                    <input type="text" v-model="form.product_id"
                        class="py-3 px-4 h-[50px] rounded-md border-gray-400 w-full" placeholder="Product ID">
                    <div v-if="form.errors.product_id" class="text-sm text-red-500">{{ form.errors.product_id }}</div>
                </div>
            </div>
            <div class="flex items-center justify-between w-full mt-2 p-3">
                <span></span>
                <button class="p-2 rounded-md bg-orange-500 text-white text-center min-w-[140px]"
                    :disabled="form.processing">Register</button>
            </div>
        </form>
    </div>
</template>


<script setup>
import { useForm, usePage } from '@inertiajs/vue3';

let page = usePage();

let form = useForm({
    name: null,
    email: null,
    domain: null,
    company: null,
    address: null,
    product_id: null,
    purchase_code: null
});

let formSubmission = () => {
    form.post('/add-product', {
        onSuccess: (Response) => {
            // console.log(Response)
            console.log('request success')
        },
        onError: (error) => {
            console.log(error);
        }
    });
}

</script>
