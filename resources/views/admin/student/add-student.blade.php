@extends('admin.master')

@section('title')
    Add Student
    @endsection
@section('body')

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header">
                                    <div id="alert">{{ Session::get('message') }}</div>

                                </div>
                                <div class="card-title">
                                    *<h3 class="d-inline-block text-info">Select Department and Semester</h3> <h3 class="ml-auto d-inline-block bg-primary text-light">⮯</h3>
                                    <hr>
                                </div>
                                <form action="{{ route('new-student') }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                    @csrf

                                        <div class="form-group">

                                            <select name="student_department" class="form-control ">
                                                <option selected class=""> Department</option>
                                                @foreach($departments as $department)
                                                <option value="computer">{{ $department->department }}</option>
                                                    @endforeach

                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <select name="student_semester" class="form-control  ">
                                                <option selected value="" class="pr-5">Semester</option>
                                                <option value="1">1st</option>
                                                <option value="2">2nd</option>
                                                <option value="3">3rd</option>
                                                <option value="4">4th</option>
                                                <option value="5">5th</option>
                                                <option value="6">6th</option>
                                                <option value="7">7th</option>
                                            </select>
                                        </div>

                                    <div class=" form-group ">
                                        <label for="studentName" class=" control-label mb-1">Student Name</label>
                                        <input id="studentName" name="student_name" type="text" class="form-control " aria-required="true" aria-invalid="false">
                                    </div>
                                    <div class="form-group">
                                        <label for="father_name" class="control-label mb-1">Father's Name</label>
                                        <input id="father_name" name="father_name" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                    </div>
                                    <div class="form-group">
                                        <label for="mother_name" class="control-label mb-1">Mother's Name</label>
                                        <input id="mother_name" name="mother_name" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                    </div>
                                    <div class="form-group">
                                        <label for="student_roll" class="control-label mb-1">Class Roll</label>
                                        <input id="student_roll"  onblur="rollCheck(this.value)" name="student_roll" type="number" class="form-control" aria-required="true" aria-invalid="false">

                                        <span id="aler"></span>

                                    </div>
                                    <div class="form-group">
                                        <label for="student_reg" class="control-label mb-1">Reg No</label>
                                        <input id="student_reg" name="student_reg" type="number" class="form-control" aria-required="true" aria-invalid="false">
                                    </div>
                                    <div class="form-group">
                                        <label for="student_address" class="control-label mb-1">Address</label>
                                        <textarea id="student_address" name="student_address"  class="form-control" aria-required="true" aria-invalid="false"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-label mb-1">Gender</label>
                                        <div class="form-check">
                                            <div class="radio">
                                                <label for="male" class="form-check-label ">
                                                    <input type="radio" id="male" name="gender" value="male" class="form-check-input">Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="female" class="form-check-label ">
                                                    <input type="radio" id="female" name="gender" value="female" class="form-check-input">Female
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="other" class="form-check-label ">
                                                    <input type="radio" id="other" name="gender" value="other" class="form-check-input">Other
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="studentName" class="control-label mb-1">Religion</label>
                                        <div class="form-check">
                                            <div class="radio">
                                                <label for="religion" class="form-check-label ">
                                                    <input type="radio" id="religion" name="religion" value="islam" class="form-check-input">Islam
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="religion" class="form-check-label ">
                                                    <input type="radio" id="religion" name="religion" value="hindu" class="form-check-input">Hindu
                                                </label>
                                            </div>
                                            <div class="religion">
                                                <label for="other" class="form-check-label ">
                                                    <input type="radio" id="religion" name="religion" value="other" class="form-check-input">Other
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="date" class="control-label mb-1">Admission Date</label>
                                        <input type="date" name="admission_date" id="date" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="studentImage" class="control-label mb-1">Student image</label>
                                        <input id="studentImage" name="student_image" type="file" class="form-control" aria-required="true" aria-invalid="false" accept="image/*">
                                    </div>




                                    <div>
                                        <button id="studentImage" type="submit" class="btn btn-lg btn-info btn-block">
                                            <span id="studentImage">Save</span>
                                            <span id="payment-button-sending" style="display:none;">Saving…</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>












                </div>

            </div>
        </div>
    </div>
<script>
    function rollCheck(roll) {

        var xmlHttp = new XMLHttpRequest();
        var serverPage = 'http://localhost/college_management_system/public/roll-check/'+roll;

        xmlHttp.onreadystatechange = function () {
            if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
                document.getElementById('aler').innerHTML =xmlHttp.responseText;

            }

        };
        xmlHttp.open('GET', serverPage);
        xmlHttp.send();
    }
</script>
    @endsection