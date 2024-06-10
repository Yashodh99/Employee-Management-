<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
        .employee-details {
            position: relative;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .employee-details p {
            margin: 10px 0;
        }
        
        strong {
            font-weight: bold;
        }
        
        .back-link {
            position: absolute;
            top: 10px;
            left: 10px;
            text-decoration: none;
            color: #333;
            display: flex;
            align-items: center;
        }
        
        .back-link:hover {
            color: #000;
        }
        
        .back-icon {
            margin-right: 8px; 
        }
        
        .employee-details-content {
            margin-left: 25px; 
        }
    </style>
</head>
<body>
    <h1>Employee Details</h1>
    
    <div class="employee-details">
        <a class="back-link" href="/employees">
            <span class="back-icon">&larr;</span>
        </a>

        <div class="employee-details-content">
            <p><strong>Employee ID:</strong> {{ $employee->employee_id }}</p>
            <p><strong>Name:</strong> {{ $employee->name }}</p>
            <p><strong>Position:</strong> {{ $employee->position }}</p>
            <p><strong>Department:</strong> {{ $employee->department }}</p>
            <p><strong>Contact Information:</strong> {{ $employee->contact_information }}</p>
        </div>
    </div>
</body>
</html>
