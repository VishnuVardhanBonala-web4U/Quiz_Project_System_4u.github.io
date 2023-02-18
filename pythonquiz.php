<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="pythonquiz.css">
    <script>
        var answers = ["C","B","C","D","A","B","B","C","C","B"],
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
    <hr><marquee scrollamount="15%"><h1><u>welcome to  PYTHON  Quiz<u></h1></marquee><hr>

    <ul class="quiz">
    <li>
        <h4> 1) Who developed python programming language?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question0" value="A" required /><span
                        >wick van rossum</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question0" value="B" /><span
                        >rasmus lerdorf</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question0" value="C" /><span
                        >guido van rossum</span
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
        <h4> 2) is python case sensitive when dealing with identifiers ?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question1" value="A" /><span
                        >no</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="B" /><span
                        >yes</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="C" /><span
                        >machine</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="D" /><span
                        >dependent</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 3) which of the following is the correct extension of the python file?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question2" value="A" /><span
                        >.python</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question2" value="B" /><span
                        >.pl</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question2" value="C" /><span
                        >.py</span
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
        <h4> 4) all keywords in python are in?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question3" value="A" /><span
                        >capitalised</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question3" value="B" /><span
                        >lower case</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question3" value="C" /><span
                        >upper case</span
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
        <h4> 5) what will be the value of the following python expression 4+3%5?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question4" value="A" /><span
                        >7</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question4" value="B" /><span
                        >2</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question4" value="C" /><span
                        >4</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question4" value="D" /><span
                        >1</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 6) which keyword is used for function in python?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question5" value="A" /><span
                        >Function</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question5" value="B" /><span
                        >def</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question5" value="C" /><span
                        >fun</span
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
        <h4> 7) single line comments start with?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question6" value="A" /><span
                        >//</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question6" value="B" /><span
                        >#</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question6" value="C" /><span
                        >%</span
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
        <h4> 8) python creates anonymous functions at runtime using a construct called?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question7" value="A" /><span
                        >pi</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question7" value="B" /><span
                        >anonymous</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question7" value="C" /><span
                        >lambda</span
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
        <h4> 9) what does pip stand for in python?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question8" value="A" /><span
                        >pip installs python</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question8" value="B" /><span
                        >pip installs packages</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question8" value="C" /><span
                        >preferred installer program</span
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
        <h4> 10) truncation division operator in python?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question9" value="A" /><span
                        >|</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question9" value="B" /><span
                        >//</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question9" value="C" /><span
                        >&</span
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