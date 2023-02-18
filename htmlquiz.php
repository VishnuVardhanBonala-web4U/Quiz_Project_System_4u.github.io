
<?php
include "connect.php";
?><!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="htmlquIz.css">
    <script>
        var answers = ["A","A","A","B","A","A","A","A","B","B"],
    tot = answers.length;
    var temp;
function getCheckedValue(radioName) {
    var radios = document.getElementsByName(radioName);
    for (var y = 0; y < radios.length; y++)
        if (radios[y].checked) return radios[y].value;
}
function getScore() {
    var score = 0;
    for (var i = 0; i < tot; i++)
        if (getCheckedValue("question" + i) === answers[i]) score += 1;
        temp=score
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
    <hr><marquee scrollamount="15%"><h1><u>welcome to  HTML language Quiz<u></h1></marquee><hr>

    <ul class="quiz">
    <li>
        <h4> 1) What are the elements without element content and an end tag called?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question0" value="A" /><span
                        >empty</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question0" value="B" /><span
                        >inline</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question0" value="C" /><span
                        >block line</span
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
        <h4> 2) character used in closing tag?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question1" value="A" /><span
                        >/</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="B" /><span
                        >\</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="C" /><span
                        >''</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="D" /><span
                        >""</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 3) Yes or no?it is allowed to write multiple line of comments in HTML?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question2" value="A" /><span
                        >Yes</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question2" value="B" /><span
                        >no</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question2" value="C" /><span
                        >not specific</span
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
        <h4> 4) True or false?the h6 element is the biggest heading?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question3" value="A" /><span
                        >true</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question3" value="B" /><span
                        >false</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question3" value="C" /><span
                        >both</span
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
        <h4>  5) _______________ element defines a line break?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question4" value="A" /><span
                        >br</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question4" value="B" /><span
                        >p</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question4" value="C" /><span
                        >u</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question4" value="D" /><span
                        >none</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 6) which of the following strikes through the text?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question5" value="A" /><span
                        >s</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question5" value="B" /><span
                        >p</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question5" value="C" /><span
                        >mark</span
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
        <h4> 7) current version of html?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question6" value="A" /><span
                        >5</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question6" value="B" /><span
                        >4</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question6" value="C" /><span
                        >3</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question6" value="D" /><span
                        >2</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 8) which of the following defines an unordered list?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question7" value="A" /><span
                        >ul</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question7" value="B" /><span
                        >ol</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question7" value="C" /><span
                        >p</span
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
        <h4> 9) which of the following defines a list item?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question8" value="A" /><span
                        >t</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question8" value="B" /><span
                        >li</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question8" value="C" /><span
                        >p</span
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
        <h4> 10)True or false?lists represents data in a tabular form?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question9" value="A" /><span
                        >true</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question9" value="B" /><span
                        >false</span
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