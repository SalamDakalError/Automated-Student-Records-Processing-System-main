<?php
// Handle approve/reject actions for files
session_start();
require_once __DIR__ . '/../Login/db.php';
header('Content-Type: application/json');

$action = isset($_POST['action']) ? $_POST['action'] : '';
$fileId = isset($_POST['file_id']) ? intval($_POST['file_id']) : 0;

if (!$fileId || !in_array($action, ['approve', 'reject'])) {
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
    exit;
}

try {
    if ($action === 'approve') {
        $stmt = $pdo->prepare('UPDATE teacher_files SET status = :status, approve_date = NOW() WHERE id = :id');
        $stmt->execute([':status' => 'approved', ':id' => $fileId]);
        echo json_encode(['success' => true, 'action' => 'approve', 'newStatus' => 'Approved', 'statusClass' => 'approve']);
    } elseif ($action === 'reject') {
        $stmt = $pdo->prepare('UPDATE teacher_files SET status = :status WHERE id = :id');
        $stmt->execute([':status' => 'rejected', ':id' => $fileId]);
        echo json_encode(['success' => true, 'action' => 'reject', 'newStatus' => 'Rejected', 'statusClass' => 'reject']);
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}

?>
