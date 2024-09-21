<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Course</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/web.css">
    <style>
        body {
            background-color: #1c0e3c !important;
            color: #ffffff !important;
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

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0px;
            background-color: #251e4b;
            overflow-x: hidden;
            padding-top: 70px;
        }

        .sidebar a {
            padding: 8px 8px 8px 16px;
            text-decoration: none;
            font-size: 18px;
            color: #ffffff;
            display: block;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .main {
            margin-left: 260px;
            padding: 0px 10px;
        }

        h2 {
            margin-top: 20px;
            text-decoration: solid;
            scroll-margin-top: 80px;
            color: #007bff;
        }

        pre code {
            font: inherit;
            font-size:16px !important;
            color: #05c236!important;
            margin-bottom:2px;
        }

        h1 {
            color: white;
        }

        .title {
            font-size: 1.50rem;
        }

        html {
            scroll-behavior: smooth;
        }

        h3 {
            scroll-margin-top: 80px; 
        }
        p{
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
<?php include 'templates/header.php'; ?>

<div class="sidebar">
    <a href="#overview">Python Overview</a>
    <a href="#syntax">What is Syntax?</a>
    <a href="#comments">Python Comments</a>
    <a href="#variables">Python Variables</a>
    <a href="#datatypes">Python Data Types</a>
    <a href="#numbers">Python Numbers</a>
    <a href="#conversion">Data Conversion</a>
    <a href="#casting">Type Casting</a>
    <a href="#operators">Python Operators</a>
    <a href="#booleans">Python Booleans</a>
    <a href="#strings">Python Strings</a>
    <a href="#operation">Operation on Strings</a>
    <a href="#methods">String Methods</a>
    <a href="#format">Format Strings</a>
    <a href="#lists">Python Lists</a>
    <a href="#index">List Indexes</a>
    <a href="#item">Add List Items</a>
    <a href="#tuples">Python Tuples</a>
    <a href="#numbers">Tuple Indexes</a>
</div>

<div class="main">
    <h1 class="text-center">Python Course</h1>

    <br><br>
    <h2 id="overview">Python Overview</h2>
    <h3 class="title">What is Python</h3>
    <ul>
        <li>Python is a dynamically typed, General Purpose Programming Language that supports an object-oriented programming approach as well as a functional programming approach.</li>
        <li>Python is also an interpreted and high-level programming language.</li>
        <li> It was created by Guido Van Rossum in 1989.</li>
    </ul>
    <br>
    <h3 class="title">What is Python used for</h3>
    <ul>
        <li>Python is used in Data Visualization to create plots and graphical representations.</li>
        <li>Python helps in Data Analytics to analyze and understand raw data for insights and trends.</li>
        <li>It is used in AI and Machine Learning to simulate human behavior and to learn from past data without hard coding.</li>
        <li>It is used to create web applications.</li>
        <li>It can be used to handle databases.</li>
        <li>It is used in business and accounting to perform complex mathematical operations along with quantitative and qualitative analysis.</li>
    </ul>
    <br>
    <h2 id="syntax">What is Syntax?</h2>
    <p>In simplest words, Syntax is the arrangement of words and phrases to create well-formed sentences in a language. In the case of a computer language, the syntax is the structural arrangement of comments, variables, numbers, operators, statements, loops, functions, classes, objects, etc. which helps us understand the meaning or semantics of a computer language.</p>
    <div><p>For E.g. a block of code is identified by an ‘indentation’. Have a look at the following code, here print(i) is said to be indented with respect to the link above it. In simple words, indentation is the addition of spaces before the line "print(i)"</p></div>
    <p>
        <strong>Example: </strong>
    </p>
    <pre>
    <code>
       # Example Python code
        def hello_world():
        print("Hello, World!")

        hello_world()
    </code>
    </pre>
    <br>
    <h2 id="comments">Python Comments</h2>
    <p>A comment is a part of the coding file that the programmer does not want to execute, rather the programmer uses it to either explain a block of code or to avoid the execution of a specific part of code while testing.</p>
    <h3 class="title">Single-Line Comments:</h3>
    <p>To write a comment just add a ‘#’ at the start of the line.</p>
    <p>
        <strong>Example:</strong>
    </p>
    <pre>
      <code>
      #This is a 'Single-Line Comment'
      print("This is a print statement.")
      </code>
    </pre>
    <p>
        <strong>Output: </strong>
            This is a print statement.
    </p>
    <br>
    <h2 id="variables">Python Variables</h2>
    <p>Variables are containers that store information that can be manipulated and referenced later by the programmer within the code.
       In python, the programmer does not need to declare the variable type explicitly, we just need to assign the value to the variable.</p>
       <p>
        <strong>Example: </strong>
    </p>
    <pre>
    <code>
    name = "Abhishek"   #type str
    age = 20            #type int
    passed = True       #type bool
    </code>
    </pre>
    <p>It is always advisable to keep variable names descriptive and to follow a set of conventions while creating variables:</p>
    <ul>
        <li>Variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</li>
        <li>Variable name must start with a letter or the underscore character.</li>
        <li>Variables are case sensitive.</li>
        <li>Variable name cannot start with a number.</li>
    </ul>
    <p>
        <strong>Example: </strong>
    </p>
    <pre>
    <code>
    Color = "yellow"    #valid variable name
    cOlor = "red"       #valid variable name
    _color = "blue"     #valid variable name

    5color = "green"    #invalid variable name
    $color = "orange"   #invalid variable name

    </code>
    </pre>
    <br>
    <h3 class="title">Global Variable: </h3>
    <p>A global variable is created in the main body of the code and can be used anywhere within the code. Such a variable has a global scope.</p>
    <p>
        <strong>Example: </strong>
    </p>
    <pre>
    <code>
    icecream = "Vanilla"    #global variable
    def foods():
    vegetable = "Potato"    #local variable
    fruit = "Lichi"         #local variable
    print(vegetable + " is a local variable value.")

    foods()
    print(icecream + " is a global variable value.")
    print(fruit + " is a local variable value.")
    </code>
    </pre>
    <p>
        <strong>output:</strong>
    </p>
    <p>Potato is a local variable value.
       Vanilla is a global variable value.
       Lichi is a local variable value.
    </p>
    <br>
    <h2 id="datatypes">Python Data Types</h2>
    <p>Data type specifies the type of value a variable requires to do various operations without causing an error. By default, python provides the following built-in data types:</p>
    <h3 class="title">Numeric data: int, float, complex</h3>
    <p>int: 3, -8, 0
       float: 7.349, -9.0, 0.0000001
       complex: 6 + 2i
       more on numeric data types in the number chapter.</p>
       <br>
    <h3 class="title">Text data: str</h3>
    <P>str: “Hello World!!!”, “Python Programming”</p>
    <br>
    <h3 class="title">Boolean data:</h3>
    <p>Boolean data consists of values True or False.</p>
    <br>
    <h3 class="title">Sequenced data: list, tuple, range</h3>
    <p>list: A list is an ordered collection of data with elements separated by a comma and enclosed within square brackets. Lists are mutable and can be modified after creation.</p>
    <p>
        <strong>Example: </strong>
    </p>
    <pre>
    <code>
    list1 = [8, 2.3, [-4, 5], ["apple", "banana"]]
    print(list1)
    </code>
    </pre>
    <p>
        <strong>output:</strong>
        <br>
    [8, 2.3, [-4, 5], ['apple', 'banana']]
    </p>
    <br>
    <h2 id="#numbers">Python Numbers</h2>
    <p>In Python, numbers are of the following data types:</p>
    <ul>
        <li>int</li>
        <li>float</li>
        <li>complex</li>
    </ul>
    <h3 class="title">int</h3>
    <p>int is a positive or a negative integer of any length. int should not be a decimal or a fraction.
    <br>
    Example:</p>
    <pre>
        <code>
        int1 = -2345698
        int2 = 0
        int3 = 100548
        print(type(int1))
        print(type(int2))
        print(type(int3))
        </code>
    </pre>
    
    <h3 class="title">float</h3>
    <p>A float is a positive or a negative decimal number. It can be an exponential number or a fraction.
    <br>
    Example:</p>
    <pre>
        <code>
        flt1 = -8.35245     #decimal number
        flt2 = 0.000001     #decimal number
        flt3 = 2.6E44       #exponential number
        flt4 = -6.022e23    #exponential number

        print(type(flt1))
        print(type(flt2))
        print(type(flt3))
        print(type(flt4))
        </code>
    </pre>
    <h3 class="title">complex</h3>
    <p>Complex numbers are a combination of real and imaginary number. They are of the form a + bj, where a is the real part and bj is the imaginary part.
    <br>
    Example:</p>
    <pre>
        <code>
        cmplx1 = 2 + 4j
        cmplx2 = -(3 + 7j)
        cmplx3 = -4.1j
        cmplx4 = 6j

        print(type(cmplx1))
        print(type(cmplx2))
        print(type(cmplx3))
        print(type(cmplx4))
        </code>
    </pre>
    
    <br>
<?php include 'templates/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
