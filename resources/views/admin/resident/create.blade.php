@extends('admin.layouts.app',['title' => 'Category Edit'])
@section('content')
<div class="row">
    <div class="col">
        <!-- **************************************************  Create Form ************************************************** -->
        @isset($create)
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Create Category</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="live-preview">
                    <form action="{{ route('resident.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Category</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" placeholder="Enter Category" name="name">
                                </div>
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <!--end col-->
                        
                            <!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ForminputState" class="form-label">Commission</label><span
                                        class="text-danger">*</span>
                                     <input type="number" class="form-control" value=""
                                        name="society" required>
                                </div>
                                @error('society')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <!--end col-->
                           
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
        @isset($edit)
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Edit Commission</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="live-preview">
                    <form action="{{ route('resident.update' , $resident->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Category</label><span class="text-danger">*</span>
                                    <input type="text" class="form-control" value="{{ $resident->name ?? '' }}"
                                        name="name"  >
                                </div>
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <!--end col-->
                          
                            <!--end col-->
                         
                           
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Commission (%)</label>
                                    <input type="number" class="form-control" value="{{ $resident->society }}"
                                        name="society" required>
                                </div>
                                @error('society')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <!--end col-->
                          
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

    </div>
</div>
@endsection
