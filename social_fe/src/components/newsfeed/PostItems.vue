<template>
    <div class="wrapper mb-[70px] sm:mb-0">
         <!-- ==== dialog ==== -->
         <div class="card flex justify-content-center">
            <Dialog v-model:visible="showDialog" modal header="Header" :style="{ width: '50rem' }" :breakpoints="{ '1199px': '75vw', '575px': '90vw' }">
                <template #header>
                    <div class="inline-flex align-items-center justify-content-center gap-2">
                        <Avatar image="https://primefaces.org/cdn/primevue/images/avatar/amyelsner.png" shape="circle" />
                        <span class="font-bold white-space-nowrap">Amy Elsner</span>
                    </div>
                </template>
                <p class="m-0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <template #footer>
                    <button class="" @click="showDialog = false">Close</button>
                </template>
            </Dialog>
        </div>
        <div class="relative bg-white rounded-2xl p-[18px] mb-2 sm:mb-30"
            v-for="(post, index) in [1,1,1,1]" :key="index"
            >
            <div class="flex justify-between items-center mb-[18px]">
                <div class="flex items-center gap-5">
                    <div class="rounded-full overflow-hidden w-[50px] h-[50px]">
                        <img src="https://i.pinimg.com/280x280_RS/28/db/5e/28db5ed514a161de341f385f0244f720.jpg" class="w-full object-cover" alt="name">
                    </div>
                    <div class="flex flex-col">
                        <router-link class="hover:text-primary" :to="{name:'page.newsfeed'}">Jack Gelish</router-link>
                        <span class="text-xs text-secondary-4e font-medium">2d. Public</span>
                    </div>
                </div>
                <!-- dropdown menu -->
                <div class="">
                    <Menu as="div" class="relative inline-block text-left">
                        <div>
                            <MenuButton class="inline-flex w-full justify-center gap-x-1.5  px-3 py-2 text-sm font-semibold text-gray-900 hover:bg-gray-50">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM14 6C12.9 6 12 6.9 12 8C12 9.1 12.9 10 14 10C15.1 10 16 9.1 16 8C16 6.9 15.1 6 14 6ZM8 6C6.9 6 6 6.9 6 8C6 9.1 6.9 10 8 10C9.1 10 10 9.1 10 8C10 6.9 9.1 6 8 6Z" fill="currentColor"/>
                                <path d="M2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM14 6C12.9 6 12 6.9 12 8C12 9.1 12.9 10 14 10C15.1 10 16 9.1 16 8C16 6.9 15.1 6 14 6ZM8 6C6.9 6 6 6.9 6 8C6 9.1 6.9 10 8 10C9.1 10 10 9.1 10 8C10 6.9 9.1 6 8 6Z" fill="currentColor"/>
                                </svg>
                            </MenuButton>
                        </div>
                    
                        <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                            <MenuItems class="text-sm absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <div class="py-1">
                                <MenuItem>
                                    <button class="block py-2 px-4 w-full hover:bg-secondary2 hover:text-white">Go to post</button>
                                </MenuItem>
                                <MenuItem>
                                    <button class="block py-2 px-4 w-full hover:bg-secondary2 hover:text-white">Delete post</button>
                                </MenuItem>
                            </div>
                            </MenuItems>
                        </transition>
                    </Menu>
                </div>
                <!-- <button class="">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM14 6C12.9 6 12 6.9 12 8C12 9.1 12.9 10 14 10C15.1 10 16 9.1 16 8C16 6.9 15.1 6 14 6ZM8 6C6.9 6 6 6.9 6 8C6 9.1 6.9 10 8 10C9.1 10 10 9.1 10 8C10 6.9 9.1 6 8 6Z" fill="currentColor"/>
                    <path d="M2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM14 6C12.9 6 12 6.9 12 8C12 9.1 12.9 10 14 10C15.1 10 16 9.1 16 8C16 6.9 15.1 6 14 6ZM8 6C6.9 6 6 6.9 6 8C6 9.1 6.9 10 8 10C9.1 10 10 9.1 10 8C10 6.9 9.1 6 8 6Z" fill="currentColor"/>
                    </svg>
                </button> -->
            </div>
            <!-- caption -->
            <p class="font-normal text-sm mb-[18px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea rerum atque laboriosam adipisci iure illum doloribus dolorum beatae?</p>
            <!-- post -->
            <div class="mb-[18px] h-[185px] sm:h-[268px] md:h-[300px] lg:h-[350px] flex justify-between gap-2 overflow-hidden">
                <div class="w-1/2 cursor-pointer" @click="showDialog = true;">
                    <img src="https://i.pinimg.com/280x280_RS/28/db/5e/28db5ed514a161de341f385f0244f720.jpg" class="w-full h-full object-cover rounded-2xl" alt="name">
                </div>
                <div class="w-1/2 flex flex-col gap-y-2">
                    <div class="h-1/2">
                        <img @click="showDialog = true;" src="https://i.pinimg.com/280x280_RS/28/db/5e/28db5ed514a161de341f385f0244f720.jpg" class="w-full object-cover h-full rounded-2xl" alt="name">
                    </div>
                    <div class="h-1/2">
                        <img @click="showDialog = true;" src="https://i.pinimg.com/280x280_RS/28/db/5e/28db5ed514a161de341f385f0244f720.jpg" class="w-full h-full object-cover rounded-2xl" alt="name">
                    </div>
                </div>
            </div>
            <!-- like comment -->
            <div class="flex items-center justify-between mb-[14px]">
                <div class="like flex relative">
                    <div
                    v-for="(item, index) in [1,1,1,1]" 
                    :key="index"
                    class="rounded-full w-[18px] h-[18px]"
                    >
                    <!-- {{ leftValue }} -->
                        <img src="https://www.w3schools.com/howto/img_avatar.png" class="w-full h-full object-cover rounded-2xl" alt="name">
                    </div>
                </div>
                <div class="flex gap-4 text-xs text-secondary-4e sm:text-sm comment-share">
                    <span>3 Comments</span>
                    <span>5 Shares</span>
                </div>
            </div>
            <div class="flex justify-between border-y text-sm sm:text-xs font-medium py-[10px] border-y-secondary-33 mb-[14px]">
                <button class="flex items-center hover:text-red-500 gap-2">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.5941 2.33069C16.4037 4.04841 16.4661 6.78403 14.7829 8.5684L7.99905 15L1.21678 8.5684C-0.466386 6.78403 -0.403187 4.04386 1.40558 2.33069C3.21754 0.615997 6.11589 0.558437 8.00066 2.15801C9.87982 0.560709 12.7838 0.613725 14.5941 2.33069ZM2.53756 3.40237C1.34558 4.53085 1.28558 6.33718 2.38396 7.5308L7.99986 12.8559L13.6158 7.53156C14.7149 6.33718 14.6549 4.53312 13.4614 3.40085C12.2718 2.27237 10.3566 2.21784 9.09903 3.25998L5.7375 6.44321L4.60552 5.37229L6.86548 3.2312L6.79988 3.17894C5.5399 2.22087 3.69834 2.30266 2.53756 3.40237Z" fill="currentColor"/>
                        <path d="M14.5941 2.33069C16.4037 4.04841 16.4661 6.78403 14.7829 8.5684L7.99905 15L1.21678 8.5684C-0.466386 6.78403 -0.403187 4.04386 1.40558 2.33069C3.21754 0.615997 6.11589 0.558437 8.00066 2.15801C9.87982 0.560709 12.7838 0.613725 14.5941 2.33069ZM2.53756 3.40237C1.34558 4.53085 1.28558 6.33718 2.38396 7.5308L7.99986 12.8559L13.6158 7.53156C14.7149 6.33718 14.6549 4.53312 13.4614 3.40085C12.2718 2.27237 10.3566 2.21784 9.09903 3.25998L5.7375 6.44321L4.60552 5.37229L6.86548 3.2312L6.79988 3.17894C5.5399 2.22087 3.69834 2.30266 2.53756 3.40237Z" fill="currentColor"/>
                    </svg>
                    <span>Like</span>
                </button>
                <button class="flex items-center hover:text-red-500 gap-2">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.4 0H9.6C11.2974 0 12.9253 0.691573 14.1255 1.92258C15.3257 3.15359 16 4.82319 16 6.5641C16 8.30501 15.3257 9.97462 14.1255 11.2056C12.9253 12.4366 11.2974 13.1282 9.6 13.1282V16C5.6 14.359 0 11.8974 0 6.5641C0 4.82319 0.674284 3.15359 1.87452 1.92258C3.07475 0.691573 4.70261 0 6.4 0ZM8 11.4872H9.6C10.2303 11.4872 10.8545 11.3598 11.4369 11.1124C12.0192 10.865 12.5484 10.5024 12.9941 10.0452C13.4398 9.58809 13.7934 9.04538 14.0346 8.44808C14.2758 7.85079 14.4 7.21061 14.4 6.5641C14.4 5.91759 14.2758 5.27742 14.0346 4.68012C13.7934 4.08283 13.4398 3.54011 12.9941 3.08296C12.5484 2.62581 12.0192 2.26318 11.4369 2.01577C10.8545 1.76836 10.2303 1.64103 9.6 1.64103H6.4C5.12696 1.64103 3.90606 2.15971 3.00589 3.08296C2.10571 4.00622 1.6 5.25842 1.6 6.5641C1.6 9.52615 3.5696 11.4593 8 13.5221V11.4872Z" fill="white"/>
                    <path d="M6.4 0H9.6C11.2974 0 12.9253 0.691573 14.1255 1.92258C15.3257 3.15359 16 4.82319 16 6.5641C16 8.30501 15.3257 9.97462 14.1255 11.2056C12.9253 12.4366 11.2974 13.1282 9.6 13.1282V16C5.6 14.359 0 11.8974 0 6.5641C0 4.82319 0.674284 3.15359 1.87452 1.92258C3.07475 0.691573 4.70261 0 6.4 0ZM8 11.4872H9.6C10.2303 11.4872 10.8545 11.3598 11.4369 11.1124C12.0192 10.865 12.5484 10.5024 12.9941 10.0452C13.4398 9.58809 13.7934 9.04538 14.0346 8.44808C14.2758 7.85079 14.4 7.21061 14.4 6.5641C14.4 5.91759 14.2758 5.27742 14.0346 4.68012C13.7934 4.08283 13.4398 3.54011 12.9941 3.08296C12.5484 2.62581 12.0192 2.26318 11.4369 2.01577C10.8545 1.76836 10.2303 1.64103 9.6 1.64103H6.4C5.12696 1.64103 3.90606 2.15971 3.00589 3.08296C2.10571 4.00622 1.6 5.25842 1.6 6.5641C1.6 9.52615 3.5696 11.4593 8 13.5221V11.4872Z" fill="#4E5D78"/>
                    </svg>
                    <span>Comments</span>
                </button>
                <button class="flex items-center hover:text-red-500 gap-2">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.80488 10.4706L6.2439 10.4706C4.96359 10.4701 3.7075 10.8388 2.61141 11.537C1.51533 12.2351 0.620957 13.2361 0.0249767 14.4318C0.00822477 14.2099 -0.000107147 13.9873 1.04009e-06 13.7647C1.04009e-06 9.21635 3.49424 5.52941 7.80488 5.52941L7.80488 1L16 8L7.80488 15L7.80488 10.4706ZM6.2439 8.82353H9.36585V11.5478L13.5188 8L9.36585 4.45223V7.17647H7.80488C6.90751 7.17541 6.02052 7.37891 5.2046 7.77305C4.38867 8.1672 3.66308 8.74268 3.07746 9.46012C4.08532 9.03865 5.15978 8.82264 6.2439 8.82353Z" fill="white"/>
                    <path d="M7.80488 10.4706L6.2439 10.4706C4.96359 10.4701 3.7075 10.8388 2.61141 11.537C1.51533 12.2351 0.620957 13.2361 0.0249767 14.4318C0.00822477 14.2099 -0.000107147 13.9873 1.04009e-06 13.7647C1.04009e-06 9.21635 3.49424 5.52941 7.80488 5.52941L7.80488 1L16 8L7.80488 15L7.80488 10.4706ZM6.2439 8.82353H9.36585V11.5478L13.5188 8L9.36585 4.45223V7.17647H7.80488C6.90751 7.17541 6.02052 7.37891 5.2046 7.77305C4.38867 8.1672 3.66308 8.74268 3.07746 9.46012C4.08532 9.03865 5.15978 8.82264 6.2439 8.82353Z" fill="#4E5D78"/>
                    </svg>
                    <span>Share</span>
                </button>
            </div>
            <!-- form comments -->
            <div class="flex justify-between gap-[14px]">
                <div class="rounded-full w-[38px] h-[38px] overflow-hidden">
                    <img src="https://www.w3schools.com/howto/img_avatar.png" class="w-full h-full object-cover" alt="name">
                </div>
                <FormCommentPost :post="post" :postIdx="index" />
            </div>
            <!-- preview file comment -->
            <div 
            v-if="false"
            class="flex mt-5 justify-between items-start">
                <div class="h-[80px] w-1/3 overflow-hidden">
                        <img src=""
                        :ref="'file_comment_preview'+index"
                        class="w-full h-full object-cover" alt="">
                </div>
                <button class="close">
                    <svg class="pointer-events-none" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 16C3.5816 16 0 12.4184 0 8C0 3.5816 3.5816 0 8 0C12.4184 0 16 3.5816 16 8C16 12.4184 12.4184 16 8 16ZM8 14.4C9.69739 14.4 11.3253 13.7257 12.5255 12.5255C13.7257 11.3253 14.4 9.69739 14.4 8C14.4 6.30261 13.7257 4.67475 12.5255 3.47452C11.3253 2.27428 9.69739 1.6 8 1.6C6.30261 1.6 4.67475 2.27428 3.47452 3.47452C2.27428 4.67475 1.6 6.30261 1.6 8C1.6 9.69739 2.27428 11.3253 3.47452 12.5255C4.67475 13.7257 6.30261 14.4 8 14.4ZM8 6.8688L10.2624 4.6056L11.3944 5.7376L9.1312 8L11.3944 10.2624L10.2624 11.3944L8 9.1312L5.7376 11.3944L4.6056 10.2624L6.8688 8L4.6056 5.7376L5.7376 4.6056L8 6.8688Z" fill="white"/>
                    <path d="M8 16C3.5816 16 0 12.4184 0 8C0 3.5816 3.5816 0 8 0C12.4184 0 16 3.5816 16 8C16 12.4184 12.4184 16 8 16ZM8 14.4C9.69739 14.4 11.3253 13.7257 12.5255 12.5255C13.7257 11.3253 14.4 9.69739 14.4 8C14.4 6.30261 13.7257 4.67475 12.5255 3.47452C11.3253 2.27428 9.69739 1.6 8 1.6C6.30261 1.6 4.67475 2.27428 3.47452 3.47452C2.27428 4.67475 1.6 6.30261 1.6 8C1.6 9.69739 2.27428 11.3253 3.47452 12.5255C4.67475 13.7257 6.30261 14.4 8 14.4ZM8 6.8688L10.2624 4.6056L11.3944 5.7376L9.1312 8L11.3944 10.2624L10.2624 11.3944L8 9.1312L5.7376 11.3944L4.6056 10.2624L6.8688 8L4.6056 5.7376L5.7376 4.6056L8 6.8688Z" fill="#4E5D78"/>
                    </svg>
                </button>
            </div> 
        </div>
     </div>
</template>
<script lang="ts">
import { ref } from 'vue';
import Dialog from 'primevue/dialog';
import FormCommentPost from '@/components/common/FormCommentPost.vue';
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'

export default{
    name:'post-items',
    components:{FormCommentPost, Menu, MenuButton, MenuItem, MenuItems},
    data(){
        return{
            file_comment_preview:"",
            showDialog:ref(false)
        }
    },
    methods:{
        previewFileComment(input: HTMLInputElement,postIdx:Number){
            const self = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    let refName = 'file_comment_preview'+postIdx;
                    self.file_comment_preview = e.target.result;
                    self.$refs.refName
                        .setAttribute('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        },
        removeFilePreview(e:HTMLInputElement){
            
        },
    },
    setup(){
        const selectedCity = ref();
        const cities = ref([
            { name: 'New York', code: 'NY' },
            { name: 'Rome', code: 'RM' },
            { name: 'London', code: 'LDN' },
            { name: 'Istanbul', code: 'IST' },
            { name: 'Paris', code: 'PRS' }
        ]);

        return {
            selectedCity,
            cities
        }
    }
}
</script>