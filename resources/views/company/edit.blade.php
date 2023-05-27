<x-app-layout>
    <x-slot name="header">

        <div class="col-md-12 d-flex justify-content-between">
            <h4 class="fw-bold h4">Edit Company</h3>
        </div>

        <form action="{{route('company.update', $company->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" value="{{$company->name}}" class="form-control" name="name" id="name" disabled >
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" value="{{$company->email}}" class="form-control" name="email" id="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>


            <div class="mb-3">
                <label class="form-label">Website</label>
                <input type="text" value="{{$company->website}}" class="form-control" name="website" id="website" >
            </div>

            <div class="mb-3">
                <label class="form-label">Logo</label>
                <input type="file" class="form-control" name="logo" alt="logo">
            </div>

            <button type="submit" class="btn btn-primary bg-success">SAVE</button>
          </form>
    </x-slot>
</x-app-layout>


