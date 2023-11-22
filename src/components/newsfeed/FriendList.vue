<template>
    <div>
        <div class="flex justify-between items-center mb-5">
            <h5 class="text-secondary font-bold">Friends</h5>
            <div class="bar cursor-pointer">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM14 6C12.9 6 12 6.9 12 8C12 9.1 12.9 10 14 10C15.1 10 16 9.1 16 8C16 6.9 15.1 6 14 6ZM8 6C6.9 6 6 6.9 6 8C6 9.1 6.9 10 8 10C9.1 10 10 9.1 10 8C10 6.9 9.1 6 8 6Z" fill="white"/>
                <path d="M2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM14 6C12.9 6 12 6.9 12 8C12 9.1 12.9 10 14 10C15.1 10 16 9.1 16 8C16 6.9 15.1 6 14 6ZM8 6C6.9 6 6 6.9 6 8C6 9.1 6.9 10 8 10C9.1 10 10 9.1 10 8C10 6.9 9.1 6 8 6Z" fill="#4E5D78"/>
                </svg>
            </div>
        </div>
        <ul class="">
            <li
            v-for="(item, index) in friends" :key="index"
             class="flex items-center justify-between mb-[18px]">
                <div class="flex items-center gap-2">
                    <div class="avatar w-10 h-10 rounded-full overflow-hidden">
                        <img src="https://i.pinimg.com/280x280_RS/28/db/5e/28db5ed514a161de341f385f0244f720.jpg" class="w-full object-cover" alt="name">
                    </div>
                    <span class="text-secondary font-medium w-[65%] text-wrap-no overflow-hidden text-ellipsis">John simon</span>
                </div>
                <div class="status">
                    <span class="text-xs">2 min</span>
                </div>
            </li>
        </ul>
    </div>
</template>
<script lang="ts">
export default{
    name:'friend-list',
    data(){
      return {
        friends:[1,1,1,1,1,1,1,1,1,1,1]
      }  
    },
    methods:{

    }
}
</script>