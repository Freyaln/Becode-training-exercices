// 07-classes/01-instances/script.js - 7.1: instances


(() => {
    class Cat {
        constructor(name, age) {
            this.name = name;
            this.age = age;
        }
    }
    // your code here
    document.getElementById("run").addEventListener("click", () => {
        console.log(this.name = "Skitty", this.age = 9 + " years ", this.name = "Pixel", this.age = 6 + " years")
    })
})();
