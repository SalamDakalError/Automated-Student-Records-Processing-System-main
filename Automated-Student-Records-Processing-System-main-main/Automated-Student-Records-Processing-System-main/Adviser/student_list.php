<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students</title>
  <link rel="stylesheet" href="styleAdviserDashboard.css">
  <link rel="stylesheet" href="styleStudentList.css">
</head>
<body>

  <!-- HEADER BAR -->
  <header class="header">
    <img src="OIP.png" alt="DepEd Logo">
    <h1>Adviser</h1>
  </header>

  <div class="dashboard-container">

    <!-- SIDEBAR -->
    <aside class="sidebar">

      <nav class="menu">
        <a href="adviserDashboard.php"><img src="icons/dashboard.png" alt="">Dashboard</a>
        <a href="student_list.php" class="active"><img src="icons/students.png" alt="">Students</a>
        <a href="#"><img src="icons/advisory.png" alt="">Advisory</a>
        <a href="#"><img src="icons/files.png" alt="">Files</a>
      </nav>

      <div class="sidebar-footer">
        <div class="user-info">
          <div class="avatar"></div>
          <div>
            <strong>Manarang John Paul</strong><br>
            <span>Adviser</span>
          </div>
        </div>

        <form action="../Login/loginBJLBB.php" method="post" style="margin:0;">
          <button type="submit" class="signout">
            <img src="icons/logout.png" alt="">Sign Out
          </button>
        </form>
      </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">
      <div class="topbar">
        <h3>Students</h3>
        <p>Overview of Students</p>
      </div>

      <div class="panel">
        <div class="field">
          <label for="subject_code">Subject Code</label>
          <select id="subject_code" name="subject_code">
            <option>Math</option>
            <option>English</option>
          </select>
        </div>

        <div class="field">
          <label for="grade_level">Grade Level</label>
          <select id="grade_level" name="grade_level">
            <option>7</option>
            <option>8</option>
          </select>
        </div>

        <div class="field">
          <label for="section">Section</label>
          <select id="section" name="section">
            <option>--</option>
            <option>A</option>
            <option>B</option>
          </select>
        </div>

        <div class="search-box">
          <label for="show_count">Show</label>
          <select id="show_count" name="show_count">
            <option>10</option>
            <option>25</option>
            <option>50</option>
          </select>

          <input id="search_query" type="text" placeholder="Search...">
          <button class="btn">Filter</button>
        </div>
      </div>

      <div class="students-table">
        <table>
          <thead>
            <tr>
              <th style="width:60px">No.</th>
              <th>Fullname</th>
              <th style="width:120px">Grade</th>
              <th style="width:150px">Remarks</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Flora, Kyrill Chudomirevich</td>
              <td>99</td>
              <td>Passed</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Manarang, John Paul</td>
              <td>90</td>
              <td>Passed</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>
