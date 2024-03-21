@extends('admin.layouts.app',['title' => $title])
@section('content')

<style>
    .form-label {
    margin-bottom: 1px;
}
.mycard{
    background: #e2e4ed;
    padding: 10px;
    border-radius: 0;
    border: 1px solid #b7b7b7;
    margin-bottom: 11px;
}
</style>
<div class="row">
    <div class="col">
        <!-- **************************************************  Create Form ************************************************** -->
        @isset($create)
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Create KYC</h4>

            </div>

            <!-- end card header -->
            <div class="card-body">
                <div class="live-preview">
                    <form action="{{ route('society.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Category</label><span
                                        class="text-danger">*</span>
                                    <select class="form-control" name="policy_type" required>
                                        <option selected="" value="">-KYC Type-</option>
                                        @foreach ($residents as $society )
                                        <option value="{{ $society->id }}">{{ $society->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('policy_type')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">AGENT CODE</label>
                                    <select id="ForminputState" class="form-select" data-choices="" data-choices-sorting="true" name="agent">
                                        <option selected="" value="">-AGENT CODE-</option>
                                        @foreach ($agents as $society )
                                        <option value="{{ $society->user_id }}">{{ $society->user_id }} ({{ $society->name }})</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('agent')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <!--end col-->
                             <div class="col-md-6">
                            <div class="mb-3">
                                <label for="firstNameinput" class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="proposer name" name="proposer" >
                            </div>
                            @error('proposer')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Date</label>
                                    <input type="date" class="form-control" placeholder="Date" name="start_date" required>
                                </div>
                                @error('start_date')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Vehicle Number <span class="text text-success">(IF Any)</span></label>
                                    <input type="text" class="form-control" placeholder="Vehicle No" name="vehicle_no" >
                                </div>
                                @error('vehicle_no')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <!--end col-->
                       
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="firstNameinput" class="form-label">Address</label>
                                <input type="text" class="form-control" placeholder="Enter Address" name="address" >
                            </div>
                            @error('address')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="firstNameinput" class="form-label">DOB</label>
                                <input type="date" class="form-control" placeholder="Enter DOB" name="dob" >
                            </div>
                            @error('dob')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="firstNameinput" class="form-label">Ocupation</label>
                                <input type="text" class="form-control" placeholder="Enter Ocupation" name="ocupation" >
                            </div>
                            @error('ocupation')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="firstNameinput" class="form-label">Gender</label>
                                <select class="form-select"  name="gender">
                                    <option selected="" value="">-gender-</option>
                                <option selected="" value="Male">Male</option>
                                <option selected="" value="Female">Female</option>
                                </select>
                            </div>
                            @error('gender')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="firstNameinput" class="form-label">Mobile</label>
                                <input type="number" class="form-control" placeholder="Enter Mobile" name="mobile" >
                            </div>
                            @error('mobile')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="firstNameinput" class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email" name="email" >
                            </div>
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="firstNameinput" class="form-label">Annual Income</label>
                                <input type="number" class="form-control" placeholder="Enter Annual Income" name="annual_income" >
                            </div>
                            @error('annualincome')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                           

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Last Company Name" name="last_c_name">
                                </div>
                                @error('last_c_name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Date Of Birth</label>
                                    <input type="date" class="form-control" placeholder="Enter Date Of Birth" name="last_expiry">
                                </div>
                                @error('last_expiry')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Profile</label>
                                    <input type="file" class="form-control" name="last_copy">
                                </div>
                                @error('last_copy')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Documents</label>
                                    <input type="file" class="form-control" name="docs[]" multiple>
                                </div>
                                @error('last_copy')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                </div>
            </div>
        </div>
        @endisset

        <!-- **************************************************  Edit Form ************************************************** -->

    </div>
</div>
<script>
    $(document).ready(function () {
        var j = 2;
        $('#addcustom_size_set').click(function () {


            $('#custom_sets_container').append(`<div class="mycard customsizes` + j + `"><div class="form-group row"><div class= "col-lg-6" > <h5>Member Details</h5></div><div class="col-lg-6 text-end"><button type="button"  id="` + j + `" class="btn btn-danger btn_remove_sizeset1"> X </button></div><div class="col-lg-4"><div class="mb-3"><label for="firstNameinput" class="form-label">Name Of Insured</label><input type="text" class="form-control" name="f_name[]" required>
                                </div>
                                </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Date Of Birth</label>
                                    <input type="date" class="form-control" name="f_dob[]">
                                </div>
                            </div>


                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">HT & WT</label>
                                        <input type="text" class="form-control" name="f_ht[]">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Ocuppation</label>
                                        <input type="text" class="form-control" name="f_ocuppation[]">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Relation With Proposer</label>
                                        <input type="text" class="form-control" name="f_relation[]">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Nominee Name</label>
                                        <input type="text" class="form-control" name="f_nominee[]">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Nominee DOB</label>
                                        <input type="date" class="form-control" name="f_nomineeDOB[]">
                                    </div>
                                </div>
                                <div class="col-lg-12"><h5>Health History:</h5></div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Diabetes</label>
                                        <input type="text" class="form-control" name="f_diabetes[]">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">B.P.</label>
                                        <input type="text" class="form-control" name="f_bp[]">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="firstNameinput" class="form-label">Any Pre Disease</label>
                                        <input type="text" class="form-control" name="f_predisease[]">
                                    </div>
                                </div>  </div>
                            </div ></div>`);
            j++;
        });
    });
    $(document).on('click', '.btn_remove_sizeset1', function () {
        var button_id = $(this).attr("id");
        $('.customsizes' + button_id + '').remove();
    });
</script>
@endsection
