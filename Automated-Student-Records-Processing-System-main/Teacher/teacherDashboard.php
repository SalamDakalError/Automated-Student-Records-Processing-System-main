<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adviser Dashboard</title>
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
      <a href="teacherDashboard.php" class="active"><img src="icons/dashboard.png" alt="">Dashboard</a>
      <a href="TeachstudentLists.php"><img src="icons/students.png" alt="">Students</a>
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
        <h3>Dashboard</h3>
        <p>Overview of Students</p>
      </div>

      <!-- STATS CARDS -->
      <div class="stats">
        <div class="card">
          <div class="dot green"></div>
          <p>Total Enrolled Students</p>
          <h2>0</h2>
        </div>
       
        <div class="card">
          <div class="dot green"></div>
          <p>Total Files</p>
          <h2>0</h2>
        </div>
      </div>

      <!-- FILES TABLE -->
      <div class="files-section">
        <h3>FILES</h3>
        <table>
          <thead>
            <tr>
              <th>Filename</th>
              <th>Submitted Date</th>
              <th>Status</th>
              <th>Approve Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Grade_3_Basic_Calculus.xslx</td>
              <td>January 13, 2025</td>
              <td><span class="status approve">Approve</span></td>
              <td>January 25, 2025</td>
            </tr>
            <tr>
              <td>Grade_3_General_Physics.xslx</td>
              <td>January 13, 2025</td>
              <td><span class="status pending">Pending</span></td>
              <td></td>
            </tr>
            <tr>
              <td>Grade_3_Philosopy.xslx</td>
              <td>January 13, 2025</td>
              <td><span class="status approve">Approve</span></td>
              <td>January 25, 2025</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>
