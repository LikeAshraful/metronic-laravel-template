<div class="modal fade" id="add-patient-{{$nurse->id}}" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <div class="modal-header flex-row-fluid justify-content-end gap-5">
                <form action="{{route('assign.patient', $nurse->id)}}" method="POST">
                    @csrf
                    <input type="text" name="allpatients" value="1" hidden>

                    <button type="submit" class="btn btn-sm btn-primary">Select all Patients</button>
                </form>
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y pt-0 pb-15">
                <!--begin::Wrapper-->
                <div class="mw-lg-600px mx-auto">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Add Patient</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="mb-10">
                       <form action="{{route('assign.patient', $nurse->id)}}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-right col-lg-4 col-sm-12">Patient</label>
                                <div class="col-lg-8 col-sm-12">
                                    <select class="form-select form-select-solid" data-control="select2" data-close-on-select="false" data-placeholder="Select an option" data-allow-clear="true" name="patient_id[]" multiple="multiple">
                                        @foreach ($patients as $patient)
                                            <option value="{{$patient->id}}" {{in_array($patient->id, $nurse->patients()?->pluck('patient_id')->toArray()) ? 'selected' : ''}}>{{$patient->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('patient_id')
                                        <div class="fv-plugins-message-container invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                       </form>
                    </div>
                    <!--end::Input group-->

                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
