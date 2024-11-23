<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        header {
            background-color: #f8f9fa;
            padding: 5px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0px;
        }

        .logo {
            display: flex;
            align-items: center;
            padding-right: 20px;
            margin-right: 20px;
        }

        .logo img {
            width: 40px;
            margin-right: 10px;
        }

        .main {
            flex: 1;
            display: flex;
            overflow: hidden; /* Ensure no overflow issues */
        }

        #sidebar {
            width: 250px;
            margin-top: 5px;
            background: #f8f9fa;
            padding: 5px;
            height: 100%; /* Full height of container */
            overflow-y: auto; /* Scroll if content overflows */
        }

        #content {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            overflow-y: auto;
        }

        .navbar {
            margin-bottom: 20px;
        }

        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
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
            border-radius: 10px;
        }

        .term .row > div {
            margin-bottom: 10px;
            margin-right: 10px;
            padding: 20px;
            height: 100px;
            width: calc(25% - 10px);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="school-logo.png" alt="Sch Logo">
            <h4>School Name</h4>
        </div>
        <div>
            <span>Hi, {{ Auth::user()->name }}</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button class="btn btn-link" type="submit">Logout</button>
            </form>
        </div>
    </header>
    <div class="main">
        <div id="sidebar" class="d-flex flex-column p-3">
            <h4>Dashboard</h4>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link main-link" data-link="Admin">Admin <span class="arrow">&#8250;</span></a>
                    <ul class="nav flex-column ms-3 sub-links">
                        <li class="nav-item"><a href="#" class="nav-link" data-link="Admin>Create Staff">Create Staff</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" data-link="Admin>Create Student">Create Student</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" data-link="Admin>View Students">Staff</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link main-link" data-link="Academics">Academics <span class="arrow">&#8250;</span></a>
                    <ul class="nav flex-column ms-3 sub-links">
                        <li class="nav-item">
                            <a href="#" class="nav-link sub-link" data-link="Academics>Students">Students <span class="arrow">&#8250;</span></a>
                            <ul class="nav flex-column ms-3 sub-sub-links">
                                <li class="nav-item"><a href="#" class="nav-link" data-link="Academics>Students>Register Students Online">Register Students Online</a></li>
                                <li class="nav-item"><a href="#" class="nav-link" data-link="Academics>Students>Register Students Using Excel">Register Students Using Excel</a></li>
                                <li class="nav-item"><a href="#" class="nav-link" data-link="Academics>Students>Generate Password for Students">Generate Password for Students</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link" data-link="Academics>Time-table">Time-table</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" data-link="Academics>Attendance">Attendance</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" data-link="Academics>Result">Result</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" data-link="Academics>CBT">CBT</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" data-link="Academics>Homework">Homework</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" data-link="Academics>Lesson-plan">Lesson-plan</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" data-link="Academics>B-Class">B-Class</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link main-link" data-link="Communication">Account <span class="arrow">&#8250;</span></a>
                    <ul class="nav flex-column ms-3 sub-links">
                        
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link main-link" data-link="Communication">Health <span class="arrow">&#8250;</span></a>
                    <ul class="nav flex-column ms-3 sub-links">
                        
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link main-link" data-link="Communication">Communication <span class="arrow">&#8250;</span></a>
                    <ul class="nav flex-column ms-3 sub-links">
                        <li class="nav-item"><a href="#" class="nav-link" data-link="Communication>SMS">SMS</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" data-link="Communication>Email">Email</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" data-link="Communication>Chat">Chat</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link main-link" data-link="Communication">Settings <span class="arrow">&#8250;</span></a>
                    <ul class="nav flex-column ms-3 sub-links">
                        
                    </ul>
                </li>
            </ul>
        </div>
        <div id="content">
            <div class="main-content">
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
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initially hide all sub-links and sub-sub-links
        document.querySelectorAll('.sub-links, .sub-sub-links').forEach(function(element) {
            element.style.display = 'none';
        });

        // Handle main link clicks
        document.querySelectorAll('.main-link').forEach(function(mainLink) {
            mainLink.addEventListener('click', function(e) {
                e.preventDefault();
                var subLinks = mainLink.nextElementSibling;

                if (subLinks.style.display === 'block') {
                    subLinks.style.display = 'none';
                    mainLink.querySelector('.arrow').innerHTML = '&#8250;'; // Change arrow to right
                } else {
                    document.querySelectorAll('.sub-links').forEach(function(subLink) {
                        subLink.style.display = 'none';
                    }); // Hide all sub-links
                    document.querySelectorAll('.arrow').forEach(function(arrow) {
                        arrow.innerHTML = '&#8250;'; // Reset all arrows to right
                    });
                    subLinks.style.display = 'block';
                    mainLink.querySelector('.arrow').innerHTML = '&#9660;'; // Change arrow to down
                }

                var link = mainLink.dataset.link;
                updateBreadcrumb(link);

                // Hide attendance details if a main link is clicked
                if (!link.includes('Attendance')) {
                    document.getElementById('attendance-details').style.display = 'none';
                }
            });
        });

        // Handle sub-link clicks
        document.querySelectorAll('.sub-link').forEach(function(subLink) {
            subLink.addEventListener('click', function(e) {
                e.preventDefault();
                var subSubLinks = subLink.nextElementSibling;

                if (subSubLinks.style.display === 'block') {
                    subSubLinks.style.display = 'none';
                    subLink.querySelector('.arrow').innerHTML = '&#8250;'; // Change arrow to right
                } else {
                    document.querySelectorAll('.sub-sub-links').forEach(function(subSubLink) {
                        subSubLink.style.display = 'none';
                    }); // Hide all sub-sub-links
                    subLink.closest('.sub-links').querySelectorAll('.arrow').forEach(function(arrow) {
                        arrow.innerHTML = '&#8250;'; // Reset all arrows in sub-links to right
                    });
                    subSubLinks.style.display = 'block';
                    subLink.querySelector('.arrow').innerHTML = '&#9660;'; // Change arrow to down
                }

                var link = subLink.dataset.link;
                updateBreadcrumb(link);

                // Hide attendance details if a main link or sub-link is clicked
                if (!link.includes('Attendance')) {
                    document.getElementById('attendance-details').style.display = 'none';
                }
            });
        });

        // Handle nav-link clicks
        document.querySelectorAll('a.nav-link').forEach(function(navLink) {
            navLink.addEventListener('click', function(e) {
                if (!navLink.classList.contains('main-link') && !navLink.classList.contains('sub-link')) {
                    e.preventDefault();
                    var link = navLink.dataset.link;
                    updateBreadcrumb(link);

                    // Show attendance details if the attendance link is clicked
                    if (link === 'Academics>Attendance') {
                        document.getElementById('attendance-details').style.display = 'block';
                    } else {
                        document.getElementById('attendance-details').style.display = 'none';
                    }
                }
            });
        });

        function updateBreadcrumb(link) {
            var breadcrumb = link.replace(/>/g, ' > ');
            document.getElementById('breadcrumb').textContent = breadcrumb;
        }
    });
</script>
    </body>
</html>
