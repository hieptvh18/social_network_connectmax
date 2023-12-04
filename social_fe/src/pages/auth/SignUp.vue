<template>
  <!-- lib -->
  <Toast />
  <Loader v-if="processing" />

  <div class="auth-container mt-20 sm:mt-10">
    <h3 class="mb-5 text-center text-lg font-black sm:text-3xl">Getting Started</h3>
    <p class="text-center text-sm sm:font-medium px-10 mb-5">
      Create an account to continue and connect with the people.
    </p>
    <div class="box-form my-0 mx-auto shadow-md p-10 md:w-full lg:w-2/5">
      <div class="">
        <div class="social-login flex justify-between gap-2 sm:gap-5 mb-10">
          <button
            class="flex w-full items-center justify-center px-2 sm:py-4 sm:px-9 bg-gray-200 font-medium rounded-lg sm:gap-3 gap-1 focus:bg-gray-300 hover:bg-gray-300 text-sm sm:text-base h-10 sm:h-auto"
          >
            <font-awesome-icon icon="fa-brands fa-google" />
            <span>Log in with Google</span>
          </button>
          <button
            class="flex w-full items-center justify-center px-2 sm:py-4 sm:px-9 bg-gray-200 font-medium rounded-lg sm:gap-3 gap-1 focus:bg-gray-300 hover:bg-gray-300 text-sm sm:text-base h-10 sm:h-auto"
          >
            <font-awesome-icon icon="fa-brands fa-apple" />
            <span>Log in with Apple</span>
          </button>
        </div>
        <div class="line-or mb-10 flex items-center gap-5">
          <div class="h-px w-full bg-slate-200"></div>
          <div class="font-bold">OR</div>
          <div class="h-px w-full bg-slate-200"></div>
        </div>
        <form @submit.prevent="handleRegister" action="" method="POST" class="mb-10">
          <div class="flex items-center gap-1 mb-5 border-solid border rounded-lg">
            <div class="w-auto pl-2">@</div>
            <input
              class="w-full p-3 pl-2 placeholder:text-sm focus:outline-none"
              type="email"
              placeholder="Your Email"
              v-model="email"
            />
          </div>
          <div v-if="errorMessages.email" class="error-field text-red-600 text-sm mb-2">
            {{ errorMessages.email[0] }}
          </div>
          <div class="flex items-center gap-1 mb-5 border-solid border rounded-lg">
            <div class="w-auto pl-2"><font-awesome-icon :icon="['far', 'face-smile']" /></div>
            <input
              class="w-full p-3 pl-2 placeholder:text-sm focus:outline-none"
              type="text"
              placeholder="Your Name"
              v-model="name"
            />
          </div>
          <div v-if="errorMessages.name" class="error-field text-red-600 text-sm mb-2">
            {{ errorMessages.name[0] }}
          </div>
          <div class="flex items-center gap-1 mb-5 border-solid border rounded-lg">
            <div class="w-auto pl-2"><font-awesome-icon :icon="['fas', 'lock']" /></div>
            <input
              ref="passwordField"
              class="w-full p-3 pl-2 placeholder:text-sm focus:outline-none"
              type="password"
              placeholder="Your Password"
              v-model="password"
            />
            <button type="button" @click="showHidePassword" class="mr-3">
              <font-awesome-icon v-if="!isShowPassword" :icon="['far', 'eye-slash']" />
              <font-awesome-icon v-if="isShowPassword" :icon="['far', 'eye']" />
            </button>
          </div>
          <div v-if="errorMessages.password" class="error-field text-red-600 text-sm mb-2">
            {{ errorMessages.password[0] }}
          </div>

          <div class="sm:flex sm:justify-between sm:gap-2 sm:items-center mb-5">
            <div class="date-box w-full mb-5 sm:mb-0">
              <VueDatePicker v-model="date" :format="formatDate" placeholder="Date of birth"
                :max-date="new Date()"
               :enable-time-picker="false" />
            </div>
            <div v-if="errorMessages.birthday" class="error-field text-red-600 text-sm mb-2">
              {{ errorMessages.birthday[0] }}
            </div>
            <div class="flex items-center w-full gap-1 border-solid border rounded-lg">
              <div class="w-1/12 pl-2"><font-awesome-icon :icon="['fas', 'mars']" /></div>
              <div class="radio-group w-full p-3 flex justify-center gap-4">
                <div class="flex gap-3">
                  <input v-model="gender" type="radio" class="w-4" name="gender" checked value="MALE" id="male">
                  <label for="male">Male</label>
                </div>
                <div class="flex gap-3">
                  <input v-model="gender" type="radio" class="w-4" name="gender" value="FEMALE" id="female">
                  <label for="female">Female</label>
                </div>
              </div>
            </div>
            <div v-if="errorMessages.gender" class="error-field text-red-600 text-sm mb-2">
              {{ errorMessages.gender[0] }}
            </div>
          </div>

          <button
            class="bg-primary w-full text-white py-4 px-10 rounded-xl focus:bg-blue-900 hover:bg-blue-900"
          >
            Sign up
          </button>
        </form>
        <div class="flex justify-center gap-3 font-medium">
          <div class="">Already have an account?</div>
          <router-link class="text-blue-600" :to="{name:'page.signin'}">Sign In</router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts" setup>
import { ref } from 'vue'
import VueDatePicker from '@vuepic/vue-datepicker'
import '@vuepic/vue-datepicker/dist/main.css'
import {register} from '@/api/auth';
import {EnumGender} from '@/enums/GenderEnum';
import { useToast } from 'primevue/usetoast';
import router from '@/router';
import Loader from '@/components/common/Loader.vue'

const toast = useToast();

let isShowPassword = ref(false);
let date = ref(new Date());
let email = ref('');
let name = ref('');
let gender = ref('MALE');
let password = ref('');
let passwordField = ref('');
let errorMessages = ref({});

let processing = ref(false);

const showHidePassword = ()=>{
  const type = passwordField.value.getAttribute('type')
  let typeSet = type == 'password' ? 'text' : 'password'
  passwordField.value.setAttribute('type', typeSet)
  isShowPassword.value = !isShowPassword.value
}

const formatDate = (date: any) => {
  if(!date) return new Date();

  const day = date.getDate();
  const month = date.getMonth() + 1;
  const year = date.getFullYear();

  return `${year}-${month}-${day}`;
}

const handleRegister = async ()=>{
  processing.value = true;
  try{
    let FormData = {
      email: email.value,
      name: name.value,
      birthday: formatDate(date.value),
      gender: gender.value,
      password: password.value
    }
    
    const resp: any = await register(FormData);
    
    if(resp.status == 200){
      processing.value = false;
      toast.add({ severity: 'success', summary: 'Success', detail: resp.data.message, life: 3000 });
      errorMessages.value = {};

      // redirect to verify email
      router.push({name:'page.signup.verify',query:{code:resp.data.data.username}});
    }
  }catch(er:any){
    console.log(er);
    processing.value = false;
    toast.add({ severity: 'error', summary: 'Error', detail: er.response.data.message, life: 3000 });

    // show error validate
    if(er.response.status == 422){
      errorMessages.value = er.response.data.errors;
    }
  }
}
</script>

<style lang="scss" scoped>
input.dp__input{
  background-color: #000 !important;
}
</style>
