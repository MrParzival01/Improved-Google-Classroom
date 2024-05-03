<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User/Admin Selection</title>
    <style>
        body {
			background: url(Harvey.jpg);
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
			background: rgba(255, 255, 255, 0.497);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
    backdrop-filter: blur(8.5px);
    -webkit-backdrop-filter: blur(8.5px);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        button {
            width: 50%;
            padding: 15px;
            background: linear-gradient(to left, #5ab89d,#377162);
    border: none;
    margin-bottom:0px ;
    border-radius: 5px;
    cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 style="margin-bottom: 40px;">Select User Type</h2>
    <form action="#" method="POST">
        <a href={{ route('teacher.login') }}>
            <button type="button">Teacher</button>
          </a> <br><br>
          <a href={{ route('student.login') }}>
            <button type="button">Student</button>
          </a>
    </form>

</div>

</body>
</html>
