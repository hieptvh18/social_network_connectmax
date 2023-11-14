<template>
    <div class="auth-layout-container">
        <header>
            <div class="logo">
                <img src="@/assets/images/Logo.png" alt="logo">
            </div>
            <div class="lang">

            </div>
        </header>
        <main>
            <router-view></router-view>
        </main>
    </div>
</template>
<script lang="ts">

export default{
    name:'auth-layout',
}
</script>
<style lang="scss">

</style>