<template>
    <div class="main-layout-container">
        <header class="bg-white py-6 px-5">
            <Header></Header>
        </header>
        <main class="flex">
            <aside class="hidden sm:inline-block min-h-screen sm:w-2/12 bg-white py-6 px-5">
                <Sidebar></Sidebar>
            </aside>
            <section class="sm:w-10/12">
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
    background-color: #4E5D7808;
}
</style>