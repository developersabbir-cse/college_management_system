@extends('admin.master')

@section('title')
    Student Info
@endsection

@section('body')

    {{---------------------------Card Started Here---------------------}}
    @foreach($students as $student)

    <div class="card-group clearfix" id="studentCard">
        <div class="card-header bg-info text-light clearfix">
            <h1 class="d-inline-block text-light">Student Info</h1>
            <img class="card-img-top w-25  m-auto float-sm-right "  src="{{ asset($student->student_image) }}">
        </div>

        <div class="card  float-left p-0">

            <div class="card-body">


                <div class="card-text">
                    <table class="table table-responsive-sm">
                        <th class="border-info ">Personal Info</th>
                            <tr>
                                <td>Name : <span class="text-success">{{ $student->student_name }}</span></td>
                            </tr>
                            <tr>
                                <td>Fathers Name: <span class="text-success">{{ $student->father_name }}</span></td>
                            </tr>
                            <tr>
                                <td>Mother's Name: <span class="text-success">{{ $student->mother_name }}</span></td>
                            </tr>
                            <tr>
                                <td>Gender: <span class="text-success">{{ $student->gender }}</span></td>
                            </tr>
                            <tr>
                                <td>Religion: <span class="text-success">{{ $student->religion }}</span></td>
                            </tr>
                    </table>
                </div>
            </div>


        </div>
        <div class="card float-left d-inline p-3">
            <div class="card-text">
                <table class="table table-responsive-sm ">
                    <th class="border-info">Educational Info</th>
                    <tr>
                        <td>Department : <span class="text-success">{{ $student->student_department }}</span></td>
                    </tr>
                    <tr>
                        <td>Semester : <span class="text-success">{{ $student->student_semester }}</span></td>
                    </tr>
                    <tr>
                        <td>Roll No : <span class="text-success">{{ $student->student_roll }}</span></td>
                    </tr>
                    <tr>
                        <td>Registration No : <span class="text-success">{{ $student->student_reg }}</span></td>
                    </tr>
                    <tr>
                        <td>Admission Date : <span class="text-success">{{ $student->admission_date }}</span></td>
                    </tr>
                </table>


                <div class="card-footer">
                    <button onclick="window.location.href='{{ route('manage-student') }}'" type="button"  class="btn btn-info float-sm-right">Exit </button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    {{---------------------------Card Ended Here---------------------}}
@endsection