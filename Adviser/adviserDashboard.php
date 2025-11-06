<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adviser Dashboard</title>
  <link rel="stylesheet" href="styleAdviserDashboard.css">
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
        <a href="adviserDashboard.php" class="active">
          <img src="dashboard.png" alt="Dashboard Icon">
          Dashboard
        </a>
        <a href="student_list.php">
          <img src="User.png" alt="Student Icon">
          Student
        </a>
        <a href="advisory.php">
          <img src="class.png" alt="Advisory Icon">
          Advisory
        </a>
        <a href="files.php">
          <img src="google-docs.png" alt="Files Icon">
          Files
        </a>
      </div>

      <!-- ===== SIDEBAR FOOTER ===== -->
      <div class="sidebar-footer">
        <button class="signout" id="signoutBtn">
          <img src="out.png" alt="Logout Icon"> Sign Out
        </button>
      </div>
    </aside>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="main-content">
      <section class="content-box active" id="dashboard">
        <div class="section-header">
          <h2>Dashboard</h2>
          <span style="color: #666; font-size: 14px;">(Overview of Advisory & Files)</span>
        </div>

        <!-- Summary Cards -->
        <div style="display: flex; gap: 20px; margin-bottom: 30px; margin-top: 20px;">
          <div class="summary-card">
            <h3>Total Students</h3>
            <p id="studentCount">—</p>
          </div>
          <div class="summary-card">
            <h3>With Honors</h3>
            <p id="honorstudent">—</p>
          </div>
          <div class="summary-card">
            <h3>Total Files</h3>
            <p id="fileCount">—</p>
          </div>
        </div>

        <!-- File Table -->
        <div>
          <h3 style="margin-bottom: 10px;">Recent Files</h3>
          <table class="data-table">
            <thead>
              <tr>
                <th>Filename</th>
                <th>Submitted Date</th>
                <th>Status</th>
                <th>Approved Date</th>
              </tr>
            </thead>
            <tbody id="fileTableBody">
              <tr>
                <td colspan="4" style="text-align: center; color: #888;">No data available</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </main>
  </div>

  <!-- ===== JAVASCRIPT ===== -->
  <script src="scriptAdviser.js"></script>
</body>
</html>
