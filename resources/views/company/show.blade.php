<x-app-layout>
    <x-slot name="header">

        <div class="col-md-12 d-flex justify-content-between">
            <h4 class="fw-bold h4">Company Details</h3>
        </div>

        <h2 class="fw-bold h5"> Company Name: {{ $company->name }} </h2>
        <h2 class="fw-bold h5"> Email: {{ $company->email }} </h2>
        <h2 class="fw-bold h5"> website: <a href="{{$company->website}}" target="blank"> {{$company->website}} </a> </h2>
        <h2 class="fw-bold h5"> Logo: </h2>
        <img  class="img-thumbnail" width="600px"  src="{{asset('storage/logo/'. $company->logo)}}"> <br>

        <a class="btn btn-success me-2" href="{{route('company.edit', $company->id)}}"> Edit </a>
        <br>
        <br>
        <form action="{{route('company.destroy', $company->id)}}" method="post">
            @csrf @method('DELETE')
            <button class="btn btn-danger me-2"> Delete </button>
        </form>



    </x-slot>
</x-app-layout>


