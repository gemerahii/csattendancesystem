<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <link rel="stylesheet" href="../css/manage-events.css" />

  <!-- icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://kit.fontawesome.com/b8e4159bd9.js" crossorigin="anonymous"></script>
</head>



<body>
  <div class="nav-events-container">
    <nav class="nav-sidebar">
      <div class="nav-logo">
        <img src="../assets/university-logo.png" alt="university logo">
        <span>Attendance Portal</span>
      </div>
      <div class="nav-manage-links">
        <ul>
          <li>
            <i class="fa-solid fa-chart-column"></i>
            <a href="#"><span>Dashboard</span></a>
          </li>
          <li>
            <i class="fa-solid fa-pencil"></i>
            <a href="#"><span>Get Attendance</span></a>
          </li>
          <li>
            <span>Manage</span>
          </li>
          <li>
            <i class="fa-solid fa-wallet"></i>
            <a href="#"><span>Accounts</span></a>
          </li>
          <li>
            <i class="fa-regular fa-note-sticky"></i>
            <a href="#"><span>Events</span></a>
          </li>
          <li>
            <i class="fa-solid fa-users"></i>
            <a href="#"><span>Attendee</span></a>
          </li>
          <li>
            <i class="fa-regular fa-flag"></i>
            <a href="#"><span>Attendance</span></a>
          </li>
          <li>
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <button href="#"><span>Log Out</span></button>
          </li>
        </ul>
      </div>
    </nav>
    <main class="events">
      <div class="events-header">
        <span>Dashboard</span>
        <div class="user">
          <img src="../assets/user.jpg" alt="Emman Gwapo">
          <div class="user-info">
            <span>Emman Adonay</span>
            <span>Super User</span>
          </div>
        </div>
      </div>
      <div class="events-main">
        <div class="search-navigate">
          <div class="left-search-navigate">
            <input type="text" class="search" placeholder="Search by name, host, organization admin..." />
          </div>
          <div class="right-search-navigate">
            <select name="sort" class="sort" id="sort">
              <option value="name" selected>Sort</option>
              <option value="name">Name</option>
              <option value="date">Date Created</option>
              <option value="date">Status</option>
            </select>
            <button class="create-button" id="myBtn">Create New</button>
          </div>
        </div>

        <table>
          <thead>
          </thead>
          <tbody>
            <tr class="table-head">
              <th>Event Name</th>
              <th>Date</th>
              <th>Host</th>
              <th>Status</th>
              <th class="btn-group-sm" style="width: 148px;">
              </th>
            </tr>

            <tr class="row">
              <td class="event-name">Computer Science Day</td>
              <td class="date">February 15, 2023</td>
              <td class="host">Alan Turing</td>
              <td class="status">Upcoming </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>
            </tr>

            <tr class="row">
              <td class="event-name">Computer Science Day</td>
              <td class="date">February 15, 2023</td>
              <td class="host">Alan Turing</td>
              <td class="status">Upcoming </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>
            </tr>

            <tr class="row">
              <td class="event-name">Computer Science Day</td>
              <td class="date">February 15, 2023</td>
              <td class="host">Alan Turing</td>
              <td class="status">Upcoming </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>
            </tr>

            <tr class="row">
              <td class="event-name">Computer Science Day</td>
              <td class="date">February 15, 2023</td>
              <td class="host">Alan Turing</td>
              <td class="status">Upcoming </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>
            </tr>

            <tr class="row">
              <td class="event-name">Computer Science Day</td>
              <td class="date">February 15, 2023</td>
              <td class="host">Alan Turing</td>
              <td class="status">Upcoming </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>
            </tr>

            <tr class="row">
              <td class="event-name">Computer Science Day</td>
              <td class="date">February 15, 2023</td>
              <td class="host">Alan Turing</td>
              <td class="status">Upcoming </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>
            </tr>

            <tr class="row">
              <td class="event-name">Computer Science Day</td>
              <td class="date">February 15, 2023</td>
              <td class="host">Alan Turing</td>
              <td class="status">Upcoming </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>
            </tr>

            <tr class="row">
              <td class="event-name">Computer Science Day</td>
              <td class="date">February 15, 2023</td>
              <td class="host">Alan Turing</td>
              <td class="status">Upcoming </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>
            </tr>

            <tr class="row">
              <td class="event-name">Computer Science Day</td>
              <td class="date">February 15, 2023</td>
              <td class="host">Alan Turing</td>
              <td class="status">Upcoming </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>
            </tr>

            <tr class="row">
              <td class="event-name">Computer Science Day</td>
              <td class="date">February 15, 2023</td>
              <td class="host">Alan Turing</td>
              <td class="status">Upcoming </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>
            </tr>

            <tr class="row">
              <td class="event-name">Computer Science Day</td>
              <td class="date">February 15, 2023</td>
              <td class="host">Alan Turing</td>
              <td class="status">Upcoming </td>
              <td class="btn-group-sm">
                <a class=""><span class="material-symbols-outlined"> visibility </span></a>
                <a class=""><span class="material-symbols-outlined">
                    edit
                  </span></a>
                <a class=""><span class="material-symbols-outlined">
                    delete
                  </span></a>
              </td>
            </tr>
          </tbody>

        </table>



    </main>


    <!--start of create modal -->
    <!-- create events -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <form action="" class="add_event_form" method="post">
          <div class="title title_event_form-div">
            <p class="title_event_form">Create New Event</p>
          </div>
          <div class="input-div">
            <div class="input-for-1">
              <label for="event_name">Event Name</label>
              <input type="text" name="event_name" class="input event_name" placeholder="Type here" required />
            </div>
          </div>
          <div class="input-div">
            <div class="input-for-1">
              <label for="host">Host name</label>
              <input type="text" name="host" class="input host" placeholder="Type here" required />
            </div>
          </div>
          <div class="input-div">
            <div class="input-for-3">
              <label for="date">Date</label>
              <input type="date" name="startDate" class="input date" placeholder="Type here" required />
            </div>
            <div class="input-for-3">
              <label for="start_time">Start Time</label>
              <input type="time" name="start_time" class="input start_time" placeholder="Type here" required />
            </div>
            <div class="input-for-3">
              <label for="end_time">End Time</label>
              <input type="time" name="end_time" class="input end_time" placeholder="Type here" required />
            </div>
          </div>
          <div class="input-div">
            <div class="input-for-1">
              <label for="event_desc">Description</label>
              <input type="text" name="event_desc" class="input event_desc" placeholder="Type here" required />
            </div>
          </div>
          <div class="input-div">
            <div class="input-for-1">
              <label for="fines">Fines</label>
              <input type="text" name="fines" class="input fines" placeholder="Type here" required />
            </div>
          </div>
          <input type="text" name="org_admin_id" placeholder="Type here" value="1" hidden />
          <input type="text" name="fines" placeholder="Type here" value="1" hidden />
          <input type="text" name="session" placeholder="Type here" value="afternoon" hidden />

          <div class="group-of-buttons">
            <div class="input-for-1"><span class="close">Cancel</span></div>
            <input type="submit" class="submit submit-event" name="create_event" value="Submit" />
          </div>
        </form>
      </div>
    </div>
    <!-- end of create modal -->




  </div>



  <script src="../script/events.js"></script>
</body>

</html>