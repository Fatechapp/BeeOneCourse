<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["Username"])) {
    header("Location: login-teacher.php"); // Redirect to the login page
    exit();
}

$Username = $_SESSION["Username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!--TITLE-->
    <title>BeeOne Course</title>

    <!--CSS-->
    <link rel="stylesheet" href="../../style/dashboard-teacher-style.css">

    <!--ICON-->
    <link rel="icon" href="../../asset/bee-one-course-logo.ico">

    <!--FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!--SCRIPT-->
    <script src="../../script/dashboard-teacher-script.js"></script>
</head>
<body>
<div class="tab-menu-container">
    <!--Sidebar-->
    <div class="sidebar-container">
        <div class="logo">
            <img src="../../asset/bee-one-course-logo.png" alt="logo">
        </div>
        <div class="menu-item">
            <div class="item-nav" id="Dashboard">
                <figure>
                    <svg width="47" height="45" viewBox="0 0 47 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.0417 15V0H46.375V15H26.0417ZM0.625 25V0H20.9583V25H0.625ZM26.0417 45V20H46.375V45H26.0417ZM0.625 45V30H20.9583V45H0.625Z"/>
                    </svg>
                </figure>
                <a href="#">Dashboard</a>
            </div>
            <div class="item-nav" id="Classroom">
                <figure>
                    <svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M50.35 48.8057V8.90566H39.9V0L8.55 5.40514V48.8057H0V52.6057H10.3194L39.9 56.6857V12.7057H46.55V52.6057H57V48.8057H50.35ZM36.1 52.3256L12.35 49.0498V8.60617L36.1 4.51191V52.3256Z" fill="white"/>
                        <path d="M28.5 26.0054H32.3V33.6054H28.5V26.0054Z" fill="white"/>
                    </svg>
                </figure>
                <a href="#">My Class</a>
            </div>
            <div class="item-nav" id="Schedule">
                <figure>
                    <svg width="54" height="51" viewBox="0 0 54 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.0581 0V5.08333H35.0969V0H40.4432V5.08333H51.1357C51.8447 5.08333 52.5246 5.35111 53.0259 5.82777C53.5272 6.30442 53.8088 6.95091 53.8088 7.625V48.2917C53.8088 48.9658 53.5272 49.6122 53.0259 50.0889C52.5246 50.5656 51.8447 50.8333 51.1357 50.8333H3.01932C2.31036 50.8333 1.63044 50.5656 1.12913 50.0889C0.627824 49.6122 0.346191 48.9658 0.346191 48.2917V7.625C0.346191 6.95091 0.627824 6.30442 1.12913 5.82777C1.63044 5.35111 2.31036 5.08333 3.01932 5.08333H13.7119V0H19.0581ZM48.4626 25.4167H5.69246V45.75H48.4626V25.4167ZM13.7119 10.1667H5.69246V20.3333H48.4626V10.1667H40.4432V15.25H35.0969V10.1667H19.0581V15.25H13.7119V10.1667Z" fill="white"/>
                    </svg>
                </figure>
                <a href="#">Schedule</a>
            </div>
        </div>
    </div>
    <div class="content">
        <header>
            <h3>BEE ONE COURSE LEARNING SYSTEM</h3>
            <div class="kanan">
                <div class="notification-icon">
                    <svg width="60" height="59" viewBox="0 0 60 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.6125 50.3958C22.1526 52.1706 23.2604 53.7266 24.7715 54.833C26.2825 55.9393 28.1161 56.5368 30 56.5368C31.8839 56.5368 33.7175 55.9393 35.2285 54.833C36.7396 53.7266 37.8474 52.1706 38.3875 50.3958H21.6125ZM7.5 47.9375H52.5V40.5625L47.5 33.1875V20.8958C47.5 18.636 47.0474 16.3983 46.1679 14.3105C45.2884 12.2227 43.9994 10.3256 42.3744 8.7277C40.7493 7.12976 38.8202 5.86221 36.697 4.99741C34.5738 4.13261 32.2981 3.6875 30 3.6875C27.7019 3.6875 25.4262 4.13261 23.303 4.99741C21.1798 5.86221 19.2507 7.12976 17.6256 8.7277C16.0006 10.3256 14.7116 12.2227 13.8321 14.3105C12.9527 16.3983 12.5 18.636 12.5 20.8958V33.1875L7.5 40.5625V47.9375Z" fill="black"/>
                    </svg>
                </div>
                <div class="blok"></div>
                <div class="username">
                    <p>Username</p>
                </div>
                <div class="dropdown">
                    <button>
                        <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M56 31.5C56 35.213 54.525 38.774 51.8995 41.3995C49.274 44.025 45.713 45.5 42 45.5C38.287 45.5 34.726 44.025 32.1005 41.3995C29.475 38.774 28 35.213 28 31.5C28 27.787 29.475 24.226 32.1005 21.6005C34.726 18.975 38.287 17.5 42 17.5C45.713 17.5 49.274 18.975 51.8995 21.6005C54.525 24.226 56 27.787 56 31.5ZM49 31.5C49 33.3565 48.2625 35.137 46.9497 36.4497C45.637 37.7625 43.8565 38.5 42 38.5C40.1435 38.5 38.363 37.7625 37.0503 36.4497C35.7375 35.137 35 33.3565 35 31.5C35 29.6435 35.7375 27.863 37.0503 26.5503C38.363 25.2375 40.1435 24.5 42 24.5C43.8565 24.5 45.637 25.2375 46.9497 26.5503C48.2625 27.863 49 29.6435 49 31.5Z" fill="black"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M42 3.5C20.7375 3.5 3.5 20.7375 3.5 42C3.5 63.2625 20.7375 80.5 42 80.5C63.2625 80.5 80.5 63.2625 80.5 42C80.5 20.7375 63.2625 3.5 42 3.5ZM10.5 42C10.5 49.315 12.9955 56.049 17.178 61.397C20.1153 57.5396 23.9046 54.4136 28.25 52.2631C32.5954 50.1126 37.3791 48.9958 42.2275 49C47.0131 48.9955 51.7367 50.0833 56.0383 52.1807C60.3398 54.2781 64.1059 57.3297 67.0495 61.103C70.0821 57.1256 72.1239 52.4833 73.0061 47.5601C73.8883 42.6369 73.5855 37.5744 72.1227 32.7914C70.66 28.0085 68.0793 23.6427 64.5942 20.0551C61.1091 16.4676 56.8199 13.7615 52.0813 12.1608C47.3428 10.5601 42.2912 10.1107 37.3445 10.8499C32.3978 11.5891 27.6983 13.4956 23.6347 16.4117C19.5711 19.3278 16.2603 23.1695 13.9763 27.6192C11.6923 32.0688 10.5006 36.9984 10.5 42ZM42 73.5C34.7688 73.5109 27.7559 71.0232 22.148 66.458C24.4053 63.2266 27.4097 60.5882 30.9057 58.7674C34.4017 56.9466 38.2858 55.9972 42.2275 56C46.1201 55.9969 49.9572 56.9225 53.4202 58.7C56.8833 60.4775 59.8723 63.0555 62.139 66.22C56.4875 70.9335 49.359 73.5103 42 73.5Z" fill="black"/>
                        </svg>
                    </button>
                    <div class="dropdown-item">
                        <a href="#">Logout</a>
                        <a href="#">Profile</a>
                    </div>
                </div>
            </div>
        </header>
        <div class="dashboard-content content-info">
            <div class="dashboard-content-info">
                <div class="kiri">
                    <div class="kiri-atas">
                        <div class="credit-card">
                            <p class="upcoming-session" style="font-size: 1.5rem; font-weight: 300;">Upcoming Session</p>
                            <h2 class="class-description">R4-1</h2>
                            <p style="margin-top: 1rem; font-size: 1.5rem; font-weight: 300;" class="session-description">Regular Class</p>
                            <div class="session-time-container">
                                <i class="fas fa-clock"></i>
                                <p class="session-time">15.00 - 16.30</p>
                            </div>
                        </div>
                        <div class="credit-card-2">
                            <p>Hello World</p>
                        </div>
                    </div>
                    <div class="kiri-tengah" style="display: flex; flex-direction: column; gap: 0.25rem">
                        <h4 style="font-weight: 600">Monthly Dashboard</h4>
                        <p><span class="hijau">(+23) More hours taught</span> than last month</p>
                    </div>
                    <div class="kiri-progress">
                        <div class="progress-box">
                            <h4>Hours Teached</h4>
                            <p>40 Hours</p>
                            <div class="progress-bar">
                                <div class="progress-indicator" style="width: 20%;"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h4>Session Teached</h4>
                            <p>40 Hours</p>
                            <div class="progress-bar">
                                <div class="progress-indicator" style="width: 20%;"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h4>Total Student</h4>
                            <p>45</p>
                            <div class="progress-bar">
                                <div class="progress-indicator" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    </div>
                <div class="dahboard-kanan">
                    <h3>Additional Task</h3>
                    <div class="task-list">
                        <div class="task-list-content">

                            <div class="additional-task">
                                <div class="additional-task-content">
                                    <div class="additional-task-kiri">
                                        <h5>01/11/2023</h5>
                                        <h5>R4-1 Chelsea</h5>
                                        <p style="opacity: 0.75; font-size: 0.9rem">Task Type</p>
                                    </div>
                                    <div class="additional-task-kanan" style="z-index: 5;">
                                        <p style="opacity: 0.75; font-size: 0.9rem">Task Info</p>
                                        <p class="taskinfo-detail2">Prepare Exam materials for Chelsie from class R4-1 with the subject
                                            Bahasa Indonesia Unit 8 - Consonants.</p>
                                    </div>
                                </div>
                                <div class="segitiga"></div>
                            </div>
                            <div class="additional-task">
                                <div class="additional-task-content">
                                    <div class="additional-task-kiri">
                                        <h5>01/11/2023</h5>
                                        <h5>R4-1 Chelsea</h5>
                                        <p style="opacity: 0.75; font-size: 0.9rem">Task Type</p>
                                    </div>
                                    <div class="additional-task-kanan" style="z-index: 5;">
                                        <p style="opacity: 0.75; font-size: 0.9rem">Task Info</p>
                                        <p class="taskinfo-detail2">Prepare Exam materials for Chelsie from class R4-1 with the subject
                                            Bahasa Indonesia Unit 8 - Consonants.</p>
                                    </div>
                                </div>
                                <div class="segitiga"></div>
                            </div>
                            <div class="additional-task">
                                <div class="additional-task-content">
                                    <div class="additional-task-kiri">
                                        <h5>01/11/2023</h5>
                                        <h5>R4-1 Chelsea</h5>
                                        <p style="opacity: 0.75; font-size: 0.9rem">Task Type</p>
                                    </div>
                                    <div class="additional-task-kanan" style="z-index: 5;">
                                        <p style="opacity: 0.75; font-size: 0.9rem">Task Info</p>
                                        <p class="taskinfo-detail2">Prepare Exam materials for Chelsie from class R4-1 with the subject
                                            Bahasa Indonesia Unit 8 - Consonants.</p>
                                    </div>
                                </div>
                                <div class="segitiga"></div>
                            </div>
                            <div class="additional-task">
                                <div class="additional-task-content">
                                    <div class="additional-task-kiri">
                                        <h5>01/11/2023</h5>
                                        <h5>R4-1 Chelsea</h5>
                                        <p style="opacity: 0.75; font-size: 0.9rem">Task Type</p>
                                    </div>
                                    <div class="additional-task-kanan" style="z-index: 5;">
                                        <p style="opacity: 0.75; font-size: 0.9rem">Task Info</p>
                                        <p class="taskinfo-detail2">Prepare Exam materials for Chelsie from class R4-1 with the subject
                                            Bahasa Indonesia Unit 8 - Consonants.</p>
                                    </div>
                                </div>
                                <div class="segitiga"></div>
                            </div>
                            <div class="additional-task">
                                <div class="additional-task-content">
                                    <div class="additional-task-kiri">
                                        <h5>01/11/2023</h5>
                                        <h5>R4-1 Chelsea</h5>
                                        <p style="opacity: 0.75; font-size: 0.9rem">Task Type</p>
                                    </div>
                                    <div class="additional-task-kanan" style="z-index: 5;">
                                        <p style="opacity: 0.75; font-size: 0.9rem">Task Info</p>
                                        <p class="taskinfo-detail2">Prepare Exam materials for Chelsie from class R4-1 with the subject
                                            Bahasa Indonesia Unit 8 - Consonants.</p>
                                    </div>
                                </div>
                                <div class="segitiga"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="classroom-content content-info" hidden="" style="background: #EAC178">
            <div class="class-list">
                <div class="class-object">

                </div>
            </div>
        </div>
        <div class="schedule-content content-info" hidden="">
            <h3>SCHEDULE</h3>
        </div>
    </div>
</div>
</body>
</html>
