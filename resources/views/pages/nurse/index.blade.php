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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">BHT Listing</h1>
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
                        <li class="breadcrumb-item text-muted">BHT</li>
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
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <form action="">
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                                      rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"/>
												<path
                                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                    fill="currentColor"/>
											</svg>
										</span>
                                        <input type="text" class="form-control  w-200px ps-14" name="key" placeholder="Search" value="{{@$request->key}}"/>

                                        <div class="w-200px p-2">
                                            <!--begin::Select2-->
                                            <select class="form-select " name="status">
                                                <option value="">Select Status</option>
                                                <option value="1" {{@$request->status == 1 ? 'selected' : ''}}>Active</option>
                                                <option value="0" {{ isset($request->status) && $request->status == 0 ? 'selected' : ''}}>Inactive</option>
                                            </select>
                                            <!--end::Select2-->
                                        </div>

                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>

                                </form>
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            @can('nurse.create')
                                <a href="{{route('nurses.create')}}" class="btn btn-primary">Add BHT</a>
                            @endcan
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="nurse_table">
                                    <!--begin::Table head-->
                                    <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-center text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                       
                                        <th class="min-w-50px">SN</th>
                                        <th class="min-w-80px">Photo</th>
                                        <th class="min-w-175px">Name</th>
                                        <th class="min-w-70px">Email</th>
                                        <th class="min-w-100px text-center">Security Status</th>
                                        <th class="min-w-100px text-center">Active Status</th>
                                        {{-- <th class="min-w-100px">Verified At.</th> --}}
                                        <th class="min-w-100px text-center">Actions</th>
                                    </tr>
                                    <!--end::Table row-->
                                    </thead>
                                    <!--begin::Table body-->
                                    <tbody class="fw-semibold text-gray-600">
                                    @foreach ($nurses as $key => $nurse)
                                        <tr class="text-center">                                       
                                            <td>
                                                {{$key + $nurses->firstItem()}}
                                            </td>
                                            <td>
                                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                    <div class="symbol-label">
                                                        <img class="symbol-circle w-100" src="{{$nurse->getFirstMediaUrl('avatar', 'thumb')}}" alt="{{$nurse->name}}" class="w-100">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{$nurse->name}}
                                            </td>
                                            <td class=" pe-0">
                                                <a href="mailto:{{$nurse->email}}">{{$nurse->email}}</a>
                                            </td>

                                            <td class=" pe-0" data-order="Completed">
                                                @if($nurse->security_status == 1)
                                                    <div class="badge badge-light-success">Yes</div>
                                                @else
                                                    <div class="badge badge-light-danger">No</div>
                                                @endif
                                            </td>
                                            <td class=" pe-0" data-order="Completed">
                                                @if($nurse->active_status == 1)
                                                    <div class="badge badge-light-success">Active</div>
                                                @else
                                                    <div class="badge badge-light-danger">Inactive</div>
                                                @endif
                                            </td>

                                            <!--begin::Action=-->
                                            <td class="text-center">
                                                <div class="menu flex-wrap justify-content-center">
                                                    @can('nurse.patient.assign')
                                                        <div class="menu-item mx-1">
                                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#add-patient-{{$nurse->id}}">Add Patients</a>
                                                            @include('pages.nurse.modal.add-patient')
                                                        </div>
                                                    @endcan

                                                    @can('nurse.edit')
                                                        <div class="menu-item mx-1">
                                                            <a href="{{ route('nurses.edit', $nurse->id) }}" class="btn btn-sm btn-light ">Edit</a>
                                                        </div>
                                                    @endcan
                                                    @can('nurse.delete')
                                                        <div class="menu-item mx-1">
                                                            <form action="{{ route('nurses.destroy', $nurse->id)}}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <input class="btn btn-sm btn-danger" type="submit" value="Delete"/>
                                                            </form>
                                                        </div>
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                {{ $nurses->appends(request()->input())->links() }}
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


