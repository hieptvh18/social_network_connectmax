<script setup lang="ts">
import { RouterView } from 'vue-router'
import {useAuthStore} from '@/stores/auth';
import { onBeforeMount } from 'vue';

onBeforeMount(()=>{
  const auth = useAuthStore();
  auth.loadlUserState();
})
</script>

<template>
  <RouterView />
</template>
