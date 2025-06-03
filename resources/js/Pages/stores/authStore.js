import { defineStore } from "pinia";

export const authStore = defineStore('authStore',{
    state: ()=>{
        return {
            isAuth:false,
            name:"Rony ME"
        }
    },
    actions:{}
})
