// 09-misc/04-worst-ui-two/script.js - 9.4: worst user interface (2) : phone clicker


(() => {

    // your code here
    let btn1 = document.getElementById("part-one");
    let btn1Min = btn1.dataset.min;
    let btn1MinInt = parseInt(btn1Min);
    let btn1Max = btn1.dataset.max;
    let btn1MaxInt = parseInt(btn1Max);
    let btn1Val = btn1.textContent;
    let btn1ValInt = parseInt(btn1Val);

    let btn2 = document.getElementById("part-two");
    let btn2Min = btn2.dataset.min;
    let btn2MinInt = parseInt(btn2Min);
    let btn2Max = btn2.dataset.max;
    let btn2MaxInt = parseInt(btn2Max);
    let btn2Val = btn2.textContent;
    let btn2ValInt = parseInt(btn2Val);

    let btn3 = document.getElementById("part-three");
    let btn3Min = btn3.dataset.min;
    let btn3MinInt = parseInt(btn3Min);
    let btn3Max = btn3.dataset.max;
    let btn3MaxInt = parseInt(btn3Max);
    let btn3Val = btn3.textContent;
    let btn3ValInt = parseInt(btn3Val);

    let btn4 = document.getElementById("part-four");
    let btn4Min = btn4.dataset.min;
    let btn4MinInt = parseInt(btn4Min);
    let btn4Max = btn4.dataset.max;
    let btn4MaxInt = parseInt(btn4Max);
    let btn4Val = btn4.textContent;
    let btn4ValInt = parseInt(btn4Val);
    let num = document.getElementById("target");

    btn1.addEventListener("click", () => {
        if (btn1ValInt == btn1MaxInt) {
            btn1ValInt = btn1MinInt;
        }
        else {
            btn1ValInt++;
        }
        btn1Val = btn1ValInt.toString();
        num.innerHTML = "0" + btn1Val;

    });

    btn2.addEventListener("click", () => {
        if (btn2ValInt == btn2MaxInt) {
            btn2ValInt = btn2MinInt;
        }
        else {
            btn2ValInt++;
        }
        btn2Val = btn2ValInt.toString();
        num.innerHTML = "0" + btn1Val + btn2Val;

    });

    btn3.addEventListener("click", () => {
        if (btn3ValInt == btn3MaxInt) {
            btn3ValInt = btn3MinInt;
        }
        else {
            btn3ValInt++;
        }

        btn3Val = btn3ValInt.toString();
        num.innerHTML = "0" + btn1Val + btn2Val + btn3Val;

    });

    btn4.addEventListener("click", () => {
        if (btn4ValInt == btn4MaxInt) {
            btn4ValInt = btn4MinInt;
        }
        else {
            btn4ValInt++;
        }
        btn4Val = btn4ValInt.toString();
        num.innerHTML = "0" + btn1Val + btn2Val + btn3Val + btn4Val;

    });
})();
