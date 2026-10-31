<?php
header('Content-Type: application/json; charset=utf-8');

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed.']);
    exit;
}

// Handle both JSON and traditional URL-encoded POST
$rawInput = file_get_contents('php://input');
$data = json_decode($rawInput, true);

if (!is_array($data)) {
    $data = $_POST;
}

$name = trim($data['name'] ?? '');
$email = trim($data['email'] ?? '');
$phone = trim($data['phone'] ?? '');
$service = trim($data['service'] ?? 'General Inquiry');
$budget = trim($data['budget'] ?? 'Not Specified');
$message = trim($data['message'] ?? '');

// Validation
if (empty($name)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'error' => 'Please provide your name.']);
    exit;
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'error' => 'Please provide a valid email address.']);
    exit;
}

if (empty($message)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'error' => 'Please provide a brief description of your project or vision.']);
    exit;
}

$inquiry = [
    'id' => 'inq_' . uniqid(),
    'name' => htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
    'email' => filter_var($email, FILTER_SANITIZE_EMAIL),
    'phone' => htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'),
    'service' => htmlspecialchars($service, ENT_QUOTES, 'UTF-8'),
    'budget' => htmlspecialchars($budget, ENT_QUOTES, 'UTF-8'),
    'message' => htmlspecialchars($message, ENT_QUOTES, 'UTF-8'),
    'ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN',
    'created_at' => date('c')
];

// In serverless environments (e.g. Vercel), the project filesystem is read-only.
// We write to standard storage locally, or fallback gracefully to sys_get_temp_dir().
$storageDir = __DIR__ . '/../storage/messages';
$targetPath = null;

if (!@is_dir($storageDir)) {
    @mkdir($storageDir, 0755, true);
}

if (@is_dir($storageDir) && @is_writable($storageDir)) {
    $targetPath = $storageDir . '/inquiries.json';
} else {
    $tempDir = sys_get_temp_dir() . '/bh_storage';
    if (!@is_dir($tempDir)) {
        @mkdir($tempDir, 0755, true);
    }
    if (@is_dir($tempDir) && @is_writable($tempDir)) {
        $targetPath = $tempDir . '/inquiries.json';
    }
}

if ($targetPath) {
    $existing = [];
    if (@file_exists($targetPath)) {
        $content = @file_get_contents($targetPath);
        $decoded = json_decode($content, true);
        if (is_array($decoded)) {
            $existing = $decoded;
        }
    }
    array_unshift($existing, $inquiry);
    @file_put_contents($targetPath, json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
}

http_response_code(200);
echo json_encode([
    'success' => true,
    'message' => 'Thank you! Your strategic brief has reached the Blue Hour Studio team. We will review and connect with you within 24 hours.',
    'inquiry_id' => $inquiry['id']
]);
