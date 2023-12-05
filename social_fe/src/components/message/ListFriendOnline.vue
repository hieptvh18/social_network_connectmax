<template>
    <div class="hidden sm:block">
        <ul class="max-h-screen h-[80vh] overflow-y-scroll">
            <li
            v-for="(item, index) in [1,1,1,2,3,1,1,1,1,1,1,1,1,1,1,1]" :key="index"
             class="">
                <router-link :to="{name:'page.message'}" class="flex justify-between rounded-lg gap-2 px-5 py-3 hover:bg-secondary1">
                    <div class="flex items-center gap-2">
                        <div class="avatar w-10 h-10 rounded-full overflow-hidden">
                            <img src="https://i.pinimg.com/280x280_RS/28/db/5e/28db5ed514a161de341f385f0244f720.jpg" class="w-full object-cover" alt="name">
                        </div>
                        <div class="flex flex-col">
                            <span class="text-secondary font-medium w-[65%] text-wrap-no overflow-hidden text-ellipsis">Friend {{ index }}</span>
                            <span class="text-xs text-secondary2">Thank you very much</span>
                        </div>
                    </div>
                    <div class="text-xs text-secodary-2">2:00 am</div>
                </router-link>
            </li>
        </ul>
    </div>
</template>
<script lang="ts" setup>

</script>