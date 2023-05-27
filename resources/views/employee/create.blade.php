<x-app-layout>
    <x-slot name="header">

        <div class="col-md-12 d-flex justify-content-between">
            <h4 class="fw-bold h4">Add Employee</h3>
        </div>

        <form action="{{route('employee.store')}}" method="post" ">
            @csrf

            <div class="mb-3">
              <label class="form-label">First Name</label>
              <input type="text" placeholder="Enter First Name" class="form-control" name="first_name" id="first_name" value="{{old('first_name')}}">
              @error('first_name') <p style="color:red">{{ $message }}</p> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" placeholder="Enter First Name" class="form-control" name="last_name" id="last_name" value="{{old('last_name')}}">
                @error('last_name') <p style="color:red">{{ $message }}</p> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" placeholder="Enter Email" class="form-control" name="email" id="email" value="{{old('email')}}">
                @error('email') <p style="color:red">{{ $message }}</p> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="number" placeholder="Enter Phone Number" class="form-control" name="phone" id="phone" value="{{old('phone')}}">
                @error('phone') <p style="color:red">{{ $message }}</p> @enderror
            </div>

            <div class="mb-3">
                    <label class="form-label">Company</label> <br>
                    <select name="company_id" id="company">
                        <option value="">Select</option>
                        @foreach($companyes as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>

                @error('company_id') <p style="color:red">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="btn btn-primary bg-success">Submit</button>

          </form>
    </x-slot>
</x-app-layout>


