<template>
  <Toast/>
  <div class="auth-container mt-20">
    <h3 class="mb-5 text-center text-lg font-black sm:text-3xl">Enter the code from your email</h3>
    <p class="text-center text-sm sm:font-medium px-10 mb-5">
      We’ve sent code to your email address: {{ email ?? '' }}
    </p>
    <div class="box-form my-0 mt-30 mx-auto px-10 md:w-full lg:w-2/5">
      <div class="">
        <form @submit.prevent="handleVerify" class="mb-10">
          <input
            type="text"
            v-model="code"
            placeholder="Enter code"
            class="border-2 bg-secondary1 w-full text-black py-4 px-10 rounded-xl focus:border-blue-900 mb-30"
          />
          <button
            class="bg-primary w-full text-white py-4 px-10 rounded-xl focus:bg-blue-900 hover:bg-blue-900"
          >
            Send
          </button>
        </form>
        <div class="flex justify-center font-medium gap-3">
          <span>Didn’t receive an email?</span>
          <button type="button" class="text-blue-600 flex items-center gap-3">Resend</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts" setup>
import { useRoute } from 'vue-router'
import { useToast } from 'primevue/usetoast'
import { ref } from 'vue'
import { getUserByUsername, verifyRegister } from '@/api/auth'
import router from '@/router'

let email = ref('')
let code = ref('')
const username = useRoute().query.code // code == username

// redirect if not param code
if(!username) router.push({name:'page.404'}) ;

const toast = useToast()

if (!username) router.push({ name: 'page.register' })

// get user by username
const fetchUser = async () => {
  let resp: any = await getUserByUsername(username)
  if (resp.status == 200) {
    email.value = resp.data.user.email
  }
}
fetchUser() 

// handle verify
const handleVerify = async () => {
  try {
    if (!code.value) {
      toast.add({ severity: 'error', summary: 'Erorr', detail: 'Please enter code!', life: 3000 });
      return;
    }

    let resp = await verifyRegister({username:username,code:code.value});  
    
    if(!resp.data.data.success){
      toast.add({ severity: 'error', summary: 'Erorr', detail: 'Code verify invalid! Try again!', life: 3000 });
      return;
    }
     
    router.push({name:"page.signin"});
    toast.add({ severity: 'success', summary: 'Success', detail: 'Verify code success!', life: 3000 });
  } catch (er: any) {
    toast.add({ severity: 'error', summary: 'Erorr', detail: 'Server error!', life: 3000 })
  }
}
</script>
