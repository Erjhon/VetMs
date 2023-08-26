<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin_Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;1,600&display=swap" rel="stylesheet" />
<style>
  :root {
    font-family: 'Source Sans Pro';
  }
  main#dashboard-main::-webkit-scrollbar {
    width: 8px;
    height: 8px;
  }
  main#dashboard-main::-webkit-scrollbar-thumb {
    border-radius: 9999px;
    background-color: rgb(156 163 175 / 0.75);
  }
  main#dashboard-main::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px rgb(156 163 175 / 0.75);
    border-radius: 10px;
  }
</style>



<div class="bg-slate-200 flex h-screen">
  <aside class="fixed z-50 md:relative">
    <!-- Sidebar -->
    <div class="bg-gray-100">
  <div class="h-screen w-64 pb-10">
  <div class="flex h-full flex-grow flex-col overflow-y-auto bg-white pt-5">
    <div class="flex mt-1 items-center px-2">
      <img class="h-12 w-auto max-w-full align-middle" src="/images/R-Wx_NHvZBci3KLrgXhp1.png" alt="" />
      <div class="flex ml-3 flex-col">
        <h3 class="font-medium">Sarah Carter</h3>
        <p class="text-xs text-gray-500">Sr. Engineer</p>
      </div>
    </div>

    <span class="ml-3 mt-10 mb-2 block text-xs font-semibold text-gray-500">Analytics</span>

    <div class="flex mt-3 flex-1 flex-col">
      <div class="">
        <nav class="flex-1">
          <a href="#" title="" class="flex cursor-pointer items-center border-l-4 border-l-teal-200 py-2 px-4 text-sm font-medium text-teal-500 outline-none transition-all duration-100 ease-in-out focus:border-l-4">
            <svg class="mr-4 h-5 w-5 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" class=""></path>
            </svg>
            Dashboard
          </a>



          <a href="#" class="flex cursor-pointer items-center border-l-teal-200 py-2 px-4 text-sm font-medium text-gray-600 outline-none transition-all duration-100 ease-in-out hover:border-l-4 hover:border-l-teal-200 hover:text-teal-500 focus:border-l-4">
            <svg class="mr-4 h-5 w-5 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
            </svg>

            Messages
            <span class="ml-auto rounded-full bg-teal-600 px-2 text-xs text-white">6</span>
          </a>

          <div class="relative transition">
            <input class="peer hidden" type="checkbox" id="menu-1" checked />
            <button class="flex peer relative w-full items-center border-l-teal-200 py-3 px-4 text-sm font-medium text-gray-600 outline-none transition-all duration-100 ease-in-out hover:border-l-4 hover:text-teal-500 focus:border-l-4">
              <span class="flex mr-5 w-5"
                ><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg
              ></span>
              Analytics
              <label for="menu-1" class="absolute inset-0 h-full w-full cursor-pointer"></label>
            </button>
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-0 top-4 ml-auto mr-5 h-4 text-gray-600 transition peer-checked:rotate-180 peer-hover:text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
            <ul class="duration-400 flex m-2 max-h-0 flex-col overflow-hidden rounded-xl bg-gray-100 font-medium transition-all duration-300 peer-checked:max-h-96">
              <li class="flex m-2 cursor-pointer border-l-teal-200 py-3 pl-5 text-sm text-gray-600 transition-all duration-100 ease-in-out hover:border-l-4 hover:text-teal-500">
                <span class="mr-5"
                  ><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg
                ></span>
                Revenue
              </li>
              <li class="flex m-2 cursor-pointer border-l-teal-200 py-3 pl-5 text-sm text-gray-600 transition-all duration-100 ease-in-out hover:border-l-4 hover:text-teal-500">
                <span class="mr-5"
                  ><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg
                ></span>
                Refunds
              </li>
            </ul>
          </div>
        </nav>

        <span class="ml-3 mt-10 mb-2 block text-xs font-semibold text-gray-500">Product Mangement</span>

        <nav class="flex-1">
          <a href="#" class="flex cursor-pointer items-center border-l-teal-200 py-2 px-4 text-sm font-medium text-gray-600 outline-none transition-all duration-100 ease-in-out hover:border-l-4 hover:border-l-teal-200 hover:text-teal-500 focus:border-l-4">
            <svg class="mr-4 h-5 w-5 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" class=""></path>
            </svg>
            Products
          </a>

          <a href="#" class="flex cursor-pointer items-center border-l-teal-200 py-2 px-4 text-sm font-medium text-gray-600 outline-none transition-all duration-100 ease-in-out hover:border-l-4 hover:border-l-teal-200 hover:text-teal-500 focus:border-l-4">
            <svg class="mr-4 h-5 w-5 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg>
            Orders
          </a>
          <a href="#" class="flex cursor-pointer items-center border-l-teal-200 py-2 px-4 text-sm font-medium text-gray-600 outline-none transition-all duration-100 ease-in-out hover:border-l-4 hover:border-l-teal-200 hover:text-teal-500 focus:border-l-4">
            <svg class="mr-4 h-5 w-5 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>

            Suppliers
          </a>
        </nav>

        <span class="ml-3 mt-10 mb-2 block text-xs font-semibold text-gray-500">Content Management</span>

        <nav class="flex-1">
          <a href="#" class="flex cursor-pointer items-center border-l-teal-200 py-2 px-4 text-sm font-medium text-gray-600 outline-none transition-all duration-100 ease-in-out hover:border-l-4 hover:border-l-teal-200 hover:text-teal-500 focus:border-l-4">
            <svg class="mr-4 h-5 w-5 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>
            Blogs
          </a>
        </nav>
      </div>
    </div>
  </div>
