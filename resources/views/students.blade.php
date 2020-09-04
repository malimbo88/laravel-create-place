{{-- Views students.blade.php --}}

<h1>Students List</h1>

{{-- For each $student inside $students --}}
@foreach ($students as $student)

{{-- Students list --}}
<ul>
  <li>Name: {{ $student->name }}</li>
  <li>Surname: {{ $student->surname }}</li>
  <li>School class: {{ $student->school_class }}</li>
  <li>Final grade: {{ $student->grade }}</li>
  <li>Desription: {{ $student->description }}</li>
  <li>Created at: {{ $student->created_at }}</li>
  <li>Updated at: {{ $student->updated_at }}</li>
</ul>
{{-- end Student list --}}

@endforeach
