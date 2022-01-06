// variables

let start = document.getElementById("start");
let overlap = document.getElementById("overlap");
let endGame = document.getElementById("endGame");
let restart = document.getElementById("restart");
let c = document.getElementById("canvas");
let score = document.getElementById("score");
let lifes = document.getElementById("life");
let scores = 0;
let ctx = c.getContext("2d");
let inGame = false;
let id = 0;
let lifeLeft = 5;

//Object classes
class RectPlayer {
    constructor(speed) {
        this.w = 40;
        this.h = 20;
        this.x = 230;
        this.y = 450;
        this.speed = speed;
        this.angle = 0;
    }

    draw() {
        ctx.fillStyle = "red";
        ctx.fillRect(this.x, this.y, this.w, this.h);
    }
}

class RectAi {
    constructor(speed, color, id) {
        this.w = 40;
        this.h = 20;
        this.x = Math.floor(Math.random() * 460);
        this.y = 0;
        this.color = color;
        this.speed = speed;
        this.angle = 0;
        this.id = id;
    }

    draw() {
        ctx.fillStyle = this.color;
        ctx.fillRect(this.x, this.y, this.w, this.h);
    }

    move() {
        this.draw();
        this.y += this.speed * Math.cos(this.angle);
    }

    killed() {
        this.id = 20;
    }
}

class Weaponry {
    constructor(speed, color) {
        this.w = 5;
        this.h = 5;
        this.x = player.x + player.w / 2;
        this.y = 420;
        this.speed = speed;
        this.color = color;
        this.angle = 0;
    }

    draw() {
        ctx.fillStyle = this.color;
        ctx.fillRect(this.x, this.y, this.w, this.h);
    }

    move() {
        this.draw();
        this.y -= this.speed * Math.cos(this.angle);
    }
}

// Variables modifying the blocks
const player = new RectPlayer();
const bullets = [];
const ais = [];
const intervalEnnemy = setInterval(createEnnemy, 2000);
const colors = ["purple", "blue", "pink", "yellow", "green", "lightgrey", "lightblue"]

// drawing ennemies and modifying their speed base on their colors
function createEnnemy() {

    const color = colors[Math.floor(Math.random() * colors.length)];
    let speed = 0.2;
    switch (color) {
        case ("purple"):
            speed = 0.4;

            break;
        case ("blue"):
            speed = 0.5;
            break;

        case ("pink"):
            speed = 0.6;
            break;
        case ("yellow"):
            speed = 0.7;

        case ("green"):
            speed = 0.8;
            break;
        case ("lightgrey"):
            speed = 0.9;
            break;
        case ("lightblue"):
            speed = 1;
            break;
    }
    ais.push(new RectAi(speed, color, id));
    id++
};


// Shoot ?
function shoot() {
    const color = "white";
    const speed = 2;
    bullets.push(new Weaponry(speed, color))
}


// Start the game and refresh screen
function startGame() {
    if (inGame === true) {
        requestAnimationFrame(startGame);
        ctx.clearRect(0, 0, c.width, c.height)
        player.draw();
        bullets.forEach((Weaponry) => {
            Weaponry.move();
        })
        ais.forEach((RectAi, id) => {
            RectAi.move();
            for (let i = 0; i < bullets.length; i++) {
                for (let j = 0; j < ais.length; j++) {
                    if (bullets[i].x < ais[j].x + ais[j].w && bullets[i].x + bullets[i].w > ais[j].x && bullets[i].y < ais[j].y + ais[j].h && bullets[i].y + bullets[i].w > ais[j].y) {
                        const remBullet = bullets.findIndex(i => i.id);
                        bullets.splice(remBullet, 1);
                        ais.splice(id, 1)
                        scores += 100;
                        score.innerHTML = "Score " + scores;

                    }
                }
            }
            for (let j = 0; j < ais.length; j++) {
                if (ais[j].y > c.width) {
                    ais.splice(id, 1)
                    lifeLeft--
                    lifes.innerHTML = "Life : " + lifeLeft
                }
            }
        })
        if (lifeLeft === 0) {
            endGame.style.display = "flex";
            inGame = false;
        }
    }
};

//stop the game and re-display the start button
restart.addEventListener("click", () => {
    location.reload();
})

// listeners 
start.addEventListener("click", () => {
    overlap.style.display = "none";
    inGame = true;
    startGame();
});

window.addEventListener("keydown", (event) => {
    if (event.defaultPrevented) {
        return;
    }

    switch (event.key) {

        case ("Left"): // IE+Edge
        case ("ArrowLeft"):
            if (player.x > 5) {
                player.x -= 7.5;
            }
            /*  if (scores > 2000) {
                 player.x -= 10;
             } */
            break;

        case ("Right"): //IE+Edge
        case ("ArrowRight"):
            if (player.x < 455) {
                player.x += 7.5;
            }
            /* if (scores > 2000) {
                player.x = 10;
            } */
            break;

        case (" "):
            shoot();
            break;
    }
});
startGame();
createEnnemy();