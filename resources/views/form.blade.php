<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: Cyan;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="/generate-pdf" method="post" enctype="multipart/form-data" id="userForm">
        @csrf
        <Cernter><h1>Basic Information of User </h1></Cernter>
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter Your Name" required>

        <label for="country">Country:</label>
        <select name="country" required>
            <!-- Static options -->
            <option value="">Select Your Country</option>
            <option value="IND">India</option>
            <option value="USA">United States</option>
            <option value="CAN">Canada</option>
            <option value="GBR">United Kingdom</option>
            <option value="AUS">Australia</option>
        </select>

        <label for="state">State:</label>
        <select name="state" required>
            <!-- Static options -->
            <option value="">Select Your State</option>
            <option value="Guj">Gujarat</option>
            <option value="MP">Madhya Pradesh</option>
            <option value="RAJ">Rajasthan</option>
            <option value="UP">Uttar Pradesh</option>
            <option value="NEP">New South Wales</option>
        </select>

        <label for="city">City:</label>
        <select name="city" required>
            <!-- Static options --> 
            <option value="">Select Your City</option>
            <option value="JAM">Jamnagar</option>
            <option value="RAJ">Rajkot</option>
            <option value="AHEM">Ahmedabad</option>
            <option value="GREENCITY">Greenwich</option>
            <option value="JUN">Junagadh</option>
        </select>

        <div>
            <label>Gender:</label>
            <label><input type="radio" name="gender" value="Male" required> Male</label>
            <label><input type="radio" name="gender" value="Female" required> Female</label>
        </div> <br>

        <label for="profile_image">Profile Photo:</label>
        <input type="file" name="profile_image" accept="image/*" required>

        <Center>
        <button type="submit">Generate PDF</button>
        </Center>
        
    </form>
</body>
<script>
        $(document).ready(function() {
            // Initialize the validation plugin
            $("#userForm").validate({
               rules: {
                    name: "required",
                    country: "required",
                     state: "required",
                     city: "required",
                     gender: "required",
                     profile_image: "required"
                 },
                 messages: {
                    name: "Please enter your name",
                     country: "Please enter your country",
                     state: "Please enter your state",
                     city: "Please enter your city",
                    gender: "Please select your gender",
                    profile_image: "Please select profile image"
                },
                submitHandler: function(form) {
                    // Form is valid, you can submit it here
                 form.submit();
                 }
             });
         });
    </script>

</html>
