<x-app-layout>
    <x-slot name="header">

        <div class="col-md-12 d-flex justify-content-between">
            <h4 class="fw-bold h4">Add Company</h3>
        </div>

        <form action="{{route('company.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" placeholder="Name" class="form-control" name="name" id="name" value="{{old('name')}}">
              @error('name') <p style="color:red">{{ $message }}</p> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" placeholder="Email" class="form-control" name="email" id="email" value="{{old('email')}}">
                @error('email') <p style="color:red">{{ $message }}</p> @enderror
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Logo</label>
                <input type="file" class="form-control" name="logo" alt="logo">
                @error('logo') <p style="color:red">{{ $message }}</p> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Website</label>
                <input type="text" placeholder="Website" class="form-control" name="website" id="website" value="{{old('website')}}">
                @error('website') <p style="color:red">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="btn btn-primary bg-success">Submit</button>
          </form>
    </x-slot>
</x-app-layout>


