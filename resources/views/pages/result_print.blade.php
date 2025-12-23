<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $print_data->student_name }} - Result</title>

    <style>
        body {
            font-family: "Times New Roman", serif;
            margin: 0;
            padding: 20px;
            background: #fff;
        }

        .container {
            max-width: 800px;
            margin: auto;
            border: 2px solid #000;
            padding: 20px;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }

        .header h2 {
            margin: 0;
            text-transform: uppercase;
        }

        .header p {
            margin: 5px 0;
        }

        .student-info {
            margin-top: 20px;
        }

        .student-info table {
            width: 100%;
            border-collapse: collapse;
        }

        .student-info td {
            padding: 8px;
            border: 1px solid #000;
        }

        .marks {
            margin-top: 20px;
        }

        .marks table {
            width: 100%;
            border-collapse: collapse;
        }

        .marks th,
        .marks td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }

        .marks th {
            background: #f2f2f2;
        }

        .result-summary {
            margin-top: 20px;
        }

        .footer {
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
        }

        .signature {
            text-align: center;
        }

        @media print {
            body {
                padding: 0;
            }
        }
    </style>
</head>

<body onload="window.print()">

    <div class="container">

        <!-- Header -->
        <div class="header">
            <h2>ABC Public School</h2>
            <p>Examination Result</p>
            <p>Academic Year: {{ $print_data->year ?? '2024-25' }}</p>
        </div>

        <!-- Student Information -->
        <div class="student-info">
            <table>
                <tr>
                    <td><strong>Student Name</strong></td>
                    <td>{{ $print_data->student_name }}</td>
                </tr>
                <tr>
                    <td><strong>Roll Number</strong></td>
                    <td>{{ $print_data->roll_number }}</td>
                </tr>
                <tr>
                    <td><strong>Father's Name</strong></td>
                    <td>{{ $print_data->guardian_name }}</td>
                </tr>
            </table>
        </div>

        <!-- Marks Table -->
        <div class="marks">
            <table>
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Max Marks</th>
                        <th>Obtained Marks</th>
                    </tr>
                </thead>
                <tbody>
                    // marks loop
                </tbody>
            </table>
        </div>

        <!-- Result Summary -->
        <div class="result-summary">
            // result
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="signature">
                <p>____________________</p>
                <p>Class Teacher</p>
            </div>

            <div class="signature">
                <p>____________________</p>
                <p>Principal</p>
            </div>
        </div>

    </div>

</body>
</html>
