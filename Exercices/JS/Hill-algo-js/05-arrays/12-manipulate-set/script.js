// 05-arrays/12-manipulate-set/script.js - 5.12: manipulation of a Set


(() => {
    const fruits = new Set([
        "apple",
        "pear",
        "strawberry",
        "tomato",
        "orange",
        "mandarin",
        "durian",
        "peach",
        "grape",
        "cherry",
    ]);

    // your code here

    let delFruits = new Set(["apple", "cherry"]);
    document.getElementById("run").addEventListener("click", () => {
        function deleteFruits(a, b) {
            [...b].forEach(function (c) {
                a.delete(c);
            });
        }
        fruits.add("banana");
        fruits.add("kiwi");
        console.log([...fruits]);
        deleteFruits(fruits, delFruits);
        console.log([...fruits]);
    })
})();
