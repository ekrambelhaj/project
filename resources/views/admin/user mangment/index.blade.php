@extends('admin.layout')

@section('content')


<p class=" text-xl text-custom-blue  font-sans mb-5 text-center">المستخدمين </p>
<div class="mt-3">
    <form action="#" >
    <a href="{{route('user.create')}}">
    <button  type="button" class="mr-5 text-blue-700 border border-blue-700  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">اضافة مستخدم</button>
    </a>
    </form>
<div>


<p class="bg-gray-50 w-full h-0.5 mb-3 mt-3 ">
    <form class="max-w-md mx-auto mt-50" method="GET" action="#">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">بحث</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400  ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" name="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mr-2" placeholder="مثال : WA1" required />
            <button type="submit" class=" absolute end-2.5 bottom-2.5 text-sm px-4 py-2 text-gray-500  border border-gray-400  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg  text-center  dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">بحث</button>
        </div>
    </form>

</div>
</div>

<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="text-right px-6 py-4 font-medium text-gray-900">الاسم</th>
          <th scope="col" class="text-right px-6 py-4 font-medium text-gray-900">الوظيفة</th>
          <th scope="col" class="text-right px-6 py-4 font-medium text-gray-900">التخصص</th>
          <th scope="col" class="text-right px-6 py-4 font-medium text-gray-900">حالة الحساب</th>
          <th scope="col" class="text-right px-6 py-4 font-medium text-gray-900">الصلاحية</th>
          <th scope="col" class="text-left px-6 py-4 font-medium text-blue-900"><a href="{{route('user.index')}}">الكل</a></th>
        </tr>
      </thead>

      <tbody class="text-right divide-y divide-gray-100 border-t border-gray-100">
        @foreach ($users as $user)
        <tr class="hover:bg-gray-50">

            <td class="px-6 py-4">
                <p>
                    {{$user->username}}
                </p>
            </td>

            <td class="px-6 py-4">
                <p>
                    {{$user->function}}
                </p>
            </td>

            <td class="px-6 py-4">
                <p>
                    {{$user->specialization}}
                </p>
            </td>


            <td class="text-cent px-6 py-4">
                @if($user->status==1)
                <span
                class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600"
              >
                <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                <p class="">نشط</p>
                @else
                <span
                class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600"
              >
                <span class="h-1.5 w-1.5 rounded-full bg-red-600"></span>
                <p style="color:red">غير نشط</p>
                @endif
              </span>
            </td>

            <td class="px-6 py-4">
                @if($user->type=='admin')
                    <p>مدير</p>
                    @else
                    <p>موظف</p>
                @endif

</td>

            {{-- <td class="px-6 py-4">
              <div class="flex gap-2">
                <span
                  class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600"
                >
                  Design
                </span>
                <span
                  class="inline-flex items-center gap-1 rounded-full bg-indigo-50 px-2 py-1 text-xs font-semibold text-indigo-600"
                >
                  Product
                </span>
                <span
                  class="inline-flex items-center gap-1 rounded-full bg-violet-50 px-2 py-1 text-xs font-semibold text-violet-600"
                >
                  Develop
                </span>
              </div>
            </td> --}}
            <td class="px-6 py-4">
                <div class="flex justify-end gap-4">
                  <a x-data="{ tooltip: 'Delete' }" href="{{ route('user.view',['id'=>$user->id]) }}">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-6 w-6"
                      x-tooltip="tooltip"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>


                    </svg>
                  </a>
                  <a x-data="{ tooltip: 'Edite' }" href="{{ route('user.edit',['id'=>$user->id]) }}">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-6 w-6"
                      x-tooltip="tooltip"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                      />
                    </svg>
                  </a>

                  <a x-data="{ tooltip: 'Delete' }" href="{{ route('user.delete',['id'=>$user->id]) }}">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-6 w-6"
                        x-tooltip="tooltip"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </a>
                </div>
              </td>
                  @endforeach

                </tbody>




            </table>

    </div>
    </body>
    </html>
@endsection
