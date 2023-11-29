<template>
  <div class="bg-secondary1 rounded-2xl p-0 md:p-30">
    <div class="page.setting bg-white rounded-2xl flex">
      <!-- left menu -->
      <div
        class="w-full md:w-1/4 px-5 py-[10px] md:px-[30px] md:py-5 border-r-2 border-secondary-33"
      >
        <ul>
          <li>Max / Setting</li>
          <li>Language</li>
          <li>Language</li>
        </ul>
      </div>
      <!-- right content -->
      <div class="hidden md:block md:w-3/4 px-5 py-[10px] md:px-[30px] md:py-5">
        <h5 class="mb-30">Edit Profile</h5>
        <div
          class="relative rounded-full h-[84px] md:h-[150px] w-[84px] md:w-[150px] overflow-hidden border-4 border-white mb-30"
        >
          <img
            src="https://vcdn1-vnexpress.vnecdn.net/2019/07/30/anh-thien-nhien-dep-thang-7-1564483719.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=Nl3znv-VRtPyhJYhLwwRfA"
            class="w-full h-full object-cover"
            alt="banner"
          />
          <input type="file" ref="inputUploapAvatar" class="hidden" name="" id="" />
          <button
            ref="btnUploadAvatar"
            class="rounded-full flex justify-center items-center bg-white overflow-hidden w-[26px] h-[26px] md:w-[30px] md:h-[30px] absolute right-0 bottom-1 md:right-2 md:bottom-4"
          >
            <svg
              width="16"
              height="16"
              viewBox="0 0 16 16"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M7.99991 8.4102L11.0838 11.3796L10.0554 12.3701L8.72673 11.0905V15H7.27309V11.0891L5.94446 12.3701L4.91601 11.3796L7.99991 8.4102ZM7.99991 1C9.24785 1.00006 10.4522 1.44178 11.3841 2.24118C12.316 3.04059 12.9104 4.14192 13.0542 5.3358C13.9586 5.57332 14.7475 6.10937 15.2831 6.85027C15.8187 7.59117 16.067 8.48978 15.9845 9.38907C15.902 10.2884 15.4939 11.1311 14.8317 11.7701C14.1695 12.409 13.2952 12.8035 12.3616 12.8846V11.4748C12.696 11.4288 13.0176 11.3191 13.3076 11.1521C13.5975 10.9851 13.85 10.7641 14.0504 10.5021C14.2507 10.2401 14.3948 9.94224 14.4743 9.62599C14.5538 9.30974 14.5671 8.9814 14.5135 8.66015C14.4598 8.33889 14.3402 8.03115 14.1617 7.7549C13.9832 7.47864 13.7493 7.23939 13.4737 7.05113C13.1982 6.86286 12.8864 6.72935 12.5567 6.65839C12.227 6.58742 11.8859 6.58042 11.5533 6.6378C11.6672 6.12742 11.661 5.59898 11.5353 5.09119C11.4096 4.58339 11.1676 4.10911 10.8269 3.70307C10.4863 3.29703 10.0556 2.96952 9.56655 2.74454C9.07745 2.51955 8.5423 2.40278 8.00027 2.40278C7.45825 2.40278 6.92309 2.51955 6.434 2.74454C5.9449 2.96952 5.51426 3.29703 5.1736 3.70307C4.83295 4.10911 4.59091 4.58339 4.46523 5.09119C4.33954 5.59898 4.33339 6.12742 4.44722 6.6378C3.7841 6.51787 3.09869 6.65655 2.54174 7.02333C1.9848 7.39012 1.60195 7.95496 1.47743 8.5936C1.3529 9.23224 1.4969 9.89237 1.87773 10.4288C2.25857 10.9652 2.84505 11.3339 3.50816 11.4538L3.63899 11.4748V12.8846C2.70535 12.8036 1.83096 12.4092 1.16863 11.7703C0.506297 11.1314 0.0981622 10.2887 0.015557 9.38938C-0.0670482 8.49007 0.18113 7.5914 0.716716 6.85044C1.2523 6.10949 2.04123 5.57337 2.94561 5.3358C3.0893 4.14186 3.68362 3.04044 4.61553 2.24101C5.54744 1.44157 6.75193 0.999904 7.99991 1Z"
                fill="currentColor"
              />
              <path
                d="M7.99991 8.4102L11.0838 11.3796L10.0554 12.3701L8.72673 11.0905V15H7.27309V11.0891L5.94446 12.3701L4.91601 11.3796L7.99991 8.4102ZM7.99991 1C9.24785 1.00006 10.4522 1.44178 11.3841 2.24118C12.316 3.04059 12.9104 4.14192 13.0542 5.3358C13.9586 5.57332 14.7475 6.10937 15.2831 6.85027C15.8187 7.59117 16.067 8.48978 15.9845 9.38907C15.902 10.2884 15.4939 11.1311 14.8317 11.7701C14.1695 12.409 13.2952 12.8035 12.3616 12.8846V11.4748C12.696 11.4288 13.0176 11.3191 13.3076 11.1521C13.5975 10.9851 13.85 10.7641 14.0504 10.5021C14.2507 10.2401 14.3948 9.94224 14.4743 9.62599C14.5538 9.30974 14.5671 8.9814 14.5135 8.66015C14.4598 8.33889 14.3402 8.03115 14.1617 7.7549C13.9832 7.47864 13.7493 7.23939 13.4737 7.05113C13.1982 6.86286 12.8864 6.72935 12.5567 6.65839C12.227 6.58742 11.8859 6.58042 11.5533 6.6378C11.6672 6.12742 11.661 5.59898 11.5353 5.09119C11.4096 4.58339 11.1676 4.10911 10.8269 3.70307C10.4863 3.29703 10.0556 2.96952 9.56655 2.74454C9.07745 2.51955 8.5423 2.40278 8.00027 2.40278C7.45825 2.40278 6.92309 2.51955 6.434 2.74454C5.9449 2.96952 5.51426 3.29703 5.1736 3.70307C4.83295 4.10911 4.59091 4.58339 4.46523 5.09119C4.33954 5.59898 4.33339 6.12742 4.44722 6.6378C3.7841 6.51787 3.09869 6.65655 2.54174 7.02333C1.9848 7.39012 1.60195 7.95496 1.47743 8.5936C1.3529 9.23224 1.4969 9.89237 1.87773 10.4288C2.25857 10.9652 2.84505 11.3339 3.50816 11.4538L3.63899 11.4748V12.8846C2.70535 12.8036 1.83096 12.4092 1.16863 11.7703C0.506297 11.1314 0.0981622 10.2887 0.015557 9.38938C-0.0670482 8.49007 0.18113 7.5914 0.716716 6.85044C1.2523 6.10949 2.04123 5.57337 2.94561 5.3358C3.0893 4.14186 3.68362 3.04044 4.61553 2.24101C5.54744 1.44157 6.75193 0.999904 7.99991 1Z"
                fill="currentColor"
              />
            </svg>
          </button>
        </div>

        <div class="">
          <form action="" method="POST" class="mb-10">
            <div class="flex justify-between gap-30 mb-[18px] items-center">
              <div class="w-1/2">
                <label for="fullname" class="font-md">Fullname</label>
                <input
                  id="fullname"
                  class="w-full p-3 pl-2 mt-[10px] border-solid border rounded-lg placeholder:text-sm focus:outline-none"
                  required
                  type="text"
                  placeholder="Your Name"
                />
              </div>
              <div class="w-1/2">
                <label for="fullname" class="font-md">Birthday</label>
                <VueDatePicker
                  class="mt-[10px] w-full"
                  v-model="date"
                  placeholder="Date of birth"
                  :enable-time-picker="false"
                />
              </div>
            </div>

            <div class="flex justify-between gap-30 mb-[18px] items-center">
              <div class="w-1/2">
                <label for="email" class="font-md">Email</label>
                <input
                  id="email"
                  class="w-full p-3 pl-2 mt-[10px] border-solid border rounded-lg placeholder:text-sm focus:outline-none"
                  required
                  type="email"
                  placeholder="connect@gmail.com"
                />
              </div>
              <div class="w-1/2">
                <label for="bio" class="font-md">Bio</label>
                <input
                  id="bio"
                  class="w-full p-3 pl-2 mt-[10px] border-solid border rounded-lg placeholder:text-sm focus:outline-none"
                  type="email"
                  placeholder="Bio"
                />
              </div>
            </div>

            <div class="flex justify-between gap-30 mb-[18px] items-center">
              <div class="w-1/2">
                <label for="phone" class="font-md">Phone Number</label>
                <input
                  id="phone"
                  class="w-full p-3 pl-2 mt-[10px] border-solid border rounded-lg placeholder:text-sm focus:outline-none"
                  required
                  type="text"
                  placeholder="Your Phone"
                />
              </div>
              <div class="w-1/2">
                <label for="website" class="font-md">Website</label>
                <input
                  id="website"
                  class="w-full p-3 pl-2 mt-[10px] border-solid border rounded-lg placeholder:text-sm focus:outline-none"
                  type="email"
                  placeholder="connectmax.com"
                />
              </div>
            </div>

            <div class="flex justify-between gap-30 mb-[18px] items-center">
              <div class="w-1/2">
                <label for="" class="font-md">Gender</label>
                <div class="radio-group mt-[10px] border-solid border rounded-lg w-full p-3 flex justify-center gap-4">
                  <div class="flex gap-3">
                    <input type="radio" class="w-4" name="gender" checked value="0" id="male" />
                    <label for="male">Male</label>
                  </div>
                  <div class="flex gap-3">
                    <input type="radio" class="w-4" name="gender" value="1" id="female" />
                    <label for="female">Female</label>
                  </div>
                </div>
              </div>
              <div class="w-1/2">
                <label for="location" class="font-md">Location</label>
                <input
                  id="location"
                  class="w-full p-3 pl-2 mt-[10px] border-solid border rounded-lg placeholder:text-sm focus:outline-none"
                  type="email"
                  placeholder="connectmax.com"
                />
              </div>
            </div>

            <!-- social link -->
            <h6 class="mt-30 mb-5 font-md text-lg">Social Link</h6>

            <div class="flex justify-between gap-30 mb-[18px] items-center">
              <div class="w-1/2">
                <label for="phone" class="font-md">Facebook</label>
                <input
                  id="phone"
                  class="w-full p-3 pl-2 mt-[10px] border-solid border rounded-lg placeholder:text-sm focus:outline-none"
                  required
                  type="text"
                  placeholder="Your Phone"
                />
              </div>
              <div class="w-1/2">
                <label for="website" class="font-md">Twitter</label>
                <input
                  id="website"
                  class="w-full p-3 pl-2 mt-[10px] border-solid border rounded-lg placeholder:text-sm focus:outline-none"
                  type="email"
                  placeholder="connectmax.com"
                />
              </div>
            </div>

            <div class="flex justify-between gap-30 mb-[18px] items-center">
              <div class="w-1/2">
                <label for="phone" class="font-md">Instagram</label>
                <input
                  id="phone"
                  class="w-full p-3 pl-2 mt-[10px] border-solid border rounded-lg placeholder:text-sm focus:outline-none"
                  required
                  type="text"
                  placeholder="Your Phone"
                />
              </div>
              <div class="w-1/2">
                <label for="website" class="font-md">Linkedln</label>
                <input
                  id="website"
                  class="w-full p-3 pl-2 mt-[10px] border-solid border rounded-lg placeholder:text-sm focus:outline-none"
                  type="email"
                  placeholder="connectmax.com"
                />
              </div>
            </div>
            
            <div class="btn flex gap-3 justify-end">
              <button class="bg-secondary1 rounded-md px-4 py-2">Cancel</button>
              <button class="bg-primary rounded-md text-white px-4 py-2">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts" setup>
import { ref } from 'vue'
import VueDatePicker from '@vuepic/vue-datepicker'
import '@vuepic/vue-datepicker/dist/main.css'

let date = ref(null)
</script>
