<x-app-layout>
    <x-slot name="header">

        <div class="col-md-12 d-flex justify-content-between">
            <h4 class="fw-bold h4">Here is employee list</h3>
            <a class="btn btn-info" href="{{route('employee.create')}}">Create Employee</a>
        </div>


            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Company</th>
                        <th scope="col">Email</th>
                        <th scope="col">phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->first_name }}</td>
                            <td>{{ $employee->last_name }}</td>
                            <td>{{ $employee->company->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>
                                <a class="btn btn-primary me-2" href="{{route('employee.show', $employee->id)}}"> View </a>
                                <a class="btn btn-success me-2" href="{{route('employee.edit', $employee->id)}}"> Edit </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="row">
                {{$employees->links()}}
            </div>

    </x-slot>
</x-app-layout>
