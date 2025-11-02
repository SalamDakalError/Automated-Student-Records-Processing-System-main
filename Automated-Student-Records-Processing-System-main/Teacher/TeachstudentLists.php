<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students - Teacher Dashboard</title>
  <link rel="stylesheet" href="styleTeacherDashboard.css">
</head>
<body>

  <!-- HEADER BAR -->
  <header class="header">
    <img src="OIP.png" alt="DepEd Logo">
    <h1>Teacher</h1>
  </header>

  <div class="dashboard-container">

    <!-- SIDEBAR -->
    <aside class="sidebar">
      <div class="sidebar-header">
        <h2>Teacher</h2>
      </div>

    <nav class="menu">
      <a href="teacherDashboard.php"><img src="icons/dashboard.png" alt="">Dashboard</a>
      <a href="TeachstudentLists.php" class="active"><img src="icons/students.png" alt="">Students</a>
      <a href="files.php"><img src="icons/files.png" alt="">Files</a>
    </nav>

      <div class="sidebar-footer">
        <div class="user-info">
          <div class="avatar"></div>
          <div>
            <strong>Fyodor Dostoyevsky</strong><br>
            <span>Teacher</span>
          </div>
        </div>

        <!-- Sign Out -->
        <form action="loginBJLBB.php" method="post" style="margin:0;">
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

      <!-- FILTER SECTION -->
      <div class="files-section">
        <div style="margin-bottom: 20px;">
          <strong>Subject Code:</strong> Math<br>
          <strong>Grade Level:</strong> 7<br>
          <strong>Section:</strong> 
          <select style="padding: 5px; border-radius: 5px; border: 1px solid #ccc;">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
          </select>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
          <div>
            <label>Show 
              <select style="padding: 5px; border-radius: 5px; border: 1px solid #ccc;">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
              </select>
              Entries
            </label>
          </div>
          <div>
            <label>Search: 
              <input type="text" style="padding: 5px; border-radius: 5px; border: 1px solid #ccc;">
            </label>
          </div>
        </div>

        <!-- STUDENTS TABLE -->
        <table>
          <thead>
            <tr>
              <th>No.</th>
              <th>Fullname</th>
              <th>Grade</th>
              <th>Remarks</th>
            </tr>
          </thead>
          <tbody>
            <tr style="cursor: pointer;" onclick="window.location.href='student_detail.php?id=1'">
              <td>1</td>
              <td>Flins, Kyryll Chudomirovich</td>
              <td>99</td>
              <td>Passed</td>
            </tr>
            <tr style="cursor: pointer;" onclick="window.location.href='student_detail.php?id=2'">
              <td>2</td>
              <td>Manarang, John Paul</td>
              <td>99</td>
              <td>Passed</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>