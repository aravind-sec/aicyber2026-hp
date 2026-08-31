<?php
/**
 * Configuration & Constants
 */

// Site Configuration
define('SITE_NAME', 'AICYBER 2026');
define('SITE_TITLE', 'International Conference on AI-Driven Cybersecurity');
define('SITE_URL', 'https://www.saec.ac.in/ieeeaicyber2026');

// Conference Details
define('CONF_DATE_START', 'December 28, 2026');
define('CONF_DATE_END', 'December 29, 2026');
define('CONF_DATE_TIMESTAMP', 'December 28, 2026 09:00:00 GMT+0530');
define('CONF_LOCATION', 'S. A. Engineering College (Autonomous), Chennai 600077, India');

// Contact Information
define('CONF_EMAIL', 'saec@saec.ac.in');
define('CONF_PHONE_1', '+91 89394 35689');
define('CONF_PHONE_2', '+91 80157 37315');

// Paper Submission URL
define('PAPER_SUBMISSION_URL', 'https://cmt3.research.microsoft.com/AICYBER2026');

// Coordinator Information
$coordinators = array(
    array(
        'name' => 'Mr. R. Aravinth Kumar',
        'title' => 'Assistant Professor, CSE (Cyber Security), SAEC',
        'phone' => '+91 89394 35689'
    ),
    array(
        'name' => 'Ms. B. Nagasri',
        'title' => 'Assistant Professor, CSE (Cyber Security), SAEC',
        'phone' => '+91 80157 37315'
    )
);

// Sponsors and Partners
$sponsors = array(
    array(
        'name' => 'IEEE',
        'url' => 'https://www.ieee.org',
        'image' => 'images/IEEE.png'
    ),
    array(
        'name' => 'IEEE Madras Section',
        'url' => 'https://ieeemadras.org.in',
        'image' => 'images/IEEE_MS.png'
    ),
    array(
        'name' => 'IEEE Computer Society Madras Chapter',
        'url' => 'https://www.computer.org',
        'image' => 'images/IEEE_CS.png'
    ),
    array(
        'name' => 'IEEE Professional Communication Society Madras Chapter',
        'url' => 'https://procomm.ieee.org',
        'image' => 'images/IEEE_PC.png'
    ),
    array(
        'name' => 'IEEE Circuits & Systems Society Madras Chapter',
        'url' => 'https://ieee-cas.org',
        'image' => 'images/CAS.png'
    ),
    array(
        'name' => 'Department of CSE (Cyber Security), SAEC',
        'url' => 'https://www.saec.ac.in/cse-cyber-security.php',
        'image' => 'images/SAEC.png'
    )
);

// Track Information
$tracks = array(
    array(
        'number' => '01',
        'title' => 'AI in Cyber Defense',
        'topics' => array(
            'Deep Learning for Intrusion Detection',
            'AI-Based Threat Prediction & Prevention',
            'Zero-Day Attack Detection using AI',
            'Adversarial Machine Learning in Security'
        )
    ),
    array(
        'number' => '02',
        'title' => 'Malware & Forensics',
        'topics' => array(
            'AI for Digital Forensics & Cybercrime Analysis',
            'Malware Detection & Reverse Engineering with ML',
            'Real-time Phishing & Spam Classification'
        )
    ),
    array(
        'number' => '03',
        'title' => 'Ethical Hacking & Pen Testing',
        'topics' => array(
            'AI-Augmented Vulnerability Scanning',
            'Simulation of Cyber-Attacks using RL',
            'Penetration Testing Frameworks using AI'
        )
    ),
    array(
        'number' => '04',
        'title' => 'Secure Infrastructure & IoT',
        'topics' => array(
            'AI-Driven Security for Edge, Cloud & IoT',
            'AI in Critical Infrastructure Security',
            'Smart Grid / Smart City Cybersecurity'
        )
    ),
    array(
        'number' => '05',
        'title' => 'Trustworthy & Ethical AI',
        'topics' => array(
            'Bias & Fairness in AI for Security',
            'Secure Federated Learning',
            'Privacy-Preserving AI Models',
            'Policy Implications of AI in Cybersecurity'
        )
    ),
    array(
        'number' => '06',
        'title' => 'Domain-Specific Applications',
        'topics' => array(
            'AI Security in Healthcare, Finance & Education',
            'Transportation & Autonomous Vehicles',
            'Cyber Risk Analytics using Big Data & AI'
        )
    )
);

// Conference Highlights
$highlights = array(
    'Intelligent Intrusion Detection Systems',
    'AI for Real-Time Threat Analytics',
    'Machine Learning in Malware Classification',
    'Federated Learning & Data Privacy',
    'AI Security across Cloud, Edge & IoT',
    'Ethical & Explainable AI for Trust'
);

?>