<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="javaquiz.css">
    <script>
        var answers = ["C","A","B","B","A","B","A","C","B","A"],
    tot = answers.length;
function getCheckedValue(radioName) {
    var radios = document.getElementsByName(radioName);
    for (var y = 0; y < radios.length; y++)
        if (radios[y].checked) return radios[y].value;
}
function getScore() {
    var score = 0;
    for (var i = 0; i < tot; i++)
        if (getCheckedValue("question" + i) === answers[i]) score += 1;
    return score;
}
function returnScore() {
    document.getElementById("myresults").innerHTML =
        "Your score is " + getScore() + "/" + tot;
    if (getScore() > 9) {
        console.log("Bravo");
    }
}
</script>
</head>
<body>
    <hr><marquee scrollamount="15%"><h1><u>welcome to  JAVA language Quiz<u></h1></marquee><hr>

    <ul class="quiz">
    <li>
        <h4> 1) Number of primitive data types in java are?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question0" value="A" required /><span
                        >6</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question0" value="B" /><span
                        >7</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question0" value="C" /><span
                        >8</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question0" value="D" /><span
                        >None</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 2) what is the size of float and double in java?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question1" value="A" /><span
                        >32 and 64</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="B" /><span
                        >32 and 32</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="C" /><span
                        >64 and 64</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="D" /><span
                        >64 and 32</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 3) Automatic type conversion is possible in which of the possible cases?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question2" value="A" /><span
                        >byte to int</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question2" value="B" /><span
                        >int to long</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question2" value="C" /><span
                        >long to int</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question2" value="D" /><span
                        >All of the above</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 4) Select the valid statement?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question3" value="A" /><span
                        >char[] ch=new char(4)</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question3" value="B" /><span
                        >char[] ch=new char[5]</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question3" value="C" /><span
                        >char[] ch=new char()</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question3" value="D" /><span
                        >none</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 5) when an array is passed to method,what does the method recieve?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question4" value="A" /><span
                        >reference of the array</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question4" value="B" /><span
                        >a copy of the array</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question4" value="C" /><span
                        >length of the array</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question4" value="D" /><span
                        >copy of the first element</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 6) Arrays in java are-?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question5" value="A" /><span
                        >object references</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question5" value="B" /><span
                        >objects</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question5" value="C" /><span
                        >primitive data type</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question5" value="D" /><span
                        >none</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 7) when is the object created with new keyword?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question6" value="A" /><span
                        >at run time</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question6" value="B" /><span
                        >at compile  time</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question6" value="C" /><span
                        >depends on the code</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question6" value="D" /><span
                        >none</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 8) Identify the corrected definition of a package?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question7" value="A" /><span
                        >colection of editing tools</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question7" value="B" /><span
                        >collection of classes</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question7" value="C" /><span
                        >collection of classes and interfaces</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question7" value="D" /><span
                        >none</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 9) identify the keyword among the following that makes a variable to a class,rather than being defined for each instance of the class?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question8" value="A" /><span
                        >final</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question8" value="B" /><span
                        >static</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question8" value="C" /><span
                        >volatile</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question8" value="D" /><span
                        >none</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 10) in which of the following tostring() method defined?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question9" value="A" /><span
                        >java.lang.object</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question9" value="B" /><span
                        >java.lang.string</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question9" value="C" /><span
                        >none</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question9" value="D" /><span
                        >all</span
                    ></label
                >
            </li>
        </ul>
    </li>
</ul>
<button class="view-results" onclick="returnScore()">View Results</button>
<span id="myresults" class="my-results">My results will appear here</span>
</body>
</html>