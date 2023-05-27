<x-app-layout>
    <x-slot name="header">

        <div class="col-md-12 d-flex justify-content-between">
            <h4 class="fw-bold h4">Edit Employee</h3>
        </div>

        <form action="{{route('employee.update', $employee->id)}}" method="post" >
            @csrf
            @method('PUT')


            <div class="mb-3">
              <label class="form-label">First Name</label>
              <input type="text" value="{{$employee->first_name}}" class="form-control" name="first_name" id="first_name" disabled >
            </div>

            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" value="{{$employee->last_name}}" class="form-control" name="last_name" id="last_name" disabled >
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" value="{{$employee->email}}" class="form-control" name="email" id="email" required>
                @error('email') <p style="color:red">{{ $message }}</p> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" value="{{$employee->phone}}" class="form-control" name="phone" id="phone" required>
                @error('phone') <p style="color:red">{{ $message }}</p> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Company</label> <br>
                <select name="company_id" id="company">
                    <option value="$employee->company->name">{{$employee->company->name}}</option>
                    @foreach($companyes as $company)
                        <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                </select>

            @error('company_id') <p style="color:red">{{ $message }}</p> @enderror
            </div>



            <button type="submit" class="btn btn-primary bg-success">SAVE</button>
          </form>
    </x-slot>
</x-app-layout>


