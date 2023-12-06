<template>
    <div class="relative hidden md:block w-full sm:w-2/3 mt-30 mr-30 rounded-2xl bg-white">
      <div
        class="message-header flex justify-between items-center p-[18px] border-b border-secondary-33"
      >
        <div class="flex items-center gap-2">
          <div class="rounded-full w-[50px] h-[50px] overflow-hidden">
            <img
              src="https://i.ebayimg.com/images/g/QvIAAOSwr-liEyi1/s-l1600.jpg"
              class="w-full object-cover"
              alt=""
            />
          </div>
          <div class="flex flex-col">
            <span class="font-medium text-base mb-[2px]">John Simon</span>
            <div class="flex gap-3 items-center">
              <div class="text-xs text-secondary2">Active now</div>
              <div class="h-[10px] w-[10px] rounded-full bg-green-500"></div>
            </div>
          </div>
        </div>

        <div class="flex gap-3">
          <button class="">
            <svg
              width="16"
              height="16"
              viewBox="0 0 16 16"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M3.61387 8.66513C3.69199 8.58689 3.78476 8.52481 3.88689 8.48246C3.98901 8.44011 4.09849 8.41831 4.20905 8.41831C4.31961 8.41831 4.42908 8.44011 4.53121 8.48246C4.63334 8.52481 4.72611 8.58689 4.80422 8.66513L6.1461 10.007C6.76821 9.82181 7.9291 9.40089 8.66486 8.66513C9.40062 7.92937 9.82153 6.76849 10.0067 6.14637L8.66486 4.8045C8.58661 4.72638 8.52454 4.63361 8.48218 4.53148C8.43983 4.42936 8.41803 4.31988 8.41803 4.20932C8.41803 4.09876 8.43983 3.98929 8.48218 3.88716C8.52454 3.78503 8.58661 3.69226 8.66486 3.61415L12.0322 0.246826C12.1103 0.168581 12.2031 0.106507 12.3052 0.0641535C12.4073 0.0218004 12.5168 0 12.6274 0C12.7379 0 12.8474 0.0218004 12.9495 0.0641535C13.0516 0.106507 13.1444 0.168581 13.2225 0.246826L15.748 2.77232C15.8946 2.91811 15.9819 3.11308 15.993 3.31951C16.0056 3.52996 16.2472 8.51528 12.3807 12.3818C9.02348 15.7382 4.81264 16 3.60209 16C3.41773 16 3.31839 15.9933 3.31839 15.9933C3.11383 15.9806 2.916 15.8939 2.77204 15.7483L0.246552 13.2228C0.168307 13.1447 0.106232 13.0519 0.063879 12.9498C0.0215254 12.8477 -0.000272751 12.7382 -0.000272751 12.6276C-0.000272751 12.5171 0.0215254 12.4076 0.063879 12.3055C0.106232 12.2033 0.168307 12.1106 0.246552 12.0325L3.61387 8.66513ZM3.71994 14.3155C4.89935 14.2978 8.39042 13.9897 11.1903 11.1906C14.0037 8.37638 14.2925 4.77419 14.3135 3.71853L12.6274 2.03235L10.4504 4.20932L11.5389 5.29781C11.6378 5.39668 11.7106 5.51865 11.7505 5.6527C11.7905 5.78674 11.7965 5.92864 11.7678 6.06556C11.7476 6.16237 11.2535 8.45804 9.85605 9.85548C8.45861 11.2529 6.16294 11.7471 6.06612 11.7673C5.92928 11.7964 5.78733 11.7908 5.65322 11.7509C5.51911 11.7111 5.39711 11.6383 5.29838 11.5391L4.20989 10.4507L2.03292 12.6276L3.71994 14.3155Z"
                fill="currentColor"
              />
              <path
                d="M3.61387 8.66513C3.69199 8.58689 3.78476 8.52481 3.88689 8.48246C3.98901 8.44011 4.09849 8.41831 4.20905 8.41831C4.31961 8.41831 4.42908 8.44011 4.53121 8.48246C4.63334 8.52481 4.72611 8.58689 4.80422 8.66513L6.1461 10.007C6.76821 9.82181 7.9291 9.40089 8.66486 8.66513C9.40062 7.92937 9.82153 6.76849 10.0067 6.14637L8.66486 4.8045C8.58661 4.72638 8.52454 4.63361 8.48218 4.53148C8.43983 4.42936 8.41803 4.31988 8.41803 4.20932C8.41803 4.09876 8.43983 3.98929 8.48218 3.88716C8.52454 3.78503 8.58661 3.69226 8.66486 3.61415L12.0322 0.246826C12.1103 0.168581 12.2031 0.106507 12.3052 0.0641535C12.4073 0.0218004 12.5168 0 12.6274 0C12.7379 0 12.8474 0.0218004 12.9495 0.0641535C13.0516 0.106507 13.1444 0.168581 13.2225 0.246826L15.748 2.77232C15.8946 2.91811 15.9819 3.11308 15.993 3.31951C16.0056 3.52996 16.2472 8.51528 12.3807 12.3818C9.02348 15.7382 4.81264 16 3.60209 16C3.41773 16 3.31839 15.9933 3.31839 15.9933C3.11383 15.9806 2.916 15.8939 2.77204 15.7483L0.246552 13.2228C0.168307 13.1447 0.106232 13.0519 0.063879 12.9498C0.0215254 12.8477 -0.000272751 12.7382 -0.000272751 12.6276C-0.000272751 12.5171 0.0215254 12.4076 0.063879 12.3055C0.106232 12.2033 0.168307 12.1106 0.246552 12.0325L3.61387 8.66513ZM3.71994 14.3155C4.89935 14.2978 8.39042 13.9897 11.1903 11.1906C14.0037 8.37638 14.2925 4.77419 14.3135 3.71853L12.6274 2.03235L10.4504 4.20932L11.5389 5.29781C11.6378 5.39668 11.7106 5.51865 11.7505 5.6527C11.7905 5.78674 11.7965 5.92864 11.7678 6.06556C11.7476 6.16237 11.2535 8.45804 9.85605 9.85548C8.45861 11.2529 6.16294 11.7471 6.06612 11.7673C5.92928 11.7964 5.78733 11.7908 5.65322 11.7509C5.51911 11.7111 5.39711 11.6383 5.29838 11.5391L4.20989 10.4507L2.03292 12.6276L3.71994 14.3155Z"
                fill="currentColor"
              />
            </svg>
          </button>
          <button class="">
            <svg
              width="16"
              height="16"
              viewBox="0 0 16 16"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M8 16C3.5816 16 0 12.4184 0 8C0 3.5816 3.5816 0 8 0C12.4184 0 16 3.5816 16 8C16 12.4184 12.4184 16 8 16ZM8 14.4C9.69739 14.4 11.3253 13.7257 12.5255 12.5255C13.7257 11.3253 14.4 9.69739 14.4 8C14.4 6.30261 13.7257 4.67475 12.5255 3.47452C11.3253 2.27428 9.69739 1.6 8 1.6C6.30261 1.6 4.67475 2.27428 3.47452 3.47452C2.27428 4.67475 1.6 6.30261 1.6 8C1.6 9.69739 2.27428 11.3253 3.47452 12.5255C4.67475 13.7257 6.30261 14.4 8 14.4ZM7.2 4H8.8V5.6H7.2V4ZM7.2 7.2H8.8V12H7.2V7.2Z"
                fill="currentColor"
              />
              <path
                d="M8 16C3.5816 16 0 12.4184 0 8C0 3.5816 3.5816 0 8 0C12.4184 0 16 3.5816 16 8C16 12.4184 12.4184 16 8 16ZM8 14.4C9.69739 14.4 11.3253 13.7257 12.5255 12.5255C13.7257 11.3253 14.4 9.69739 14.4 8C14.4 6.30261 13.7257 4.67475 12.5255 3.47452C11.3253 2.27428 9.69739 1.6 8 1.6C6.30261 1.6 4.67475 2.27428 3.47452 3.47452C2.27428 4.67475 1.6 6.30261 1.6 8C1.6 9.69739 2.27428 11.3253 3.47452 12.5255C4.67475 13.7257 6.30261 14.4 8 14.4ZM7.2 4H8.8V5.6H7.2V4ZM7.2 7.2H8.8V12H7.2V7.2Z"
                fill="currentColor"
              />
            </svg>
          </button>
        </div>
      </div>
      <!-- list message -->
      <div class="message-content p-[18px] max-h-[80vh] min-h-[80vh] overflow-y-scroll">
        <!-- left -->
        <div class="mb-9">
          <div class="left w-full flex items-end gap-3">
            <button class="rounded-full w-10 h-10 min-w-[40px] min-h-[40px] overflow-hidden">
              <img
                src="https://i.ebayimg.com/images/g/QvIAAOSwr-liEyi1/s-l1600.jpg"
                class="w-full object-cover"
                alt=""
              />
            </button>
            <div
              class="rounded-br-xl rounded-tl-xl rounded-tr-xl bg-primary p-3 text-white text-sm w-4/5"
            >
              Welcome to UI HUT! Whether you're opening a new online store or are interested in
              using UI HUT as your platform, you can find out more information about your options
              here.
            </div>
          </div>
          <!-- time ago -->
          <div class="flex gap-3 mt-3">
            <div class="w-10 min-w-[40px]"></div>
            <div class="text-sm">9h ago</div>
          </div>
        </div>

        <div class="mb-9">
          <div class="right w-full flex flex-row-reverse items-end gap-3">
            <button class="rounded-full w-10 h-10 min-w-[40px] min-h-[40px] overflow-hidden">
              <img
                src="https://i.ebayimg.com/images/g/QvIAAOSwr-liEyi1/s-l1600.jpg"
                class="w-full object-cover"
                alt=""
              />
            </button>
            <div
              class="rounded-bl-xl rounded-tl-xl rounded-tr-xl bg-secondary-33 p-3 text-secondary text-sm w-4/5"
            >
              Welcome to UI HUT! Whether you're opening a new online store or are interested in
              using UI HUT as your platform, you can find out more information about your options
              here.
            </div>
          </div>
          <!-- time ago -->
          <div class="flex flex-row-reverse gap-3 mt-3">
            <div class="w-10 min-w-[40px] min-h-[40px]"></div>
            <div class="text-sm">9h ago</div>
          </div>
        </div>

        <!-- left -->
        <div class="mb-9">
          <div class="left w-full flex items-end gap-3">
            <button class="rounded-full w-10 h-10 min-w-[40px] min-h-[40px] overflow-hidden">
              <img
                src="https://i.ebayimg.com/images/g/QvIAAOSwr-liEyi1/s-l1600.jpg"
                class="w-full object-cover"
                alt=""
              />
            </button>
            <div
              class="rounded-br-xl rounded-tl-xl rounded-tr-xl bg-primary p-3 text-white text-sm w-4/5"
            >
              Welcome to UI HUT! Whether you're opening a new online store or are interested in
              using UI HUT as your platform, you can find out more information about your options
              here.
            </div>
          </div>
          <!-- time ago -->
          <div class="flex gap-3 mt-3">
            <div class="w-10 min-w-[40px]"></div>
            <div class="text-sm">9h ago</div>
          </div>
        </div>

        <div class="mb-9">
          <div class="right w-full flex flex-row-reverse items-end gap-3">
            <button class="rounded-full w-10 h-10 min-w-[40px] min-h-[40px] overflow-hidden">
              <img
                src="https://i.ebayimg.com/images/g/QvIAAOSwr-liEyi1/s-l1600.jpg"
                class="w-full object-cover"
                alt=""
              />
            </button>
            <div
              class="rounded-bl-xl rounded-tl-xl rounded-tr-xl bg-secondary-33 p-3 text-secondary text-sm w-4/5"
            >
              Welcome to UI HUT! Whether you're opening a new online store or are interested in
              using UI HUT as your platform, you can find out more information about your options
              here.
            </div>
          </div>
          <!-- time ago -->
          <div class="flex flex-row-reverse gap-3 mt-3">
            <div class="w-10 min-w-[40px] min-h-[40px]"></div>
            <div class="text-sm">9h ago</div>
          </div>
        </div>

        <!-- left -->
        <div class="mb-9">
          <div class="left w-full flex items-end gap-3">
            <button class="rounded-full w-10 h-10 min-w-[40px] min-h-[40px] overflow-hidden">
              <img
                src="https://i.ebayimg.com/images/g/QvIAAOSwr-liEyi1/s-l1600.jpg"
                class="w-full object-cover"
                alt=""
              />
            </button>
            <div
              class="rounded-br-xl rounded-tl-xl rounded-tr-xl bg-primary p-3 text-white text-sm w-4/5"
            >
              Welcome to UI HUT! Whether you're opening a new online store or are interested in
              using UI HUT as your platform, you can find out more information about your options
              here.
            </div>
          </div>
          <!-- time ago -->
          <div class="flex gap-3 mt-3">
            <div class="w-10 min-w-[40px]"></div>
            <div class="text-sm">9h ago</div>
          </div>
        </div>

        <div class="mb-9">
          <div class="right w-full flex flex-row-reverse items-end gap-3">
            <button class="rounded-full w-10 h-10 min-w-[40px] min-h-[40px] overflow-hidden">
              <img
                src="https://i.ebayimg.com/images/g/QvIAAOSwr-liEyi1/s-l1600.jpg"
                class="w-full object-cover"
                alt=""
              />
            </button>
            <div
              class="rounded-bl-xl rounded-tl-xl rounded-tr-xl bg-secondary-33 p-3 text-secondary text-sm w-4/5"
            >
              Welcome to UI HUT! Whether you're opening a new online store or are interested in
              using UI HUT as your platform, you can find out more information about your options
              here.
            </div>
          </div>
          <!-- time ago -->
          <div class="flex flex-row-reverse gap-3 mt-3">
            <div class="w-10 min-w-[40px] min-h-[40px]"></div>
            <div class="text-sm">9h ago</div>
          </div>
        </div>

        <!-- left -->
        <div class="mb-9">
          <div class="left w-full flex items-end gap-3">
            <button class="rounded-full w-10 h-10 min-w-[40px] min-h-[40px] overflow-hidden">
              <img
                src="https://i.ebayimg.com/images/g/QvIAAOSwr-liEyi1/s-l1600.jpg"
                class="w-full object-cover"
                alt=""
              />
            </button>
            <div
              class="rounded-br-xl rounded-tl-xl rounded-tr-xl bg-primary p-3 text-white text-sm w-4/5"
            >
              Welcome to UI HUT! Whether you're opening a new online store or are interested in
              using UI HUT as your platform, you can find out more information about your options
              here.
            </div>
          </div>
          <!-- time ago -->
          <div class="flex gap-3 mt-3">
            <div class="w-10 min-w-[40px]"></div>
            <div class="text-sm">9h ago</div>
          </div>
        </div>

        <div class="mb-9">
          <div class="right w-full flex flex-row-reverse items-end gap-3">
            <button class="rounded-full w-10 h-10 min-w-[40px] min-h-[40px] overflow-hidden">
              <img
                src="https://i.ebayimg.com/images/g/QvIAAOSwr-liEyi1/s-l1600.jpg"
                class="w-full object-cover"
                alt=""
              />
            </button>
            <div
              class="rounded-bl-xl rounded-tl-xl rounded-tr-xl bg-secondary-33 p-3 text-secondary text-sm w-4/5"
            >
              Welcome to UI HUT! Whether you're opening a new online store or are interested in
              using UI HUT as your platform, you can find out more information about your options
              here.
            </div>
          </div>
          <!-- time ago -->
          <div class="flex flex-row-reverse gap-3 mt-3">
            <div class="w-10 min-w-[40px] min-h-[40px]"></div>
            <div class="text-sm">9h ago</div>
          </div>
        </div>

        <!-- form send message -->
        <div class="p-5 border-t bg-white w-full absolute bottom-0 left-0">
          <form class="flex justify-between gap-2 items-center">
            <div class="rounded-xl h-[56px] flex justify-between items-center border-2 bg-secondary-33 text-black w-11/12">
              <input
                v-model="message"
                type="text"
                placeholder="Type something here..."
                required
                class="w-full h-full rounded-xl focus:outline-none p-2"
              />
              <div class="flex gap-2 pr-2">
                <!-- icon fileupload -->
                <button type="button" @click="triggerInputFile($event)">
                  <input
                    type="file"
                    @change="changeInptFile"
                    ref="file_comment"
                    class="hidden"
                  />
                  <svg
                    class="pointer-events-none"
                    width="16"
                    height="16"
                    viewBox="0 0 16 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M2.2624 14.9845L2.2464 15L2.2296 14.9845H0.7936C0.583051 14.9843 0.381197 14.9029 0.232392 14.7582C0.0835856 14.6136 -1.06764e-07 14.4175 0 14.213V1.77148C0.00146404 1.56744 0.0855202 1.37216 0.23401 1.22781C0.3825 1.08345 0.583504 1.00163 0.7936 1H15.2064C15.6448 1 16 1.34573 16 1.77148V14.213C15.9985 14.417 15.9145 14.6123 15.766 14.7567C15.6175 14.901 15.4165 14.9828 15.2064 14.9845H2.2624ZM14.4 10.323V2.55383H1.6V13.4306L9.6 5.66149L14.4 10.323ZM14.4 12.5201L9.6 7.8586L3.8624 13.4306H14.4V12.5201ZM4.8 7.21532C4.37565 7.21532 3.96869 7.05161 3.66863 6.76021C3.36857 6.46881 3.2 6.07359 3.2 5.66149C3.2 5.24939 3.36857 4.85416 3.66863 4.56276C3.96869 4.27136 4.37565 4.10766 4.8 4.10766C5.22435 4.10766 5.63131 4.27136 5.93137 4.56276C6.23143 4.85416 6.4 5.24939 6.4 5.66149C6.4 6.07359 6.23143 6.46881 5.93137 6.76021C5.63131 7.05161 5.22435 7.21532 4.8 7.21532Z"
                      fill="white"
                    />
                    <path
                      d="M2.2624 14.9845L2.2464 15L2.2296 14.9845H0.7936C0.583051 14.9843 0.381197 14.9029 0.232392 14.7582C0.0835856 14.6136 -1.06764e-07 14.4175 0 14.213V1.77148C0.00146404 1.56744 0.0855202 1.37216 0.23401 1.22781C0.3825 1.08345 0.583504 1.00163 0.7936 1H15.2064C15.6448 1 16 1.34573 16 1.77148V14.213C15.9985 14.417 15.9145 14.6123 15.766 14.7567C15.6175 14.901 15.4165 14.9828 15.2064 14.9845H2.2624ZM14.4 10.323V2.55383H1.6V13.4306L9.6 5.66149L14.4 10.323ZM14.4 12.5201L9.6 7.8586L3.8624 13.4306H14.4V12.5201ZM4.8 7.21532C4.37565 7.21532 3.96869 7.05161 3.66863 6.76021C3.36857 6.46881 3.2 6.07359 3.2 5.66149C3.2 5.24939 3.36857 4.85416 3.66863 4.56276C3.96869 4.27136 4.37565 4.10766 4.8 4.10766C5.22435 4.10766 5.63131 4.27136 5.93137 4.56276C6.23143 4.85416 6.4 5.24939 6.4 5.66149C6.4 6.07359 6.23143 6.46881 5.93137 6.76021C5.63131 7.05161 5.22435 7.21532 4.8 7.21532Z"
                      fill="#4E5D78"
                    />
                  </svg>
                </button>
                <!-- icon emoij -->
                <div class="flex items-center">
                  <button @click="isShowEmoij = !isShowEmoij" type="button">
                    <svg
                      class="pointer-events-none"
                      width="16"
                      height="16"
                      viewBox="0 0 16 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M8 16C3.5816 16 0 12.4184 0 8C0 3.5816 3.5816 0 8 0C12.4184 0 16 3.5816 16 8C16 12.4184 12.4184 16 8 16ZM8 14.4C9.69739 14.4 11.3253 13.7257 12.5255 12.5255C13.7257 11.3253 14.4 9.69739 14.4 8C14.4 6.30261 13.7257 4.67475 12.5255 3.47452C11.3253 2.27428 9.69739 1.6 8 1.6C6.30261 1.6 4.67475 2.27428 3.47452 3.47452C2.27428 4.67475 1.6 6.30261 1.6 8C1.6 9.69739 2.27428 11.3253 3.47452 12.5255C4.67475 13.7257 6.30261 14.4 8 14.4ZM4 8H5.6C5.6 8.63652 5.85286 9.24697 6.30294 9.69706C6.75303 10.1471 7.36348 10.4 8 10.4C8.63652 10.4 9.24697 10.1471 9.69706 9.69706C10.1471 9.24697 10.4 8.63652 10.4 8H12C12 9.06087 11.5786 10.0783 10.8284 10.8284C10.0783 11.5786 9.06087 12 8 12C6.93913 12 5.92172 11.5786 5.17157 10.8284C4.42143 10.0783 4 9.06087 4 8Z"
                        fill="white"
                      />
                      <path
                        d="M8 16C3.5816 16 0 12.4184 0 8C0 3.5816 3.5816 0 8 0C12.4184 0 16 3.5816 16 8C16 12.4184 12.4184 16 8 16ZM8 14.4C9.69739 14.4 11.3253 13.7257 12.5255 12.5255C13.7257 11.3253 14.4 9.69739 14.4 8C14.4 6.30261 13.7257 4.67475 12.5255 3.47452C11.3253 2.27428 9.69739 1.6 8 1.6C6.30261 1.6 4.67475 2.27428 3.47452 3.47452C2.27428 4.67475 1.6 6.30261 1.6 8C1.6 9.69739 2.27428 11.3253 3.47452 12.5255C4.67475 13.7257 6.30261 14.4 8 14.4ZM4 8H5.6C5.6 8.63652 5.85286 9.24697 6.30294 9.69706C6.75303 10.1471 7.36348 10.4 8 10.4C8.63652 10.4 9.24697 10.1471 9.69706 9.69706C10.1471 9.24697 10.4 8.63652 10.4 8H12C12 9.06087 11.5786 10.0783 10.8284 10.8284C10.0783 11.5786 9.06087 12 8 12C6.93913 12 5.92172 11.5786 5.17157 10.8284C4.42143 10.0783 4 9.06087 4 8Z"
                        fill="#4E5D78"
                      />
                    </svg>
                  </button>
                  <div
                    class="absolute right-[13%] bottom-[12%] md:bottom-[10%] md:left-[20%] lg:left-[33%] z-50"
                  >
                    <VuemojiPicker v-if="isShowEmoij" @emojiClick="onSelectEmoji" />
                  </div>
                </div>
              </div>
            </div>
            <div class="btn h-[56px] w-1/12">
              <button
                class="flex justify-center items-center w-full h-full rounded-md active:bg-secondary-4e bg-secondary-33"
              >
                <svg
                  width="26"
                  height="26"
                  viewBox="0 0 26 26"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M0.989937 0.0755485L25.6542 12.4655C25.7589 12.5182 25.8463 12.5956 25.9071 12.6896C25.9679 12.7836 26 12.8908 26 13C26 13.1092 25.9679 13.2164 25.9071 13.3104C25.8463 13.4044 25.7589 13.4818 25.6542 13.5345L0.989937 25.9244C0.888236 25.9755 0.773711 26.0016 0.657651 25.9999C0.541591 25.9983 0.428001 25.9691 0.328077 25.9151C0.228154 25.8612 0.145346 25.7844 0.0878164 25.6923C0.0302864 25.6002 1.98729e-05 25.496 0 25.39V0.61C1.98729e-05 0.503982 0.0302864 0.399798 0.0878164 0.307718C0.145346 0.215637 0.228154 0.138839 0.328077 0.0848918C0.428001 0.0309447 0.541591 0.00171125 0.657651 7.28728e-05C0.773711 -0.0015655 0.888236 0.0244477 0.989937 0.0755485ZM2.67189 14.2202V22.2943L21.1748 13L2.67189 3.70567V11.7798H9.35163V14.2202H2.67189Z"
                    fill="#377DFF"
                  />
                </svg>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
</template>

<script lang="ts" setup>
import FormSearchFriend from '@/components/common/FormSearchFriend.vue'
import ListFriendOnline from '@/components/message/ListFriendOnline.vue'
import { ref } from 'vue'
import { VuemojiPicker } from 'vuemoji-picker'

const message = ref('')
const isShowEmoij = ref(false)

const onSelectEmoji = (emoji: any) => {
  console.log(emoji.unicode)
  message.value += emoji.unicode
}

const triggerInputFile = (e: {}) => {
  try {
    let inptFile = e.target.querySelector('input[type=file]')
    inptFile.click()
  } catch (e) {
    console.log(e)
  }
}
</script>