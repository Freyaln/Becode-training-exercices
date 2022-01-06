let selectElementsStartingWithA = (array) => {
    let startA = [];
    for (let elem of array) {
        if (elem[0] === "a") {
            startA.push(elem);
        }
    }
    return startA;
}

let selectElementsStartingWithVowel = (array) => {
    let startVowels = [];
    for (let elem of array) {
        if (elem[0] === "a" || elem[0] === "e" || elem[0] === "i" || elem[0] === "o" || elem[0] === "u" || elem[0] === "y") {
            startVowels.push(elem);
        }
    }
    return startVowels;
}

let removeNullElements = (array) => {
    let nulls = null;
    array = array.filter(function (item) {
        return item !== nulls
    })
    return array
}

let removeNullAndFalseElements = (array) => {
    let nulls = null;
    let falses = false;
    array = array.filter(function (item) {
        return item !== nulls && item !== falses
    })
    return array
}

let reverseWordsInArray = (array) => {
    let arrStr = [];
    for (let i of array) {
        arrStr.push(i.split("").reverse().join(""))
    }
    return arrStr
}


let everyPossiblePair = (array) => {
    let pairs = [];
    array.sort();
    for (let i = 0; i < array.length - 1; i++) {
        for (let j = i + 1; j < array.length; j++) {
            if (i !== j) {
                pairs.push([array[i], array[j]]);
            }
        }
    }
    return pairs;
}

let allElementsExceptFirstThree = (array) => {
    let arr = array.slice(3,)
    return arr;
}

let addElementToBeginning = (array, element) => {
    array.unshift(element)
    return array
}

let sortByLastLetter = (array) => {
    array.sort((a, b) => {
        return a.charCodeAt(a.length - 1) - b.charCodeAt(b.length - 1)
    })
    return array
}

let getFirstHalf = (string) => {
    let half = Math.ceil(string.length / 2)
    return string.substring(0, half)
}

let makeNegative = (number) => {
    negNum = -Math.abs(number)
    return negNum;
}

let numberOfPalindromes = (array) => {
    let palCount = 0;
    array.forEach(el => {
        let toStr = el.split("");
        let isPalindrome = toStr.reverse().join("");
        if (el === isPalindrome) {
            palCount++;
        }
    })
    return palCount;
}


let shortestWord = (array) => {
    for (let i in array) {
        for (let j in array) {
            if (array[i].length < array[j].length) {
                return array[i]

            }
        }
    }
}

let longestWord = (array) => {
    for (let i in array) {
        for (let j in array) {
            if (array[i].length > array[j].length) {
                return array[i]

            }
        }
    }
}

let sumNumbers = (array) => {
    let sum = array.reduce((a, b) =>
        a + b, 0
    )
    return sum
}

let repeatElements = (array) => {
    let arr = []
    for (let el of array) {
        arr.push(el)
    }
    for (let el of arr) {
        array.push(el)
    }
    return array
}

let stringToNumber = (string) => {
    let int = parseInt(string, 10)
    return int;
}

let calculateAverage = (array) => {
    let sum = array.reduce((a, b) => a + b, 0)
    let average = sum / array.length
    return average
}

let getElementsUntilGreaterThanFive = (array) => {
    let tillFive = []
    for (let i = 0; i < 6; i++) {
        tillFive.push(array[i])
    }
    return tillFive
}

let convertArrayToObject = (array) => {
    let obj = [];
    while (array.length > 0) {
        obj.push(array.splice(0, 2));
    }
    return Object.fromEntries(obj);
}

let getAllLetters = (array) => {
    let letters = []
    for (let elem of array) {
        for (let j in elem) {
            letters.push(elem[j])
        }
    }
    let sorted = letters.sort()
    let bin = [...new Set(sorted)]
    return bin
}

// Thanks to https://stackoverflow.com/questions/23013573/swap-key-with-value-in-object, would never have found otherwise.

let swapKeysAndValues = (object) => {
    let objSwap = Object.assign({}, ...Object.entries(object).map(([a, b]) => ({ [b]: a })))
    return objSwap
}

let sumKeysAndValues = (object) => {
    let sum = 0;
    Object.keys(object).forEach(key => {
        sum = sum + Number(object[key]) + Number(key);
    });
    return sum
}

let removeCapitals = (string) => {
    let reg = /[A-Z]/g;
    let remCap = string.replace(reg, "")
    return remCap;
}

let roundUp = (number) => {
    round = Math.ceil(number)
    return round;
}

let formatDateNicely = (date) => {
    return date.toLocaleDateString();
}

let getDomainName = (string) => {
    reg = /.+\@(.+)\./gmi
    let domain = reg.exec(string)[1]
    return domain;
}

let titleize = (string) => {
    //TODO
}

let checkForSpecialCharacters = (string) => {
    reg = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/gm
    if (reg.test(string)) {
        return true
    }
    else {
        return false
    }
}

let squareRoot = (number) => {
    return Math.sqrt(number);
}

let factorial = (number) => {
    function factorial(a) {
        if (a < 0)                      // Using an if .. else if loop, here to refuse any numbers below 0
            return -1

        else if (a === 1)               // if the number is 1, the function return 1
            return 1

        else
            return (a * factorial(a - 1));  // Multiplying the input (a) by the function to run the function (a) times to reach the factorial.
    }
    return factorial(number)
}

let findAnagrams = (string) => {
    //TODO
}

let convertToCelsius = (number) => {
    let celsius = Math.ceil((number - 32) * 5 / 9);
    return celsius;
}

let letterPosition = (array) => {
    let lettersPos = [];
    for (let elem of array) {
        lettersPos.push(elem.toLowerCase().charCodeAt(0) - 96);
    }
    return lettersPos;
}
