<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Dashboard</title>
  <link rel="stylesheet" href="teacher_style.css">
</head>
<body>
  <!-- ===== HEADER ===== -->
  <header class="header">
    <img src="OIP.png" alt="Logo">
    <h1>Teacher</h1>
  </header>

  <!-- ===== DASHBOARD CONTAINER ===== -->
  <div class="dashboard-container">
    <!-- ===== SIDEBAR ===== -->
    <aside class="sidebar">
      <div class="menu">
        <a href="#" class="active" data-target="dashboard"><img src="dashboard.png" alt="">Dashboard</a>
        <a href="#" data-target="students"><img src="User.png" alt="">Students</a>
        <a href="#" data-target="files"><img src="google-docs.png" alt="">Files</a>
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
      <!-- Dashboard Section -->
      <section class="content-box active" id="dashboard">
        <div class="section-header">
          <span style="color: #666;">(Overview of Classes)</span>
        </div>

        <!-- Summary Cards -->
        <div style="display: flex; gap: 20px; margin-bottom: 30px;">
          <div class="summary-card">
            <h3>Total Enrolled Students</h3>
            <p id="studentCount">—</p>
          </div>
          <div class="summary-card">
            <h3>Total Files</h3>
            <p id="fileCount">—</p>
          </div>
        </div>

        <!-- File Table -->
        <div>
          <h3 style="margin-bottom: 10px;">Files</h3>
          <table class="data-table">
            <thead>
              <tr>
                <th>Filename</th>
                <th>Submitted Date</th>
                <th>Status</th>
                <th>Approve Date</th>
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

      <!-- Students Section -->
      <section class="content-box" id="students">
        <h2>Students</h2>
        <p>List of students and their details will appear here.</p>
      </section>

      <!-- Files Section -->
      <section class="content-box" id="files">
        <h2>Files</h2>
        <p>Uploaded files and related management will appear here.</p>
      </section>
    </main>
  </div>

  <!-- ===== JAVASCRIPT FILE LINK ===== -->
  <script src="teacher_script.js"></script>
</body>
</html>
