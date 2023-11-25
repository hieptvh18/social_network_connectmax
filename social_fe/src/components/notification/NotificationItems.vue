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
                    <Button label="Ok" icon="pi pi-check" @click="showDialog = false" autofocus />
                </template>
            </Dialog>
        </div>
        <div class="relative py-3 px-2 md:px-3 md:py-4 border-b-[1px]"
            v-for="(post, index) in [1,1,1,1]" :key="index"
            >
            <div class="item flex justify-between items-center gap-2">
                <div class="flex items-center gap-3">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8" cy="8" r="8" fill="#38CB89"/>
                        <circle cx="8" cy="8" r="8" fill="white" fill-opacity="0.8"/>
                        <path d="M11 4.5H5C4.44772 4.5 4 4.94772 4 5.5V9.25C4 9.66421 4.33579 10 4.75 10C5.16421 10 5.5 10.3358 5.5 10.75V11.2929C5.5 11.7383 6.03857 11.9614 6.35355 11.6464L7.70711 10.2929C7.89464 10.1054 8.149 10 8.41421 10H11C11.5523 10 12 9.55228 12 9V5.5C12 4.94772 11.5523 4.5 11 4.5Z" fill="#38CB89"/>
                    </svg>
                    <div class="rounded-full overflow-hidden w-8 h-8 md:w-10 md:h-10">
                        <img src="https://afamilycdn.com/2017/img20170209161144630.jpg" class="w-full h-full object-contain" alt="avatar">
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="font-bold text-sm md:text-base">Yazdan Khan Commented on your photo.</span>
                        <span class="text-xs md:text-sm text-secondary-4e">4 minutes ago</span>
                    </div>
                </div>
                <div class="">
                    <button class="py-2 rounded-md px-2 text-xs bg-primary text-white">Follow back</button>
                </div>
            </div>
        </div>
     </div>
</template>
<script lang="ts" setup>
import { ref } from 'vue';
import Dropdown from 'primevue/dropdown';
import Dialog from 'primevue/dialog';

const showDialog = ref(false);
</script>