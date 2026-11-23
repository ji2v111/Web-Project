-- Roadmaps database (SQLite)
-- To rebuild the database file, run:  sqlite3 roadmaps.db < roadmaps.sql

DROP TABLE IF EXISTS courses;

CREATE TABLE courses (
    id       INTEGER PRIMARY KEY,
    roadmap  TEXT,     -- it / cs / data-science / cyber-security
    step     INTEGER,  -- order in the path: 1 = beginner ... last = advanced
    title    TEXT,
    provider TEXT,
    level    TEXT,
    link     TEXT      -- official course page
);

-- IT
INSERT INTO courses (roadmap, step, title, provider, level, link) VALUES
('it', 1, 'Google IT Support Professional Certificate', 'Google / Coursera', 'Beginner', 'https://www.coursera.org/professional-certificates/google-it-support'),
('it', 2, 'The Bits and Bytes of Computer Networking', 'Google / Coursera', 'Beginner', 'https://www.coursera.org/learn/computer-networking'),
('it', 3, 'Google IT Automation with Python', 'Google / Coursera', 'Intermediate', 'https://www.coursera.org/professional-certificates/google-it-automation'),
('it', 4, 'Google Cloud Fundamentals: Core Infrastructure', 'Google Cloud / Coursera', 'Intermediate', 'https://www.coursera.org/learn/gcp-fundamentals'),
('it', 5, 'Cybersecurity Assessment: CompTIA Security+ & CySA+', 'Coursera', 'Advanced', 'https://www.coursera.org/learn/cybersecurity-assessment-comptia-security-cysa');

-- Computer Science
INSERT INTO courses (roadmap, step, title, provider, level, link) VALUES
('cs', 1, 'CS50x: Introduction to Computer Science', 'Harvard', 'Beginner', 'https://cs50.harvard.edu/x/'),
('cs', 2, 'Python for Everybody', 'University of Michigan / Coursera', 'Beginner', 'https://www.coursera.org/specializations/python'),
('cs', 3, 'Build a Modern Computer from First Principles (Nand to Tetris)', 'Hebrew University / Coursera', 'Intermediate', 'https://www.coursera.org/learn/build-a-computer'),
('cs', 4, 'Algorithms, Part I', 'Princeton / Coursera', 'Intermediate', 'https://www.coursera.org/learn/algorithms-part1'),
('cs', 5, 'Algorithms, Part II', 'Princeton / Coursera', 'Advanced', 'https://www.coursera.org/learn/algorithms-part2'),
('cs', 6, 'CS50 AI: Introduction to Artificial Intelligence with Python', 'Harvard', 'Advanced', 'https://cs50.harvard.edu/ai/');

-- Data Science
INSERT INTO courses (roadmap, step, title, provider, level, link) VALUES
('data-science', 1, 'Foundations: Data, Data, Everywhere', 'Google / Coursera', 'Beginner', 'https://www.coursera.org/learn/foundations-data'),
('data-science', 2, 'IBM Data Science Professional Certificate', 'IBM / Coursera', 'Beginner', 'https://www.coursera.org/professional-certificates/ibm-data-science'),
('data-science', 3, 'Applied Data Science with Python', 'University of Michigan / Coursera', 'Intermediate', 'https://www.coursera.org/specializations/data-science-python'),
('data-science', 4, 'Mathematics for Machine Learning', 'Imperial College London / Coursera', 'Intermediate', 'https://www.coursera.org/specializations/mathematics-machine-learning'),
('data-science', 5, 'Machine Learning Specialization', 'Stanford & DeepLearning.AI / Coursera', 'Advanced', 'https://www.coursera.org/specializations/machine-learning-introduction'),
('data-science', 6, 'Deep Learning Specialization', 'DeepLearning.AI / Coursera', 'Advanced', 'https://www.coursera.org/specializations/deep-learning');

-- Cyber Security
INSERT INTO courses (roadmap, step, title, provider, level, link) VALUES
('cyber-security', 1, 'Introduction to Cybersecurity', 'Cisco Networking Academy', 'Beginner', 'https://www.netacad.com/courses/introduction-to-cybersecurity'),
('cyber-security', 2, 'Google Cybersecurity Professional Certificate', 'Google / Coursera', 'Beginner', 'https://www.coursera.org/professional-certificates/google-cybersecurity'),
('cyber-security', 3, 'IBM Cybersecurity Analyst Professional Certificate', 'IBM / Coursera', 'Intermediate', 'https://www.coursera.org/professional-certificates/ibm-cybersecurity-analyst'),
('cyber-security', 4, 'Cybersecurity Assessment: CompTIA Security+ & CySA+', 'Coursera', 'Advanced', 'https://www.coursera.org/learn/cybersecurity-assessment-comptia-security-cysa'),
('cyber-security', 5, 'Cryptography I', 'Stanford / Coursera', 'Advanced', 'https://www.coursera.org/learn/crypto');