</div>

</div>
  </aside>
  <!-- /Sidebar -->

  <div class="flex h-full w-full flex-col">
    <!-- Navbar -->
    <header class="relative flex flex-col items-center bg-white px-4 py-4 shadow sm:flex-row md:h-20">
      <div class="flex w-full flex-col justify-between overflow-hidden transition-all sm:max-h-full sm:flex-row sm:items-center">
        <div class="relative ml-10 flex items-center justify-between rounded-md sm:ml-auto">
          <svg class="absolute left-2 block h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8" class=""></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65" class=""></line>
          </svg>
          <input type="name" name="search" class="h-12 w-full rounded-md border border-gray-100 bg-gray-100 py-4 pr-10 pl-12 shadow-sm outline-none focus:border-blue-500" placeholder="Search for anything" />
        </div>

        <ul class="mx-auto mt-4 flex space-x-6 sm:mx-5 sm:mt-0">
          <li class="">
            <button class="flex h-8 w-8 items-center justify-center rounded-xl border text-gray-600 hover:text-black hover:shadow">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </button>
          </li>
          <li class="">
            <button class="flex h-8 w-8 items-center justify-center rounded-xl border text-gray-600 hover:text-black hover:shadow">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </button>
          </li>
          <li class="">
            <button class="flex h-8 w-8 items-center justify-center rounded-xl border text-gray-600 hover:text-black hover:shadow">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </button>
          </li>
        </ul>
      </div>
    </header>
    <!-- /Navbar -->

    <!-- Main -->
    <div class="h-full overflow-hidden pl-10">
      <main id="dashboard-main" class="h-[calc(100vh-10rem)] overflow-auto px-4 py-10">
        <!-- Put your content inside of the <main/> tag -->
        <h1 class="text-2xl font-black text-gray-800">Good Morning!</h1>
        <p class="mb-6 text-gray-600">Here's an overview of your monthly transactions.</p>
        <div class="flex flex-wrap gap-x-4 gap-y-8">
          <div class="h-56 w-72 rounded-xl bg-white p-10 shadow-md"></div>
          <div class="h-56 w-72 rounded-xl bg-white p-10 shadow-md"></div>
          <div class="h-56 w-full rounded-xl bg-white p-10 shadow-md"></div>
          <div class="h-56 w-full rounded-xl bg-white p-10 shadow-md"></div>
          <div class="h-56 w-full rounded-xl bg-white p-10 shadow-md"></div>
        </div>
      </main>
    </div>
    <!-- /Main -->
  </div>
</div>

