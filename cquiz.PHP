<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="cquiz.css">
    <script>
        var answers = ["C", "B", "D","A","C","D","D","D","C","A"],
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
    <hr><marquee scrollamount="15%"><h1><u>welcome to  C language Quiz<u></h1></marquee><hr>
    <ul class="quiz">
    <li>
        <h4> 1) Who is the father of C language?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question0" value="A" /><span
                        >steve jobs</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question0" value="B" /><span
                        >james gosling</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question0" value="C" /><span
                        >Dennis Ritchie</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question0" value="D" /><span
                        >Rasmus Lerdof</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 2) What is the result of logical or relational expression in C?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question1" value="A" /><span
                        >True or False</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="B" /><span
                        >0 or 1</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="C" /><span
                        >correct</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="D" /><span
                        >Wrong</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 3) what is the example of iteration in C?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question2" value="A" /><span
                        >for</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question2" value="B" /><span
                        >while</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question2" value="C" /><span
                        >do while</span
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
        <h4> 4) The pre-processors are specified with _____ symbol?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question3" value="A" /><span
                        >#</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question3" value="B" /><span
                        >$</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question3" value="C" /><span
                        >""</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question3" value="D" /><span
                        >&</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 5) scanf() is a predefined function in _________header file?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question4" value="A" /><span
                        >stdlib.h</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question4" value="B" /><span
                        >ctype.h</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question4" value="C" /><span
                        >stdio.h</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question4" value="D" /><span
                        >stdarg.h</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 6) (++i)++ gives the _________ output in the case when i=3?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question5" value="A" /><span
                        >3</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question5" value="B" /><span
                        >4</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question5" value="C" /><span
                        >5</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question5" value="D" /><span
                        >compile line error</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 7) which of the following is not a keyword in C?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question6" value="A" /><span
                        >while</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question6" value="B" /><span
                        >static</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question6" value="C" /><span
                        >for</span
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
        <h4> 8) In which year was C language developed?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question7" value="A" /><span
                        >1962</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question7" value="B" /><span
                        >1978</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question7" value="C" /><span
                        >1979</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question7" value="D" /><span
                        >1972</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 9) C is a _____________.</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question8" value="A" /><span
                        > Low level programming language</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question8" value="B" /><span
                        >high level programming language</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question8" value="C" /><span
                        >medium level programming language</span
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
        <h4> 10) how many keywords are there in c language?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question9" value="A" /><span
                        >32</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question9" value="B" /><span
                        >33</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question9" value="C" /><span
                        >84</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question9" value="D" /><span
                        >19</span
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