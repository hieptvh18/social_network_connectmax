<template>
    <div class="bg-white rounded-2xl py-[10px] mt-30">
    <div
      class="flex justify-between items-center pb-[9px] px-[18px] border-b border-b-secondary-33"
    >
      <h5 class="font-bold">Recent Event</h5>
      <div class="">
        <button class="">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM14 6C12.9 6 12 6.9 12 8C12 9.1 12.9 10 14 10C15.1 10 16 9.1 16 8C16 6.9 15.1 6 14 6ZM8 6C6.9 6 6 6.9 6 8C6 9.1 6.9 10 8 10C9.1 10 10 9.1 10 8C10 6.9 9.1 6 8 6Z" fill="currentColor"/>
                <path d="M2 6C0.9 6 0 6.9 0 8C0 9.1 0.9 10 2 10C3.1 10 4 9.1 4 8C4 6.9 3.1 6 2 6ZM14 6C12.9 6 12 6.9 12 8C12 9.1 12.9 10 14 10C15.1 10 16 9.1 16 8C16 6.9 15.1 6 14 6ZM8 6C6.9 6 6 6.9 6 8C6 9.1 6.9 10 8 10C9.1 10 10 9.1 10 8C10 6.9 9.1 6 8 6Z" fill="currentColor"/>
                </svg>
        </button>
      </div>
    </div>
    <div 
    v-for="(item, index) in [1,1,1]" :key="index"
    class="mt-[20px] mx-[18px]">
      <div class="flex items-start gap-3 ">
        <div class="bg-secondary1 p-3 rounded-[10px]">
            <div class="flex gap-5 pb-3 border-b border-b-secondary-33 mb-3">
                <div class="flex justify-center items-center w-10 h-10 bg-green-100 rounded-md">
                    <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11 13.4807C11 13.8457 11.3805 14.0964 11.7221 13.968C12.9648 13.5007 15.7449 12.6044 19.538 12.2614C19.7983 12.2378 20.0001 12.0276 20.0001 11.7662C20.0001 9.85102 20.0001 2.48112 20.0001 0.491175C20.0001 0.215033 19.7786 -0.00425403 19.5028 0.00951896C18.2477 0.0721931 14.8014 0.380848 11.2953 1.9009C11.1152 1.97899 11 2.1574 11 2.35371C11 3.95727 11 11.0941 11 13.4807Z" fill="#38CB89"/>
                    <path opacity="0.6" fill-rule="evenodd" clip-rule="evenodd" d="M8.99999 13.4807C8.99999 13.8457 8.61952 14.0964 8.27792 13.968C7.03515 13.5007 4.25514 12.6044 0.461952 12.2614C0.201698 12.2378 -5.43594e-05 12.0276 -5.43594e-05 11.7662C-5.43594e-05 9.85102 -5.43594e-05 2.48112 -5.43594e-05 0.491175C-5.43594e-05 0.215033 0.221433 -0.00425404 0.497231 0.00951895C1.75226 0.0721931 5.19858 0.380848 8.70471 1.9009C8.88483 1.97899 8.99999 2.1574 8.99999 2.35371C8.99999 3.95727 8.99999 11.0941 8.99999 13.4807Z" fill="#38CB89"/>
                    </svg>
                </div>
                <div class="w-[80%]">
                    <span class="font-medium">Graduation Ceremony</span>
                    <p class="text-xs font-medium text-secondary-4e leading-[18px]">The graduation ceremony is also sometimes called...</p>
                </div>
            </div>
            <div class="flex justify-between items-center">
                <div class="font-meidum text-xs">8 Seens</div>
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
            </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script lang="ts">
export default{
    name:'recent-event',
    methods:{
        
    }
}
</script>