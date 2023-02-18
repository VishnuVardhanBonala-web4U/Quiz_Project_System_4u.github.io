<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="dbms.css">
    <script>
        var answers = ["B","D","B","D","C","D","D","C","B","D"],
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
    <hr><marquee scrollamount="15%"><h1><u>welcome to  DBMS Quiz<u></h1></marquee><hr>

    <ul class="quiz">
    <li>
        <h4> 1) What is the full form of DBMS?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question0" value="A" required /><span
                        >data of binary management system</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question0" value="B" /><span
                        >database management system</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question0" value="C" /><span
                        >database management service</span
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
        <h4>  2) what is a DBMS?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question1" value="A" /><span
                        >collection of queries</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="B" /><span
                        >high level language</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="C" /><span
                        >programming language</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="D" /><span
                        >stores data,modifies and retrieves data</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 3) who created the first DBMS?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question2" value="A" /><span
                        >Frank Codd</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question2" value="B" /><span
                        >Bachman</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question2" value="C" /><span
                        >Babbage</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question2" value="D" /><span
                        >Sharon B codd</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 4) which type of data can be stored in database?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question3" value="A" /><span
                        >images</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question3" value="B" /><span
                        >text</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question3" value="C" /><span
                        >audio or video</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question3" value="D" /><span
                        >all of the above</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 5) in which of the following format data is stored in database?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question4" value="A" /><span
                        >image</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question4" value="B" /><span
                        >text</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question4" value="C" /><span
                        >table</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question4" value="D" /><span
                        >graph</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 6) which of the following is not a type of database?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question5" value="A" /><span
                        >hierarchial</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question5" value="B" /><span
                        >network</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question5" value="C" /><span
                        >distributed</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question5" value="D" /><span
                        >decentralised</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 7) which of the following is not the example of the DBMS?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question6" value="A" /><span
                        >MySQL</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question6" value="B" /><span
                        >microsoft acess</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question6" value="C" /><span
                        >IBM DB2</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question6" value="D" /><span
                        >google</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4> 8) not a feature of DBMS?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question7" value="A" /><span
                        >minimum duplication and redundancy of data</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question7" value="B" /><span
                        >high level of security</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question7" value="C" /><span
                        >single user acess</span
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
        <h4> 9) feature of DBMS?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question8" value="A" /><span
                        >no backup for data</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question8" value="B" /><span
                        >user interface provided</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question8" value="C" /><span
                        >lack of authentication</span
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
        <h4> 10) not a function of DBMS?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question9" value="A" /><span
                        >managing data</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question9" value="B" /><span
                        >manipulating data</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question9" value="C" /><span
                        >security</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question9" value="D" /><span
                        >analysing code</span
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