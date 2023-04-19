@extends('layout.app')
@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">User Listing</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="/" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">dashboard</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">user</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">                           
                            <x-search-filter :request=$request />
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            @can('user.create')
                                <a href="{{ route('users.create') }}" class="btn btn-sm fw-bold btn-primary">Add User</a>
                            @endcan
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="reason_table">
                                    <!--begin::Table head-->
                                    <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-center text-gray-400 fw-bold fs-7 text-uppercase gs-0">                                        
                                        <th class="min-w-50px">SN</th>
                                        <th class="min-w-175px">Name</th>
                                        <th class="min-w-175px">Email</th>
                                        <th class="min-w-175px">Roles</th>
                                        <th width=15% class="min-w-100px">Actions</th>
                                    </tr>
                                    <!--end::Table row-->
                                    </thead>
                                    <!--begin::Table body-->
                                    <tbody class="fw-semibold text-gray-600">
                                    @foreach ($users as $key => $user)
                                        <tr class="text-center">                                            
                                            <td>
                                                {{ $key + $users->firstItem() }}
                                            </td>
                                            <td>
                                                {{ $user->name }}
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td>

                                                @foreach ($user->roles as $role)
                                                    <div class="badge badge-light-success">{{ $role->name }}</div>
                                                @endforeach

                                            </td>

                                            <!--begin::Action=-->
                                            <td class="text-center">
                                                <!--begin::Menu-->
                                                <div class="menu justify-content-between ">
                                                    @can('user.edit')
                                                        <div class="menu-item ">
                                                            <a href="{{ route('users.edit', $user->id) }}"
                                                               class="btn btn-sm btn-light font-weight-bold ">Edit</a>
                                                        </div>
                                                    @endcan

                                                    @can('user.delete')
                                                        <div class="menu-item">
                                                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <input class="btn btn-sm btn-danger font-weight-bold" type="submit" value="Delete"/>
                                                            </form>
                                                        </div>
                                                    @endcan

                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                            <!--end::Action=-->
                                        </tr>
                                    @endforeach

                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/custom/utilities/modals/create-reason.js') }}"></script>
@endpush
