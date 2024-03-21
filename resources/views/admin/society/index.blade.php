@extends('admin.layouts.app',['title' => 'Policy Details'])
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">KYC Details</h4>
        </div>
        {{-- <a href="{{ route('society.create') }}">
            <button type="button" class="btn btn-primary bg-gradient waves-effect waves-light mb-3">Create</button>
        </a> --}}
        <div class="card">
            <div class="card-body">
                <div class="live-preview">
                    <div class="table-responsive">
                         <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                        <thead>
                                <tr>
                                    <th scope="col" class="col-2">Sr No</th>
                                    <th scope="col" class="col-2">KYC Details</th>
                                    <th scope="col" class="col-2">Agent Details</th>
                                    <th scope="col" class="col-2">DOB</th>
                                    <th scope="col" class="col-2">Member Details</th>
                                    <th scope="col" class="col-2">Payment Status</th>
                                    <th scope="col" class="col-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($societies as $society)
                                <tr>
                                    <td>{{ $loop->index }}</td>

                                    <td><mark>{{ $society->policy }}</mark>
                                     </td>

                                    <td>{{ $society->agentname }}<br>
                                    <b>Commision</b> : {{ $society->commision }}</td>

                                    <td>{{ date('d-m-Y', strtotime($society->exp_date)) }}</td>

                                    <td>{{ $society->proposer }}<br>
                                    <b>Phone</b> : <a href="tel:{{ $society->mobile }}">{{ $society->mobile }}</a><br>
                                    <b>Mail</b> : <a href="mailto:{{ $society->email }}">{{ $society->email }}</a></td>
                                    <td>
                                        @if ($society->pay_status==0)
                                        <span  class="btn-sm btn btn-danger waves-effect waves-light">Payment Failed</span>
                                    @else
                                    <span  class="btn-sm btn btn-success waves-effect waves-light">Payment Success</span>

                                    @endif

                                </td>

                                    <td>
                                        <div class="d-flex">
                                            {{-- <a href="{{ route('society.edit',$society->id) }}" class="action-icon">
                                                <i class="ri-edit-box-line" style="font-size: 20px"></i>
                                            </a> --}}

                                            <a href="{{ route('society.view',$society->id) }}" class="btn btn-sm btn-primary">
                                                View KYC
                                            </a>
                                            <form action="{{ route('society.destroy', $society->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Are You Sure You Want to Delete !!')"
                                                    class="action-icon px-2">
                                                    <i class="ri-delete-bin-line" style="font-size: 20px"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- end table responsive -->
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div>
@endsection
@section('scripts')
<script>
    // Ajax Request
    $(document).ready(function() {
        $('.form-check-input').change(function() {
            let status = $(this).prop('checked') === true ? 1 : 0;
            let societyId = $(this).data('id');
            $.ajax({
                type: "POST", // Change this to POST
                dataType: "json",
                url: '{{ route('society.status') }}',
                data: {
                    '_token': '{{ csrf_token() }}', // Add the CSRF token
                    'status': status,
                    'societyId': societyId
                },
                success: function(data) {
                    console.log(data.message);
                }
            });
        });
    });
</script>
@endsection
