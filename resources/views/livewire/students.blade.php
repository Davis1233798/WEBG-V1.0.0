<div >
<section>
<div class="container">
<div class="row">
<div class="card">
<div class="card-header">
<h3>All Students</h3>
<div class="card-body">
<table class="table-striped">
<thead>
<tr>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
<th>phone</th>
</tr>
</thead>
<tbody>
@foreach($students as $student)
<tr>
<td>{{$student->firstname}}</td>
<td>{{$student->lastname}}</td>
<td>{{$student->email}}</td>
<td>{{$student->phone}}</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
