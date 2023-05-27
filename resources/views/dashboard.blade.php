<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('adminDashboard.Dashboard')}} 
        </h2>

        <div align="right">
            {{-- <select>
                <option value="">{{__('adminDashboard.Select_Language')}}</option>
                <option ><a>English</a></option>
                <a class="btn btn-info" href="{{route('dashboard.ba','ba')}}">Bangla</a>
                <option ><a href="{{route('dashboardln','ba')}}">Bangla</a></option>
            </select> --}}
            
            <p>{{__('adminDashboard.Select_Language')}} :</p>
            <a class="btn btn-info" href="{{route('dashboard')}}">English</a>
            <a class="btn btn-info" href="{{route('dashboard.ba','ba')}}">বাংলা</a>
        </div>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <strong>{{__('adminDashboard.Welcome')}}</strong> {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <div class="row ">
                        <div class="col-md-12 d-flex justify-content-between">
                            <h4 class="fw-bold h4">{{__('adminDashboard.Company_Panel')}}</h3>
                            <a class="btn btn-info" href="{{route('company.index')}}">{{__('adminDashboard.View_Company_List')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <div class="row ">
                        <div class="col-md-12 d-flex justify-content-between">
                            <h4 class="fw-bold h4">{{__('adminDashboard.Employee_Panel')}}</h3>
                            <a class="btn btn-info" href="{{route('employee.index')}}">{{__('adminDashboard.View_Employee_List')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
