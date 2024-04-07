@extends('admin.layout')

@section('content')

<div class="containe">
    @if ($errors->any())
        <div class="bg-red-50">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-red-600">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form method="POST" action="{{route('user.store')}}">
        @csrf
<div class="container mt-10 ">

    <p class=" text-m text-custom-blue font-bold font-sans mb-5"> اضافة مستخدم جديد</p>
<div class="grid grid-cols-2 gap-4">


<div>
<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">اسم المستخدم </label>
<div class="flex">
  <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
    </svg>
  </span>
  <input type="text" id="name"  name="name" oninput="validateInput(this)" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block  w-3/4 text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
</div>
</div>



    <div>
        <label for="job" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">الوظيفة  </label>
        <input type="text" id="job" name="job" oninput="validateInput(this)"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
    </div>

    <div>
        <label for="specialization" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> التخصص </label>
        <input type="text" id="specialization" oninput="validateInput(this)"  name="specialization" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
    </div>

    <div>
        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">رقم الهاتف  </label>
        <input type="text" id="phone" name="phone" oninput="validateInputNumber(this)" minlength="10" maxlength="10" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0910000000" required />
    </div>


    <div>
        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">حالة الحساب   </label>
        <label class="inline-flex items-center me-5 cursor-pointer">
            <span class="me-3 text-sm font-normal text-gray-900 dark:text-gray-300">غير نشط </span>
            <input id="status" name="status" type="checkbox"  value="" class="sr-only peer" checked>
            <div class="relative w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600"></div>
            <span class="ms-3 text-sm  font-normal text-gray-900 dark:text-gray-300">نشط</span>
        </label>
        <input id="input-value" type="text" name='status' class="hidden">
    </div>

    <div>
        <label for="state" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">نوع الصلاحية    </label>
        <div class="flex items-center me-4">
            <input id="-admin" type="radio" value="admin" name="type" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="green-radio" class="ms-1 text-sm font-normal text-gray-900 dark:text-gray-300">مدير</label>

            <input id="employee" type="radio" value="employee" name="type" class=" mr-4 w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="yellow-radio" class="ms-1 text-sm font-normal text-gray-900 dark:text-gray-300">موظف</label>
        </div>

    </div>






<div>
    <button type="submit" class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sة w-1/2 sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">حفظ</button>
</div>

</div>
</div>
</div>
</form>
@endsection
