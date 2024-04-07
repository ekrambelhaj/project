<!DOCTYPE html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/indexuser.css') }}">
    <link rel="stylesheet" href="{{asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{asset('css/Navbar.css') }}">
    <title>تجميد مستخدم</title>

</head>
<body dir="rtl">

@include('admin.navs.sideBar')
      <div class="containe">
        <div class="heading"> <img src="{{ asset('img/deleteuser.png')}}" width="30">تجميد مستخدم</div>

        <form action="#">

            <div class="search">
                <span> البحت</span>
                <input type="text" placeholder="إبحت هنا ">
                <input class="button1" type="submit" value="بحت">
            </div>

            <table  class="table table-striped dt-responsive  " >
                <thead class="thead_dark">
                    <tr>
                        <th>البريد الالكتروني </th>
                        <th> إسم الموظف</th>
                        <th> كلمة المرور</th>
                        <th> المؤهل العلمي</th>
                        <th>الوظيفة</th>
                        <th>نوع الصلاحيات</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td>{{$user->email}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->qualification}}</td>
                    <td>{{$user->function}}</td>

                    <td>@if($user->type=='مدير')
                        <p>مدير</p>
                        @else
                        <p>موظف</p>
                    @endif
                    </td>
                    <td>
                        <a href=""><img src="{{ asset('img/delete.png')}}" width="15"></a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
            </table>


            </form>
      </div>
    </body>
    </html>

