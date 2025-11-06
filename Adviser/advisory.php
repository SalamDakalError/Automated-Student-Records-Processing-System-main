<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Advisory</title>
  <!-- Core and Page-Specific CSS -->
  <link rel="stylesheet" href="styleAdviserDashboard.css">
  <link rel="stylesheet" href="stylefiles.css">
</head>
<body>

  <!-- ===== HEADER ===== -->
  <header class="header">
    <img src="OIP.png" alt="Logo">
    <h1>Adviser</h1>
  </header>

  <!-- ===== DASHBOARD CONTAINER ===== -->
  <div class="dashboard-container">
    
    <!-- ===== SIDEBAR ===== -->
    <aside class="sidebar">
      <div class="menu">
        <a href="adviserDashboard.php"><img src="dashboard.png" alt="">Dashboard</a>
        <a href="student_list.php"><img src="User.png" alt="">Students</a>
        <a href="advisory.php" class="active"><img src="google-docs.png" alt="">Advisory</a>
        <a href="files.php"><img src="google-docs.png" alt="">Files</a>
      </div>

      <!-- ===== SIDEBAR FOOTER ===== -->
      <div class="sidebar-footer">
        <button class="signout">
          <img src="out.png" alt="Logout Icon">
          Sign Out
        </button>
      </div>
    </aside>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="main-content">
      <section class="content-box active" id="files">
        <div class="section-header">
          <div>
            <h2>Advisory</h2>
            <p style="color: #666;">Overview of Students</p>
          </div>
        </div>

        <!-- ===== FILES TABLE ===== -->
        <div>
          <table class="data-table">
            <thead>
              <tr>
                <th>No.</th>
                <th>Student ID#</th>
                <th>Fullname</th>
                <th>Grade Level</th>
                <th>Section</th>
                <th>GWA</th>
              </tr>
            </thead>
            <tbody>
              <!-- Data from database will load here -->
            </tbody>
          </table>
        </div>
      </section>
    </main>
  </div>

</body>
</html>
