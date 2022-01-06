// 07-classes/03-inheritance/script.js - 7.3: inheritance


(() => {
    class Animal {
        sayHello() {
            return `${this.constructor.greeting}! I'm ${this.name}!`;
        }
    }
    // your code here
    class Cat extends Animal {
        constructor(name, greeting) {
            super()
            this.name = name;
        }
        static greeting = "miaouw";

    }
    class Dog extends Animal {
        constructor(name, greeting) {
            super()
            this.name = name;
        }
        static greeting = "wouf";
    }

    document.getElementById("run").addEventListener("click", () => {
        let chat = new Cat("Tartine");
        let chien = new Dog("Canabis");

        console.log(chat.sayHello());
        console.log(chien.sayHello());

    })



})();
