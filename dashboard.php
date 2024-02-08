<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel= "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <div class= "wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Sidebar Content -->
            <div class="h-100">
                <div class="sidebar--logo">
                    <a href="#">CSTA ENTRANCE EXAM</a>
                </div>
                <ul class="sidebar--nav">
                    <li class="sidebar--header">
                        Admin
                    </li>
                    <li class="sidebar--item">
                        <a href="#" class="sidebar--link">
                        <img src="images/home.png" alt="" style= "width: 24px; height: 24px" ></img>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar--link collapsed" data-bs-target="#exam" data-bs-toggle="collapse" aria-expanded="false"><img src="images/subject.png" alt="" style= "width: 24px; height: 24px" &nsbi></img> Exam

                        </a>
                        <ul id="exam"class="sidebar--dropdown list-unstyled collapse"data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="" class="sidebar--link">Subject</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="" class="sidebar--link">Subject Questions</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="" class="sidebar--link">Instructions</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar--link collapsed" data-bs-target="#admininfo" data-bs-toggle="collapse" aria-expanded="false"><img src="images/admin.png" alt="" style= "width: 24px; height: 24px" &nsbi></img> Admin info

                        </a>
                        <ul id="admininfo"class="sidebar--dropdown list-unstyled collapse"data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="" class="sidebar--link">Admin Settings</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="" class="sidebar--link">Admin Accounts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar--link collapsed" data-bs-target="#courses" data-bs-toggle="collapse" aria-expanded="false"><img src="images/course.png" alt="" style= "width: 24px; height: 24px" &nsbi></img> Courses

                        </a>
                        <ul id="courses"class="sidebar--dropdown list-unstyled collapse"data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="" class="sidebar--link">BSHM</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="" class="sidebar--link">BSIT</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="" class="sidebar--link">BSTM</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="" class="sidebar--link">BEED</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar--header">
                        Examinees Data
                    </li>
                    <li class="sidebar--item">
                    <a href="#" class="sidebar--link collapsed" data-bs-target="#examinee" data-bs-toggle="collapse" aria-expanded="false"><img src="images/exam.png" alt="" style= "width: 24px; height: 24px" &nsbi></img> Examinees

                    </a>
                    <ul id="examinee"class="sidebar--dropdown list-unstyled collapse"data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="" class="sidebar--link">Examinee</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="" class="sidebar--link">Passing Score</a>
                            </li>
                    </ul>
                    </li>
                </ul>
            </div>
        </aside>  
        <!-- Header -->  
        <div class="main--head">
                <nav class="navbar navbar--expand px-3 border-bottom">
                    <button class="btn" id="sidebar--toggle" type="button"><img src="images/menu.png" alt="" style= "width: 32px; height: 32px" ></img>
                    <span class="navbar--toggle--icon"></span>
                    </button>
                <div class="navbar--collapse navbar">
                    <ul class="navbar--nav">
                        <div class="search--box">
                                    <img src="images/search.png" alt="" style= "width: 24px; height: 24px" ></img>
                                        <input type = "text" placeholder = "Search" />
                        </div>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" ><img src="images/account.png" alt="" style= "width: 24px; height: 24px" ></img>
                            </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><img src="images/settings.png" alt="" style= "width: 24px; height: 24px" ></img>  Settings</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="images/logout.png" alt="" style= "width: 24px; height: 24px" ></img>  Logout</a></li>
                                </ul>
                        </div>
                     
                    </ul>
                </div>
                </nav>
            

       
            <!-- Main Body -->
            <main class="content px-3 py-2">  
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4> Admin Dashboard </h4>
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"></li>
                            
                    </div>
                    <!-- Dashboard Cards -->
                      <div class="row">  
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Admin</h4>
                                                <p class="mb-0">Admin Dashboard, CSTA</p>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src ="images/admindash.jpg" class="img-fluid illustration-img" alt=""></img>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex -align items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2">
                                                86.75
                                            </h4>
                                            <p class="mb-2">
                                                Top Examineer Score
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me-2">
                                                    Sentence-----
                                                </span>
                                                <span class="text-muted">
                                                    2nd Sentence ------
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- Table -->
                        <div class="card border-0">
                            <div class="card-header">
                                <h5 class="card-title">
                                    Top Examinee's
                                </h5>
                                <h6 class="card-subtitle text-muted">
                                    List of examineer's who got high marks.
                                </h6>
                            </div>
                            <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                <th scope="col">Ranking</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Highest Score</th>
                                <th scope="col">Selected Course</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark Catequista</td>
                                <td>95.79</td>
                                <td>BSHM</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>John Rin</td>
                                <td>95.42</td>
                                <td>BSIT</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td>Larry Bong</td>
                                <td>89.98</td>
                                <td>BEED</td>
                                </tr>
                                </tbody>
                                </table>
                        </div>
                      </div>       
                </div> 
            </main>
            <!-- Footer -->
            <footer class ="footer">
                <div class="container-fluid">
                    <div class="row muted-text">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="" class="text-muted">
                                    <strong>CSTA ENTRANCE EXAM</strong>
                                </a>
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="" class="text muted"><img src="images/about.png" alt="" style= "width: 24px; height: 24px" ></img>  About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="text muted"><img src="images/contact.png" alt="" style= "width: 24px; height: 24px" ></img>  Contact Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="text muted"><img src="images/terms.png" alt="" style= "width: 24px; height: 24px" ></img>  Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>        
    </div>
    <!-- Jscript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
