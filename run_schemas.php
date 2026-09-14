<?php
$host = '127.0.0.1';
$db = 'windows';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Enquiries table additions
    $pdo->exec("ALTER TABLE enquiries 
                ADD COLUMN read_status BOOLEAN DEFAULT 0 AFTER status,
                ADD COLUMN reply_status VARCHAR(50) DEFAULT 'Not Replied' AFTER read_status,
                ADD COLUMN replied_at TIMESTAMP NULL AFTER reply_status,
                ADD COLUMN admin_notes TEXT NULL AFTER replied_at");
    echo "enquiries updated\n";

    // Inquiry replies
    $pdo->exec("CREATE TABLE IF NOT EXISTS inquiry_replies (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        enquiry_id BIGINT UNSIGNED NOT NULL,
        admin_id BIGINT UNSIGNED NULL,
        message TEXT NOT NULL,
        recipient_email VARCHAR(255) NOT NULL,
        subject VARCHAR(255) NOT NULL,
        status VARCHAR(50) DEFAULT 'Sent',
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL,
        FOREIGN KEY (enquiry_id) REFERENCES enquiries(id) ON DELETE CASCADE,
        FOREIGN KEY (admin_id) REFERENCES users(id) ON DELETE SET NULL
    )");
    echo "inquiry_replies created\n";

    // Delivery methods
    $pdo->exec("CREATE TABLE IF NOT EXISTS delivery_methods (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        description TEXT NULL,
        base_price DECIMAL(10,2) DEFAULT 0.00,
        estimated_lead_time VARCHAR(255) NULL,
        is_active BOOLEAN DEFAULT 1,
        sort_order INT DEFAULT 0,
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL
    )");
    echo "delivery_methods created\n";

    // Delivery areas
    $pdo->exec("CREATE TABLE IF NOT EXISTS delivery_areas (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        description TEXT NULL,
        postcode_rule VARCHAR(255) NULL,
        is_active BOOLEAN DEFAULT 1,
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL
    )");
    echo "delivery_areas created\n";

    // Delivery charges
    $pdo->exec("CREATE TABLE IF NOT EXISTS delivery_charges (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        delivery_area_id BIGINT UNSIGNED NOT NULL,
        delivery_method_id BIGINT UNSIGNED NOT NULL,
        charge DECIMAL(10,2) NOT NULL,
        is_active BOOLEAN DEFAULT 1,
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL,
        FOREIGN KEY (delivery_area_id) REFERENCES delivery_areas(id) ON DELETE CASCADE,
        FOREIGN KEY (delivery_method_id) REFERENCES delivery_methods(id) ON DELETE CASCADE
    )");
    echo "delivery_charges created\n";

    // Delivery lead times
    $pdo->exec("CREATE TABLE IF NOT EXISTS delivery_lead_times (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        product_type VARCHAR(255) NOT NULL,
        delivery_time VARCHAR(255) NULL,
        collection_time VARCHAR(255) NULL,
        is_active BOOLEAN DEFAULT 1,
        sort_order INT DEFAULT 0,
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL
    )");
    echo "delivery_lead_times created\n";

    // Delivery contents
    $pdo->exec("CREATE TABLE IF NOT EXISTS delivery_contents (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        section_key VARCHAR(255) NOT NULL UNIQUE,
        title VARCHAR(255) NULL,
        content TEXT NULL,
        is_active BOOLEAN DEFAULT 1,
        sort_order INT DEFAULT 0,
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL
    )");
    echo "delivery_contents created\n";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
