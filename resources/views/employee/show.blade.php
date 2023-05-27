<x-app-layout>
    <x-slot name="header">

        <div class="col-md-12 d-flex justify-content-between">
            <h4 class="fw-bold h4">Employee Details</h3>
        </div>

        <h2 class="fw-bold h5"> First Name: {{ $employee->first_name }} </h2>
        <h2 class="fw-bold h5"> Last Name: {{ $employee->last_name }} </h2>
        <h2 class="fw-bold h5"> Email: {{ $employee->email }} </h2>
        <h2 class="fw-bold h5"> Phone Number: {{ $employee->phone }} </h2>

        
        <h2 class="fw-bold h5"> Company: {{ $employee->company->name }} </h2>
        <h2 class="fw-bold h5"> Company Logo:</h2>
        <img  class="img-thumbnail" width="160px"  src="{{asset('storage/logo/'. $employee->company->logo)}}"> <br>

        <a class="btn btn-success me-2" href="{{route('employee.edit', $employee->id)}}"> Edit </a>
        <br>
        <br>
        <form action="{{route('employee.destroy', $employee->id)}}" method="post">
            @csrf @method('DELETE')
            <button class="btn btn-danger me-2"> Delete </button>
        </form>



    </x-slot>
</x-app-layout>
