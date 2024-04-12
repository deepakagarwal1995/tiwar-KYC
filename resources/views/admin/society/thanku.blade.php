@extends('admin.layouts.kyc', ['title' => $title])
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet"
        type="text/css" />
    <style>
        .form-label {
            margin-bottom: 1px;
        }

        @media (min-width: 768px) {
            .main-content {
                margin-left: 0;
                margin: 0 50px;
            }
        }

        .mycard {
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

            <div class="card">
                <div class="card-header align-items-center d-flex text-center">
                    <h4 class="card-title mb-0 flex-grow-1 text-center">KYC Created Successfully</h4>

                </div>

                <!-- end card header -->
                <div class="card-body text-center">
                    <div class="live-preview text-center">
                        <img src="https://i.gifer.com/7efs.gif" height="120">

                        <p>
                            Thank You We have received your payment Successfully
                        </p>
                        <h4>
                          Dear KYC Holder Your ID Code Is <br>
                        </h4>
                        <h4><mark class="mt-3"><b>{{$code->user_code}}</b></mark></h4>

                    </div>
                </div>
            </div>

        <!-- **************************************************  Edit Form ************************************************** -->

    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script>
    $(document).ready(function() {
        var j = 2;
        $('#addcustom_size_set').click(function() {


            $('#custom_sets_container').append(`<div class="mycard customsizes` + j +
                `"><div class="form-group row"><div class= "col-lg-6" > <h5>Member Details</h5></div><div class="col-lg-6 text-end"><button type="button"  id="` +
                j + `" class="btn btn-danger btn_remove_sizeset1"> X </button></div><div class="col-lg-4"><div class="mb-3"><label for="firstNameinput" class="form-label">Name Of Insured</label><input type="text" class="form-control" name="f_name[]" required>
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
    $(document).on('click', '.btn_remove_sizeset1', function() {
        var button_id = $(this).attr("id");
        $('.customsizes' + button_id + '').remove();
    });

    $(function() {
        $(".datepicker").datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        }).datepicker('update', new Date());
    });
</script>
@endsection
