@extends('admin.layouts.app')
@section('style')
@endsection  

@section('content')

<!-- Content -->

<div class="container-fluid flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Show Result</h5>
                        <form action="{{ route('admin.get.result') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="classSelect" class="form-label">Class</label>
                                        <select id="classSelect" name="classSelect" class="form-select" aria-label="Default select example" name="class">
                                            <option value="">Select Class</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="section" class="form-label">Section</label>
                                        <select id="section" name="section" class="form-select" aria-label="Default select example" name="class">
                                            <option value="">Select Section</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="rollnumber" class="form-label">Roll Number</label>
                                        <input type="text" class="form-control" id="rollnumber" name="rollnumber" placeholder="Enter Roll Number">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button type="submit" class="btn btn-primary">search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

                   
@endsection

@section('script')
<script>
    const classSelect = document.getElementById("classSelect");
    const classNames = [
        "", "1", "2", "3", "4", "5", "6",
        "7", "8", "9", "10", "11", "12"
    ];

    const exclude = [8, 10, 12];

    for (let i = 1; i <= 12; i++) {
        if (exclude.includes(i)) continue;
        const option = document.createElement("option");
        option.value = i;
        option.text = classNames[i];
        classSelect.appendChild(option);
    }
</script>
@endsection