    <div class="table-responsive mt-4">
            <table class="table table-striped table-hover" 
                style="
                    background-color: #ffffff;
                    border-radius: 10px;
                    overflow: hidden;
                    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
                ">
                <thead style="background-color: #b71c1c; color: white;">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Id Number</th>
                <th>Blood Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donors as $donor)
            <tr @if(is_null($donor->blood_type)) class="table-danger" @endif>
                <td>{{ $loop->iteration + ($donors->currentPage() - 1) * $donors->perPage() }}</td>
                <td>{{ $donor->user->full_name }}</td>
                <td>{{ $donor->identity_number }}</td>
                <td>
                    <select class="form-select w-auto mx-auto blood-type-select" data-donor-id="{{ $donor->id }}">
                        <option value="" {{ $donor->blood_type == null ? 'selected' : '' }} disabled>اختر زمرة الدم</option>
                        @foreach (['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'] as $type)
                            <option value="{{ $type }}" {{ $donor->blood_type == $type ? 'selected' : '' }}>{{ $type }}</option>
                        @endforeach
                    </select>
                    <small class="text-success message-{{ $donor->id }}"></small>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


