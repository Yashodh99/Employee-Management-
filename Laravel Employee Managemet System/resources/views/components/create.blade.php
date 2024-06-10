<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        .container {
            width: 80%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            display: block;
            margin: 0 auto;
            margin-bottom: 10px; 
        }
        
        button:hover {
            background-color: #218838;
        }
        
        .cancel-button {
            background-color: #dc3545; 
        }
        
        .cancel-button:hover {
            background-color: #c82333; 
        }
        
        .error {
            color: red;
            margin-bottom: 20px;
        }
        
        .error ul {
            list-style-type: none;
            padding: 0;
        }
        
        .error li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Create New Employee</h1>
    
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="employee_id">Employee ID:</label>
            <input type="text" id="employee_id" name="employee_id" value="{{ old('employee_id') }}" required>
            @error('employee_id')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" id="position" name="position" value="{{ old('position') }}" required>
            @error('position')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="department">Department:</label>
            <input type="text" id="department" name="department" value="{{ old('department') }}" required>
            @error('department')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="contact_information">Contact Information (Email):</label>
            <input type="text" id="contact_information" name="contact_information" value="{{ old('contact_information') }}" required>
            @error('contact_information')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Create Employee</button>
        
        <button type="button" class="cancel-button" onclick="window.location.href='/employees'">Cancel</button>
    </form>
</div>

</body>
</html>
