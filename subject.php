<?php
session_start();

$subjectsData = [
    'physics1' => [
        'title' => 'Physics 1st Paper',
        'chapters' => [
            ['title' => 'Chapter 1: Physical World & Measurement', 'videoUrl' => 'Images/phy1.1.mp4'],
            ['title' => 'Chapter 2: Vector', 'videoUrl' => 'path/to/physics1/chapter2.mp4'],
            ['title' => 'Chapter 3: Dynamics', 'videoUrl' => 'path/to/physics1/chapter2.mp4'],
            ['title' => 'Chapter 4: Newtonian Mechanics', 'videoUrl' => 'path/to/physics1/chapter2.mp4'],
            ['title' => 'Chapter 5: Work,Energy & Power', 'videoUrl' => 'path/to/physics1/chapter2.mp4'],
            ['title' => 'Chapter 6: Gravitation & Gravity', 'videoUrl' => 'path/to/physics1/chapter2.mp4'],
            ['title' => 'Chapter 7: Structural Properties of Matter', 'videoUrl' => 'path/to/physics1/chapter2.mp4'],
            ['title' => 'Chapter 8: Periodic Motion', 'videoUrl' => 'path/to/physics1/chapter2.mp4'],
            ['title' => 'Chapter 9: Waves', 'videoUrl' => 'path/to/physics1/chapter2.mp4'],
            ['title' => 'Chapter 10: Ideal Gas & Kinetic Theory of Gas', 'videoUrl' => 'path/to/physics1/chapter2.mp4'],
        ]
    ],
    'physics2' => [
        'title' => 'Physics 2nd Paper',
        'chapters' => [
            ['title' => 'Chapter 1: Thermodynamics', 'videoUrl' => 'path/to/physics2/chapter1.mp4'],
            ['title' => 'Chapter 2: Electrostatics', 'videoUrl' => 'path/to/physics2/chapter2.mp4'],
            ['title' => 'Chapter 3: Current Electricity', 'videoUrl' => 'path/to/physics2/chapter2.mp4'],
            ['title' => 'Chapter 4: Magnetic Effects of Current & Magnetism', 'videoUrl' => 'path/to/physics2/chapter2.mp4'],
            ['title' => 'Chapter 5: Electromagnetic Induction & Alternating Current', 'videoUrl' => 'path/to/physics2/chapter2.mp4'],
            ['title' => 'Chapter 6: Geometrical Optics', 'videoUrl' => 'path/to/physics2/chapter2.mp4'],
            ['title' => 'Chapter 7: Physical Optics', 'videoUrl' => 'path/to/physics2/chapter2.mp4'],
            ['title' => 'Chapter 8: Introduction of Modern Physics', 'videoUrl' => 'path/to/physics2/chapter2.mp4'],
            ['title' => 'Chapter 9: Atomic Model & Nuclear Physics', 'videoUrl' => 'path/to/physics2/chapter2.mp4'],
            ['title' => 'Chapter 10: Semiconductor & Electronics', 'videoUrl' => 'path/to/physics2/chapter2.mp4'],
            ['title' => 'Chapter 11: Astronomy', 'videoUrl' => 'path/to/physics2/chapter2.mp4'],
        ]
    ],
    'chemistry1' => [
        'title' => 'Chemistry 1st Paper',
        'chapters' => [
            ['title' => 'Chapter 1: Safe use of Laboratory', 'videoUrl' => 'path/to/chemistry1/chapter1.mp4'],
            ['title' => 'Chapter 2: Qualitative Chemistry', 'videoUrl' => 'path/to/chemistry1/chapter2.mp4'],
            ['title' => 'Chapter 3: Periodic Properties & Bonding in Elements', 'videoUrl' => 'path/to/chemistry1/chapter2.mp4'],
            ['title' => 'Chapter 4: Chemical Change', 'videoUrl' => 'path/to/chemistry1/chapter2.mp4'],
            ['title' => 'Chapter 5: Vocational Chemistry', 'videoUrl' => 'path/to/chemistry1/chapter2.mp4'],
        ]
    ],
    'chemistry2' => [
        'title' => 'Chemistry 2nd Paper',
        'chapters' => [
            ['title' => 'Chapter 1: Environmental Chemistry', 'videoUrl' => 'path/to/chemistry1/chapter1.mp4'],
            ['title' => 'Chapter 2: Organic Chemistry', 'videoUrl' => 'path/to/chemistry1/chapter2.mp4'],
            ['title' => 'Chapter 3: Stoichiometric Chemistry', 'videoUrl' => 'path/to/chemistry1/chapter2.mp4'],
            ['title' => 'Chapter 4: Electro Chemistry', 'videoUrl' => 'path/to/chemistry1/chapter2.mp4'],
            ['title' => 'Chapter 5: Economic Chemistry', 'videoUrl' => 'path/to/chemistry1/chapter2.mp4'],
        ]
    ],
    'bangla1' => [
        'title' => 'Bangla 1st Paper',
        'chapters' => [
            ['title' => 'Chapter 1: xyz', 'videoUrl' => 'path/to/bangla1/chapter1.mp4'],
            ['title' => 'Chapter 2: xyz', 'videoUrl' => 'path/to/bangla1/chapter2.mp4'],
           
        ]
    ],
    'bangla2' => [
        'title' => 'Bangla 2nd Paper',
        'chapters' => [
            ['title' => 'Chapter 1: xyz', 'videoUrl' => 'path/to/bangla2/chapter1.mp4'],
            ['title' => 'Chapter 2: xyz', 'videoUrl' => 'path/to/bangla2/chapter2.mp4'],
            
        ]
    ],
    'english1' => [
        'title' => 'English 1st Paper',
        'chapters' => [
            ['title' => 'Chapter 1: xyz', 'videoUrl' => 'path/to/english1/chapter1.mp4'],
            ['title' => 'Chapter 2: xyz', 'videoUrl' => 'path/to/english1/chapter2.mp4'],
        ]
    ],
    'english2' => [
        'title' => 'English 2nd Paper',
        'chapters' => [
            ['title' => 'Chapter 1:xyz', 'videoUrl' => 'path/to/english2/chapter1.mp4'],
            ['title' => 'Chapter 2:xyz', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
        ]
    ],
    'highermath1' => [
        'title' => 'Higer Math 1st Paper',
        'chapters' => [
            ['title' => 'Chapter 1: Matrices & Determinants', 'videoUrl' => 'path/to/english2/chapter1.mp4'],
            ['title' => 'Chapter 2: Vectors', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 3: Straight Lines', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 4: The Circle', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 5: Permutations & Combinations', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 6: Trigonometric Rations', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 7: Trigonometric Rations & Associated Angles', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 8: Function & Graph of Function', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 9: Differentiation', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 10: Integration', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
        ]
    ],
    'highermath2' => [
        'title' => 'Higher Math 2nd Paper',
        'chapters' => [
            ['title' => 'Chapter 1: Real Number & Inequalities', 'videoUrl' => 'path/to/english2/chapter1.mp4'],
            ['title' => 'Chapter 2: Linear Programming', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 3: Complex Numbers', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 4: Polynomial & Polynomial Equations', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 5: Binomial Expansion', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 6: Conics', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 7: Inverse Trigonometric Functions & Trigonometric Equations', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 8: Statics', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 9: Motion of Particles in a Plane', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 10: Measures of Dispersions and Probability', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
        ]
    ],
    'biology1' => [
        'title' => 'Biology 1st Paper',
        'chapters' => [
            ['title' => 'Chapter 1: Cell & Structure', 'videoUrl' => 'path/to/english2/chapter1.mp4'],
            ['title' => 'Chapter 2: Cell Division', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 3: Cell Chemistry', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 4: Microbe', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 5: Algae & Fungi', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 6: Bryophyta & Pteridophyta', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 7: Gymnosperms & Angiosperms', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 8: Tissue & Tissue System', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 9: Plant Physiology', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 10: Plant Reproduction', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 11: Biotechnology', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 12: Environment Distribution & Conservation of Living Organism', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
           
        ]
    ],
    'biology2' => [
        'title' => 'Biology 2nd Paper',
        'chapters' => [
            ['title' => 'Chapter 1: Animal Diversity & Classification', 'videoUrl' => 'path/to/english2/chapter1.mp4'],
            ['title' => 'Chapter 2: Animal Identity', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 3: Human Physiology', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 4: Blood & Circulation', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 5: Respiration & Breathing', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 6: Wastes & Elimination', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 7: Locomotion & Movement', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 8: Coordination & Control', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 9: Continuation & Human Life', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 10: Protection of Human Body', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 11: Genetics & Evolution', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            ['title' => 'Chapter 12: Animal Behavior', 'videoUrl' => 'path/to/english2/chapter2.mp4'],
            
        ]
    ],
    'ict' => [
        'title' => 'ICT',
        'chapters' => [
            ['title' => 'Chapter 1: Introduction to ICT', 'videoUrl' => 'path/to/ict/chapter1.mp4'],
            ['title' => 'Chapter 2: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
        ]
    ],
    'chemistry' => [
        'title' => 'Chemistry',
        'chapters' => [
            ['title' => 'Chapter 1: Introduction to ICT', 'videoUrl' => 'path/to/ict/chapter1.mp4'],
            ['title' => 'Chapter 2: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
        ]
    ],
    'physics' => [
        'title' => 'Physics',
        'chapters' => [
            ['title' => 'Chapter 1: Introduction to Physics', 'videoUrl' => 'path/to/ict/chapter1.mp4'],
            ['title' => 'Chapter 2: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
            ['title' => 'Chapter 3: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
            ['title' => 'Chapter 4: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
            ['title' => 'Chapter 5: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
            ['title' => 'Chapter 6: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
            ['title' => 'Chapter 7: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
            ['title' => 'Chapter 8: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
            ['title' => 'Chapter 9: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
            ['title' => 'Chapter 10: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
            ['title' => 'Chapter 11: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
            ['title' => 'Chapter 12: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
        ]
    ],
    'highermath' => [
        'title' => 'Higher Math',
        'chapters' => [
            ['title' => 'Chapter 1: Introduction to ICT', 'videoUrl' => 'path/to/ict/chapter1.mp4'],
            ['title' => 'Chapter 2: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
        ]
    ],
    'generalmath' => [
        'title' => 'General Math',
        'chapters' => [
            ['title' => 'Chapter 1: Introduction to ICT', 'videoUrl' => 'path/to/ict/chapter1.mp4'],
            ['title' => 'Chapter 2: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
        ]
    ],
    'biology' => [
        'title' => 'Biology',
        'chapters' => [
            ['title' => 'Chapter 1: Introduction to ICT', 'videoUrl' => 'path/to/ict/chapter1.mp4'],
            ['title' => 'Chapter 2: ICT Applications', 'videoUrl' => 'path/to/ict/chapter2.mp4'],
        ]
    ],
];

$subject = isset($_GET['subject']) ? $_GET['subject'] : null;
if (!$subject || !isset($subjectsData[$subject])) {
    die('Subject not found.');
}

$subjectData = $subjectsData[$subject];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $subjectData['title']; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1c0e3c !important; 
            color: #ffffff;
        }

        .navbar {
         margin-bottom: 20px;
         background-color: #2d1a54; 
         border-bottom: 2px solid #0056b3; 
        }

        .navbar .navbar-brand {
         color: #fdfefe !important; 
         font-weight: bold;
        }

        .navbar-nav .nav-link {
          color: #fff !important; 
        }

        .navbar-nav .nav-link:hover {
          color: #ffdd57; 
        }

        .navbar-toggler {
          border-color: #fff; 
        }

        .chapter-list {
            margin-top: 20px;
        }
        .chapter {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: #d7d4f1;
            margin-bottom: 5px;
            border-radius: 5px;
        }
        .chapter button {
            background-color:#472097;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
        }
        .video-container {
            display: none;
            margin-top: 20px;
        }
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: -250px;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            z-index: 1;
        }
        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            color: #f1f1f1;
        }
        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
        }
        #main {
            transition: margin-left .5s;
            padding: 16px;
        }
        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: blue;
            color: white;
            padding: 10px 15px;
            border: none;
        }
        .openbtn:hover {
            background-color: #444;
        }
        .sidebar-open {
            left: 0;
        }
        .video-container video,
        .video-container iframe {
            width: 100%;
            height: 500px;

        }
    </style>
</head>
<body>
    <?php include 'templates/header.php'; ?>

    <div class="container">
        <h1 class="text-center my-4 text-white"><?php echo $subjectData['title']; ?></h1>

        <div id="chapter-list" class="chapter-list">
            <h3 class="text-white">Chapters</h3>
            <div id="chapters">
                <?php foreach ($subjectData['chapters'] as $chapter): ?>
                    <div class="chapter">
                        <span><?php echo $chapter['title']; ?></span>
                        <button onclick="playVideo('<?php echo $chapter['videoUrl']; ?>')">Play</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div id="video-container" class="video-container">
            <h3 class="text-white">Video</h3>
            <video id="video-player" controls style="display: none;">
                <source src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <script>
        function playVideo(videoUrl) {
            const videoPlayer = document.getElementById('video-player');
            const videoContainer = document.getElementById('video-container');

            videoPlayer.src = videoUrl;  
            videoPlayer.style.display = 'block';
            videoPlayer.play();

            videoContainer.style.display = 'block';

            videoContainer.scrollIntoView({ behavior: 'smooth' });
        }
    </script>

   <br><br>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
