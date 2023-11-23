<template>
    <div class="main-layout-container">
        <header class="bg-white py-6 px-5">
            <Header></Header>
        </header>
        <main class="flex flex-col sm:flex-row">
            <aside class="fixed bottom-0 left-0 z-50 sm:relative sm:inline-block sm:min-h-screen sm:w-2/12 bg-white pt-2 sm:py-6 px-5">
                <Sidebar></Sidebar>
            </aside>
            <section class="w-full sm:w-10/12">
                <router-view></router-view>
            </section>
        </main>
    </div>
</template>
<script lang="ts">
import Header from '@/components/blocks/Header.vue';
import Sidebar from '@/components/blocks/Sidebar.vue';

export default{
    name:'main-layout',
    components:{Header,Sidebar},
    methods:{
        
    }
}
</script>
<style lang="scss">
body{
    // background-color: #4E5D7808;
    color: var(--secondary-color);
}
</style>