<x-app-layout>
    <x-slot name="header">

        <div class="col-md-12 d-flex justify-content-between">
            <h4 class="fw-bold h4">Here is company list</h3>
            <a class="btn btn-info" href="{{route('company.create')}}">Create Company</a>
        </div>

            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Website</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                        <tr>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->email }}</td>
                            {{-- <td>{{ $company->logo }}</td> --}}
                            <td> <img class="img-thumbnail" width="160px" src="{{asset('storage/logo/'. $company->logo)}}"> </td>
                            <td> <a href="{{$company->website}}" target="blank"> {{$company->website}} </a></td>
                            <td>
                                <a class="btn btn-primary me-2" href="{{route('company.show', $company->id)}}"> View </a>
                                <a class="btn btn-success me-2" href="{{route('company.edit', $company->id)}}"> Edit </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

    </x-slot>
</x-app-layout>
