-- Customers
INSERT IGNORE INTO customers (id, name, email, password_hash, total_hours, remaining_hours)
VALUES
  (1, 'Alice Example', 'alice@example.com', 'hashedpass1', 10, 10),
  (2, 'Bob Example', 'bob@example.com', 'hashedpass2', 20, 15);

-- Courses
INSERT IGNORE INTO courses (id, title, description, duration_hours, max_participants)
VALUES
  (1, 'Webdesign Basics', 'Einsteigerkurs zu HTML & CSS', 2, 10),
  (2, 'Vue.js Deep Dive', 'Fortgeschrittenenkurs für Vue', 3, 8);

-- Bookings
INSERT IGNORE INTO bookings (id, customer_id, course_id, booked_date, booked_hours)
VALUES
  (1, 1, 1, '2025-05-15', 2),
  (2, 2, 2, '2025-05-16', 3);

-- Users
INSERT IGNORE INTO users (id, email, password)
VALUES (1, 'user@example.com', '$2y$12$itNFO5EpURXFXFocIsO43uQT5b8DvvBAiFaWA97lq4OEUE1y7pYKe'); -- test1234 bcrypted

