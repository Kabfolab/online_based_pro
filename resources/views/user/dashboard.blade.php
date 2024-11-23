<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            height: 100vh;
        }
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #f8f9fa;
        }
        #content {
            flex: 1;
            padding: 20px;
        }
        .nav-item > a {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .term-details {
            display: none;
            margin-top: 20px;
        }
        .term {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 10px; /* Rounded corners for term containers */
        }
        .term .row > div {
            margin-bottom: 10px;
            margin-right: 10px;
            padding: 20px;
            height: 100px;
            width: calc(25% - 10px); /* Adjust width to fit 4 items in a row with margin */
            border-radius: 10px; /* Rounded corners for each attendance item */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;

        }
    </style>
</head>
<body>
    <div id="sidebar" class="d-flex flex-column p-3">
        <h4>Dashboard</h4>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link main-link" data-link="Admin">Admin <span class="arrow">&#8250;</span></a>
                <ul class="nav flex-column ms-3 sub-links">
                    <li class="nav-item"><a href="#" class="nav-link" data-link="Admin>Create Student">Create Student</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-link="Admin>View Students">View Students</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link main-link" data-link="Academics">Academics <span class="arrow">&#8250;</span></a>
                <ul class="nav flex-column ms-3 sub-links">
                    <li class="nav-item"><a href="#" class="nav-link" data-link="Academics>Subjects">Subjects</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-link="Academics>Timetable">Timetable</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-link="Academics>Attendance">Attendance</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link main-link" data-link="Communication">Communication <span class="arrow">&#8250;</span></a>
                <ul class="nav flex-column ms-3 sub-links">
                    <li class="nav-item"><a href="#" class="nav-link" data-link="Communication>Messages">Messages</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-link="Communication>Notifications">Notifications</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="content">
    <div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a class="float-end" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
</div>

        <div id="breadcrumb" class="bg-primary text-white"></div>
        <div id="attendance-details" class="term-details">
            <h5>Attendance Details</h5>
          
            <div class="term">
                <h6>First Term</h6>
                <div class="row">
                <div class="col-sm-3 border p-2">Total Time Present: <span id="first-term-present">0</span></div>
                <div class="col-sm-3 border p-2">Total Time Absent: <span id="first-term-absent">0</span></div>
                <div class="col-sm-3 border p-2">Punctuality: <span id="first-term-punctual">0</span></div>
                <div class="col-sm-3 border p-2">School Opened: <span id="first-term-opened">0</span></div>
                </div>
            </div>
          
          
            <div class="term">
                <h6>Second Term</h6>
                <div class="row">
                <div class="col-sm-3 border p-2">Total Time Present: <span id="second-term-present">0</span></div>
                <div class="col-sm-3 border p-2">Total Time Absent: <span id="second-term-absent">0</span></div>
                <div class="col-sm-3 border p-2">Punctuality: <span id="second-term-punctual">0</span></div>
                <div class="col-sm-3 border p-2">School Opened: <span id="second-term-opened">0</span></div>
                </div>
            </div>
            <div class="term">
                <h6>Third Term</h6>
                <div class="row">
                <div class="col-sm-3 border p-2">Total Time Present: <span id="third-term-present">0</span></div>
                <div class="col-sm-3 border p-2">Total Time Absent: <span id="third-term-absent">0</span></div>
                <div class="col-sm-3 border p-2">Punctuality: <span id="third-term-punctual">0</span></div>
                <div class="col-sm-3 border p-2">School Opened: <span id="third-term-opened">0</span></div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>
