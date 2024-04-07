<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <link rel="stylesheet" href="{{ asset('css/adduser.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite('resources/css/app.css')
</head>
<body dir="rtl">

    <style>
        /* Additional styles for demonstration */
        /* Adjust according to your design */
        .dropdown-menu {
            display: none; /* Initially hidden */
            position: absolute;
            top: 100%;

            right: 0;
            z-index: 1000; /* Ensure it's above other content */
        }

        .dropdown-menu.show {
            display: block; /* Show the dropdown menu */
        }
    </style>
</head>

    <nav class="fixed top-0 z-50 w-full bg-custom-blue shadow-custom  dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
          <div class="flex items-center justify-between">

            <div class="flex items-center">
                <div class="flex items-center ms-3">
                  <div>
                    <button id="dropdown-toggle" type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                      <span class="sr-only">Open user menu</span>
                      <img class="w-8 h-8 rounded-full" src="{{ asset('img/user.png') }}" alt="user photo">
                    </button>
                  </div>


                  <div id="dropdown-user" class=" dropdown-menu z-50 hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                    <div class="px-4 py-3" role="none">
                      <p class="text-sm text-gray-900 dark:text-white" role="none">
                        {{ Auth::user()->name }}
                      </p>
                      <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                        {{ Auth::user()->email }}
                      </p>
                    </div>
                    <ul class="py-1" role="none">
                      <li>
                        <a href="#" class=" no-underline block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">تعديل كلمة السر</a>
                      </li>
                      <li class="hover:cursor-pointer">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                        <a type="submit" :href="route('logout')" class=" no-underline block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" onclick="event.preventDefault();
                        this.closest('form').submit();">تسجيل الخروج</a>
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="">
                       <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                 </button>
                <a href="#" class=" no-underline flex ms-2 md:me-2">
                    <span class="self-center text-l font-semibold sm:text-l whitespace-nowrap text-white">مديرية شؤون الاصحاح البيئي والحكم المحلي  </span>
                  <img src="{{ asset('img/b.png') }}" class="h-8 ms-3" alt="FlowBite Logo" />

                </a>
              </div>
          </div>
        </div>
      </nav>

      <aside id="logo-sidebar" class="fixed top-0 right-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700 shadow-custom" aria-label="Sidebar">


        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">


            <ul class="space-y-4 font-medium ">

               <li class="py-2 border-b">
                  <a href="/dashboard" class="  no-underline flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                     </svg>
                     <span class="flex-1 ms-3 whitespace-nowrap">الرئيسية</span>
                </a>
               </li>

               @role('admin')

               <li>
                  <a href="{{ route('user.index') }}" class=" no-underline flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                      </svg>
                     <span class="flex-1 ms-3 whitespace-nowrap">المستخدمين</span>
                  </a>
               </li>
               @endrole

               <li>
                  <a href="/lab" class="no-underline flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <?xml version="1.0" ?><svg viewBox="0 0 512 512" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M426.7187,109.4386h-140a13.125,13.125,0,1,0,0,26.25h8.7479V411.3114a61.25,61.25,0,0,0,122.5,0V135.6886h8.7521C443.9709,135.397,443.9667,109.728,426.7187,109.4386Zm-35,301.875c-1.4718,46.259-68.5388,46.2419-70-.0011V341.1373c32.099,2.8658,37.8989-20.0314,70-17.15Z"/><path d="M225.4687,39.4386h-140a13.125,13.125,0,0,0,0,26.25h8.7479V411.3114a61.25,61.25,0,0,0,122.5,0V65.6886h8.7521C242.7209,65.397,242.7167,39.728,225.4687,39.4386Zm-35,371.875c-1.4676,46.25-68.5367,46.2494-70-.0011V244.8873c32.099,2.8658,37.8989-20.0314,70-17.15Z"/></svg>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">العينات</span>
                   </a>
               </li>

               <li>
                <a href="analysis" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                   <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                    <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                    <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                 </svg>
                   <span class="flex-1 ms-3 whitespace-nowrap">التحاليل</span>

                </a>
             </li>

               <li>
                  <a href="#" class="no-underline flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  d="M8 3a2 2 0 0 0-2 2v3h12V5a2 2 0 0 0-2-2H8Zm-3 7a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h1v-4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v4h1a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2H5Zm4 11a1 1 0 0 1-1-1v-4h8v4a1 1 0 0 1-1 1H9Z" />
                     </svg>

                     <span class="flex-1 ms-3 whitespace-nowrap">طباعة </span>
                  </a>
               </li>

               <li class="hover:cursor-pointer">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                  <a   type="submit" :href="route('logout')" class="no-underline flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"  onclick="event.preventDefault();
                  this.closest('form').submit();">
                     <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                     </svg>

                     <span class="flex-1 ms-3 whitespace-nowrap">تسجيل الخروج</span>

                  </a>
                </form>
               </li>

            </ul>
         </div>
      </aside>

      <div class="p-4 sm:mr-64">
         <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700 mt-14">

@yield('content')

            {{-- <div class="grid grid-cols-3 gap-4 mb-4">
               <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
               <p class="text-2xl text-gray-400 dark:text-gray-500">
                  <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                  </svg>
               </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
               <p class="text-2xl text-gray-400 dark:text-gray-500">
                  <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                  </svg>
               </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
               <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                  <p class="text-2xl text-gray-400 dark:text-gray-500">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                     </svg>
                  </p>
               </div>
            </div> --}}
         </div>
      </div>


      <script>
        // Get references to the dropdown toggle button and the dropdown menu
        const dropdownToggle = document.getElementById('dropdown-toggle');
        const dropdownMenu = document.getElementById('dropdown-user');

        // Add click event listener to the dropdown toggle button
        dropdownToggle.addEventListener('click', function() {
            // Toggle the 'show' class on the dropdown menu to show/hide it
            dropdownMenu.classList.toggle('show');
        });

        // Close the dropdown menu when clicking outside of it
        window.addEventListener('click', function(event) {
            if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    </script>


       {{-- كود حقول الادخال --}}

       <script>
        function validateInput(input) {
            // Regular expression to match only letters
            var regex = /^[a-zA-Z]*$/;

            // Check if the input value matches the regex
            if (!regex.test(input.value)) {
                // If input is invalid, remove non-letter characters
                input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
            }
        }
        </script>


<script>
    function validateInput(input) {
        // Regular expression to match only Arabic and English letters
        var regex = /^[\u0600-\u06FF\u0750-\u077F\u08A0-\u08FFa-zA-Z\s]*$/;

        // Check if the input value matches the regex
        if (!regex.test(input.value)) {
            // If input is invalid, remove non-letter characters
            input.value = input.value.replace(/[^\u0600-\u06FF\u0750-\u077F\u08A0-\u08FFa-zA-Z]/g, '');
        }
    }
    </script>

    {{-- كود الارقام فقط --}}
    <script>
        function validateInputNumber(input) {
            // Regular expression to match only numbers
            var regex = /^\d*$/;

            // Check if the input value matches the regex
            if (!regex.test(input.value)) {
                // If input is invalid, remove non-numeric characters
                input.value = input.value.replace(/\D/g, '');
            }
        }
        </script>

        {{-- كود حالة الحساب --}}


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var checkbox = document.getElementById('status');
        var inputValue = document.getElementById('input-value'); // Get the input element

        if (checkbox.checked) {
            inputValue.value = '1';
        } else {
            inputValue.value = '2';
        }

        checkbox.addEventListener('change', function() {

            if (this.checked) {
                inputValue.value = '1';
            } else {
                inputValue.value = '2';
            }
        });

    });
</script>
</body>
</html>
