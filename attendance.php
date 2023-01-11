<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="attendance.css">
    <title>Attendance</title>
</head>
<body>
    <div class="attendance-page">
        <div class="Nav-Panel">
        </div>
        <div class="Content-Area">
            <div class="section-1">
                <h1>Attendance Report</h1>
                <div class="sub-section">
                    <img src="assets/user_profile.jpg" alt="user-profile">
                    <form action="" method="post">
                    <div class="profile-info">
                        <h3>John Carlo Bisquera</h3>
                        <h6>Org Admin</h6>
                    </div>
                    </form>
                </div>
            </div>
            <div class="section-2">
                <form action="" method="post">
                    <div class="page-navigate">
                        <h3>Events</h3>
                    </div>
                    <div class="sub-section-2">
                        <input type="text" name="searchbox" id="searchbox" placeholder="Search by event name, date">
                        <div class="search-nav">
                            <select name="Sort" id="">
                                <option value="eventName">Event name</option>
                                <option value="date">Date</option>
                            </select>
                            <button>Search</button>
                        </div>
                    </div>
                    <div></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
