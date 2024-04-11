@php
    $disabledString=$readonlyData ? 'disabled' : '';
    $courses = \App\Models\Course::all();
@endphp
<div>
    <label for="inputCourse">Course</label>
    <select name="course" id="inputCourse" {{$disabledString}}>
        @foreach ($courses as $course)
            <option {{$course->abbreviation == $discipline->course ? 'selected' : ''}}>{{$course->abbreviation}}</option>
        @endforeach
    </select>
</div>
<div>
    <label for="inputYear">Year</label>
    <input type="text" name="year" id="inputYear" {{$disabledString}} value="{{$discipline->year}}">
</div>
<div>
    <label for="inputSemester">Semester</label>
    <input type="text" name="semester" id="inputSemester" {{$disabledString}} value="{{$discipline->semester}}">
</div>
<div>
    <label for="inputAbbreviation">Abbreviation</label>
    <input type="text" name="abbreviation" id="inputAbbreviation" {{$disabledString}}
           value="{{$discipline->abbreviation}}">
</div>
<div>
    <label for="inputName">Name</label>
    <input type="text" name="name" id="inputName" {{$disabledString}} value="{{$discipline->name}}">
</div>
<div>
    <label for="inputECTS">ECTS</label>
    <input type="text" name="ECTS" id="inputECTS" {{$disabledString}} value="{{$discipline->ECTS}}">
</div>
<div>
    <label for="inputHours">Hours</label>
    <input type="text" name="hours" id="inputHours" {{$disabledString}} value="{{$discipline->hours}}">
</div>
<div>
    <label for="inputOptional">Optional</label>
    <input type="checkbox" name="optional" id="inputOptional" {{$disabledString}}
           {{$discipline->optional ? 'checked' : ''}}>
</div>
