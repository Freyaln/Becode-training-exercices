// 07-classes/04-getter-setter/script.js - 7.4: getter & setter


(() => {
    // your code here
    class Person {
        constructor(firstname, lastname) {
            this.firstname = firstname;
            this.lastname = lastname;
        };
        get name() {
            return this.firstname + this.lastname;
        };

        set name(newName) {
            this.firstname = newName;
            this.lastname = newName;
        };
    };

    document.getElementById("run").addEventListener("click", () => {

        let myself = new Person("Aurélien", "Freyling");
        console.log(myself.name);
        Person.newName = "Bundin Ironfist";
        console.log(Person.newName);
    })

})();
