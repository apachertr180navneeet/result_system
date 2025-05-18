<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marksheet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Student Marksheet</h4>
            </div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $result->student_name }}</p>
                <p><strong>Father Name:</strong> {{ $result->father_name }}</p>
                <p><strong>Class:</strong> {{ $result->class }}</p>
                <p><strong>Section:</strong> {{ $result->section }}</p>
                <p><strong>Roll Number:</strong> {{ $result->roll_number }}</p>

                <div class="table-responsive mt-4">
                    @php
                        $totalMarks = 
                            ($result->hindi_half_yearly_written ?? 0) + ($result->hindi_half_yearly_oral ?? 0) + ($result->hindi_yearly_written ?? 0) + ($result->hindi_yearly_oral ?? 0) +
                            ($result->english_half_yearly_written ?? 0) + ($result->english_half_yearly_oral ?? 0) + ($result->english_yearly_written ?? 0) + ($result->english_yearly_oral ?? 0) +
                            ($result->maths_half_yearly_written ?? 0) + ($result->maths_half_yearly_oral ?? 0) + ($result->maths_yearly_written ?? 0) + ($result->maths_yearly_oral ?? 0) +
                            ($result->envormental_studies_half_yearly ?? 0) + ($result->envormental_studies_yearly ?? 0) +
                            ($result->work_expirence_half_yearly ?? 0) + ($result->work_expirence_yearly ?? 0) +
                            ($result->art_education_half_yearly ?? 0) + ($result->art_education_yearly ?? 0) +
                            ($result->health_and_phisical_education_half_yearly ?? 0) + ($result->health_and_phisical_education_yearly ?? 0) +
                            ($result->computer_half_yearly ?? 0) + ($result->computer_yearly ?? 0) +
                            ($result->gk_half_yearly ?? 0) + ($result->gk_yearly ?? 0);

                        $percentage = round(($totalMarks / 800) * 100, 2);
                    @endphp

                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Subject</th>
                                <th>Total Marks (Half-Yearly + Yearly)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Hindi</td>
                                <td>{{ 
                                    ($result->hindi_half_yearly_written ?? 0) + 
                                    ($result->hindi_half_yearly_oral ?? 0) + 
                                    ($result->hindi_yearly_written ?? 0) + 
                                    ($result->hindi_yearly_oral ?? 0) 
                                }}</td>
                            </tr>
                            <tr>
                                <td>English</td>
                                <td>{{ 
                                    ($result->english_half_yearly_written ?? 0) + 
                                    ($result->english_half_yearly_oral ?? 0) + 
                                    ($result->english_yearly_written ?? 0) + 
                                    ($result->english_yearly_oral ?? 0) 
                                }}</td>
                            </tr>
                            <tr>
                                <td>Maths</td>
                                <td>{{ 
                                    ($result->maths_half_yearly_written ?? 0) + 
                                    ($result->maths_half_yearly_oral ?? 0) + 
                                    ($result->maths_yearly_written ?? 0) + 
                                    ($result->maths_yearly_oral ?? 0) 
                                }}</td>
                            </tr>
                            <tr>
                                <td>Environmental Studies</td>
                                <td>{{ 
                                    ($result->envormental_studies_half_yearly ?? 0) + 
                                    ($result->envormental_studies_yearly ?? 0) 
                                }}</td>
                            </tr>
                            <tr>
                                <td>Work Experience</td>
                                <td>{{ 
                                    ($result->work_expirence_half_yearly ?? 0) + 
                                    ($result->work_expirence_yearly ?? 0) 
                                }}</td>
                            </tr>
                            <tr>
                                <td>Art Education</td>
                                <td>{{ 
                                    ($result->art_education_half_yearly ?? 0) + 
                                    ($result->art_education_yearly ?? 0) 
                                }}</td>
                            </tr>
                            <tr>
                                <td>Health & Physical Education</td>
                                <td>{{ 
                                    ($result->health_and_phisical_education_half_yearly ?? 0) + 
                                    ($result->health_and_phisical_education_yearly ?? 0) 
                                }}</td>
                            </tr>
                            {{--  <tr>
                                <td>Computer</td>
                                <td>{{ 
                                    ($result->computer_half_yearly ?? 0) + 
                                    ($result->computer_yearly ?? 0) 
                                }}</td>
                            </tr>
                            <tr>
                                <td>General Knowledge</td>
                                <td>{{ 
                                    ($result->gk_half_yearly ?? 0) + 
                                    ($result->gk_yearly ?? 0) 
                                }}</td>
                            </tr>  --}}

                            {{-- Total Row --}}
                            <tr class="table-success fw-bold">
                                <td>Total Marks</td>
                                <td>{{ $totalMarks }} / 800</td>
                            </tr>
                        </tbody>
                    </table>

                    {{-- Percentage --}}
                    <div class="mt-3">
                        <h5><strong>Percentage:</strong> {{ $percentage }}%</h5>
                    </div>

                </div>

                

            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
