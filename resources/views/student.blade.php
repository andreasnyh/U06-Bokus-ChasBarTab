@extends('layout')
@section('content')
        <div class="content">
            <div class="title m-b-md">
                <h1 class="mt-5">Hittar du inte dig själv? Sök här</h1>
            </div>
            <label>Filtrera</label>

            {{-- //search for students with class filter --}}
            <select class="custom-select custom-select-md mt-4 mr-2" name="studentClass" id="studentClass" type="text" required>
                <option value="students_ALL" >-- Alla Klasser --</option>
                    @foreach($eds as $ed)
                        <option value="{{ $ed->name }}">{{$ed->name}}</option>
                    @endforeach
            </select>
            @if (count($students) >= 1)
            <table class="table table-striped mt-5" border="1px" >
                <thead class="bg-dark text-light">
                <tr>
                    <th>Namn</th>
                    <th>Email</th>
                    <th>Klass</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($students as $user)
                    <tr class="studentsALL">
                    <td><a href="/history/{{$user->id}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->class}}</td>
                    </tr>
                @endforeach

                @foreach ($studentsFWD19 as $user)
                    <tr  class="FWD19" style="display: none">
                        <td >{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->class}}</td>
                    </tr>
                @endforeach

                @foreach ($studentsFWD20 as $user)
                    <tr  class="FWD20" style="display: none">
                        <td >{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->class}}</td>
                    </tr>
                @endforeach

                @foreach ($studentsIK19 as $user)
                    <tr  class="IK19" style="display: none">
                        <td >{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->class}}</td>
                    </tr>
                @endforeach

                @foreach ($studentsIK20 as $user)
                    <tr  class="IK20" style="display: none">
                        <td >{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->class}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @elseif (!empty($search))
                <p>No results found for {{$search}}</p>
            @endif
            <form method="post" action="{{url('students/search')}}">
                @csrf
                <label for ="student_search">Sök:</label>
                <input name="name" type="text" class="search" id="student_search">
                <button type="submit">Sök student</button>
            </form>

            <form action="/student/add">
                <button class="btn btn-outline-success mr-3" type="submit">Lägg till student</button>
            </form>
            <form action="/">
                <button class="btn btn-lg bg-dark text-light mt-4" type="submit">Tillbaka till Meny</button>
            </form>
        </div>
@endsection
