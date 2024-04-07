@extends('admin.layout')

@section('content')


<form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('user.show')}}">
    @csrf

    <p class=" text-xl text-custom-blue  font-sans mb-5 text-center">بيانات المستخدم</p>
    <div class="text-black p-5 ">

    <p class="mt-5"> اسم الموظف : {{ $user->username }}</P>
    <p class="mt-5">الوظيفة  : {{ $user->function }}</P>
    <p class="mt-5">رقم الهاتف  : {{ $user->phone }}</P>
    <p class="mt-5"> التخصص : {{ $user->specialization }}</P>

    </div>
</form>
@endsection
