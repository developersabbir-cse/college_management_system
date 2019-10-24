@extends('admin.master')

@section('title')
    Manage Student
    @endsection

@section('body')
    <div class="main-content">
        <div class="section__content section__content--pl2">
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">Manage Student</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <div class="rs-select2--light rs-select2--md">
                        <select  onchange="tableM(this.value)" class="js-select2"  name="department">
                            <option selected="selected">Department</option>

                            @foreach($departments as $department)
                                <option   value="{{ $department->id }}">{{ $department->department }}</option>
                            @endforeach
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <div class="rs-select2--light rs-select2--sm">
                        <select class="js-select2" name="semester">
                            <option selected="selected">Semester</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>
                            <option value="5th">5th</option>
                            <option value="6th">6th</option>
                            <option value="7th">7th</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>

                </div>

            </div>
            <div class="table-responsive table-responsive-data2"  id="mainTable">
                <table  class="table table-data2 table-hover">
                    <thead>
                    <tr>
                        <th id="name">name</th>
                        <th>roll no</th>
                        <th>reg no</th>
                        <th>Department</th>
                        <th>Semester</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody >
                    @foreach($students as $student)
                    <tr class="tr-shadow">
                        <td id="names">{{ $student->student_name }}</td>
                        <td>{{ $student->student_roll }}</td>
                        <td >{{ $student->student_reg }}</td>
                        <td>{{ $student->student_department }}</td>
                        <td>
                            <span class="status--process">
                                @if ($student->student_semester=='1')
                                        1st
                                    @elseif($student->student_semester=='3')
                                        3rd
                                    @elseif($student->student_semester=='4')
                                        3rd
                                    @elseif($student->student_semester=='5')
                                        3rd
                                    @elseif($student->student_semester=='6')
                                        3rd
                                    @else
                                        7th
                                @endif
                            </span>
                        </td>
                        <td>
                            <img src="{{ asset($student->student_image) }}" height="100px" width="100px">
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="About Name">
                                    <i class="zmdi  zmdi-face"></i>
                                </a>
                                <a href="" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <a href="" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                        @endforeach


                    </tbody>













                </table>
            </div>
            <!-- END DATA TABLE -->
        </div>
    </div>
            </div>
            </div>

    <script>
        function tableM(val){
            if(val==2){
                document.getElementById('tab').style.display='block';



            }

        }
        tableM()



    </script>
{{--    <script>--}}
{{--        function departmentCheck(value){--}}
{{--                var xmlHttp = new XMLHttpRequest();--}}
{{--                var serverPage ='http://localhost/college_management_system/public/department-check';--}}

{{--                xmlHttp.onreadystatechange = function () {--}}
{{--                    if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {--}}
{{--                        document.getElementById('name').innerText= 'fxxxxxxxxxxxxxxxxxxxxx'--}}
{{--                    }--}}
{{--               };--}}
{{--                xmlHttp.open('GET',serverPage);--}}
{{--                xmlHttp.send();--}}
{{--        }--}}
{{--    </script>--}}
    @endsection