var animal = {

    name: "Tiger",
    set setName(name) {
        this.name = name;
    },
    get getName() {
        return this.name;
    },
    intro: function () {
        document.write("Hi , I am a " + this.name + " <br/>");
    },
    address: {
        street: "Riverton",
        city: "Noob Jungle",
        state: "LA"
    },
    where: function () {
        document.write(this.name + " lives in " + this.address.street + " in a city called " + this.address.city + " <br/>");
    },
    printProperties: function () {
        for (var prop in this) {
            document.write(prop + " : " + this[prop] + " <br/ >");
        }
    },
    isProperty: function (propName) {
        if (this.hasOwnProperty(propName)) {
            document.write(propName + " is a valid property ! <br/>");
            document.write("Value is  " + this[propName] + " <br/>")
        } else {
            document.write("Nope ! invalid shit -> " + propName + " <br />");
        }
    }

};

/*
animal.intro();
animal.where();
animal.printProperties();
animal.isProperty("shit"); 
animal.setName = "Bitch!";
document.write(animal.getName); */

Array.prototype.has = function (element) {

    for (var i = 0; i < this.length; i++) {
        if (this[i] == element) {
            return true;
        }
    }
    return false;
}

Array.prototype.shuffle = function () {
    this.sort(() => Math.random() * 2 - 1);
}

// This one is not working I don't know why / Fuck that shit
Array.prototype.removeFalsyData = function () {
    this.map(Boolean);
    return this;
}


function Coordinates(lat, long) {
    this.lat = lat;
    this.long = long;
}

Object.__defineGetter__.call(Coordinates.prototype, "getCoords", function () {

    return this.lat + " is the latitude. " + this.long + " is longitude <br/>";
});

Object.__defineSetter__.call(Coordinates.prototype, "setCoords", function (coords) {

    var ords = coords.split(", ");
    this.lat = parseInt(ords[0]);
    this.long = parseInt(ords[1]);

});

/*var india = new Coordinates(-32, 89);
india.setCoords = "45, 90";
document.write(india.getCoords);*/



function Point(x, y) {
    this.x = x;
    this.y = y;
}

Object.defineProperty(Point.prototype, "foo", {
    set: function (x) {
        this.x = x;
    },
    get: function () {
        return this.x;
    }

});

/*
var america = new Point(34, 78);
document.write(america.foo + " </ br>");
america.foo = 45;
document.write(america.foo + " </ br>"); */

function Circle(radius) {
    this.r = radius;
}

Circle.prototype = {

    set setRadius(newR) {
        this.r = newR;
    },

    get getRadius() {
        return this.r;
    }

};

/*var watch = new Circle(20);
document.write(watch.getRadius + " <br />");
watch.setRadius = 78;
document.write(watch.getRadius);*/


function Vehicle() {

    this.name = "Vehicle";

    this.toString = function () {
        return "Hi, I am a " + this.name + " ! <br />";
    }
}

function Truck() {
    this.name = "Truck";
}

Truck.prototype = new Vehicle();
Truck.prototype.constructor = Truck;

/*
var honda = new Truck();
document.write(honda.toString());
document.write("Inst check " + (honda instanceof Vehicle) + " <br/ >");*/

function Ecosystem() {
    this.name = "Ecosystem";

    this.toString = function () {
        return "Hi, my name is " + this.name + " ! <br />";
    }
}

function Plant() {
    this.name = "Plant";
}

function Greener() {
    this.name = "Green Plant";
}

// Extended inheritance
Plant.prototype = new Ecosystem();
Greener.prototype = Plant.prototype;

Plant.prototype.constructor = Plant;
Greener.prototype.constructor = Greener;

/*
var mango = new Greener();
document.write(mango.toString()); */

class Gadget {

    constructor(name) {
        this.name = (typeof name == "string") ? name : "Improper Name";
    }

    toString() {
        return "My name is ".concat(this.name)
    }

    static getGadget() {
        return new Gadget("Default name");
    }

}

class Phone extends Gadget {

    constructor(name, owner) {
        super(name);
        this.owner = owner;
    }

    toString() {
        return "My name is " + this.name + " , owned by " + this.owner;
    }
}

/*
var mobile = new Gadget("Smart Phone");
document.write(mobile.toString() + " <br/>");
document.write(Gadget.getGadget().toString() + " <br/ >"); 

var alex = new Phone("Smart Phone", "Tilak Maddy");
document.write(alex.toString() + " <br/>"); */

// Singleton pattern (Only one instance can be created)

function Fish(name) {

    if (typeof Fish.instance === 'object') {
        return Fish.instance;
    }

    this.name = name;
    Fish.instance = this;
    return this;

}

/*
var tuna = new Fish ("Tuna ");
document.write(tuna.name + " <br/ >"); 

var mongo = new Fish("Mongo ");
document.write(mongo.name + " <br/ >"); */

// factory pattern - diff paterns on diff requests

function Bow(name) {
    this.type = "Bow";
    this.style = name.style || "Loose Bow";
    this.metal = name.metal || "Brass";
}

function Sword(name) {
    this.type = "Sword";
    this.style = name.style || "Loose Bow";
    this.metal = name.metal || "Brass";
}

Object.__defineGetter__.call(Sword.prototype, "getInfo", function () {
    return this.type + " has a " + this.style + " style crafted in " + this.metal;
});

function WeaponFactory() {}

WeaponFactory.prototype.makeWeapon = function (type, name) {
    var weaponClass = null;
    if (type === "Sword") {
        weaponClass = Sword;
    } else if (type === "Bow") {
        weaponClass = Bow;
    } else {
        return false;
    }
    return new weaponClass(name);
}


var freeman = new WeaponFactory().makeWeapon("Sword", {
    style: "Giant Sword",
    metal: "Iron"
});

/*
document.write(freeman.getInfo + " <br/>");

document.write("Am a type of " + freeman.type + " with a style of "+ freeman.style + " crafted in " + freeman.metal + " <br />");*/

// Observable pattern , more like a pub sub
var Observable = function () {
    this.subscribers = [];
}

Observable.prototype = {

    subscribe: function (subscriber) {
        this.subscribers.push(subscriber);
    },

    unsubscribe: function (unsubscriber) {
        for (i = 0; i < this.subscribers.length; i++) {
            if (this.subscribers[i] == unsubscriber) {
                this.subscribers.splice(i, 1);
                return unsubscriber.name;
            }
        }
    },

    publish: function (data) {
        for (i = 0; i < this.subscribers.length; i++) {
            this.subscribers[i].receiveData(data);
        }
    }

};


/*
 * I still have to complete the above called which is a pub-sub
 */


function destroyer(arr) {

    var all = Array.from(arguments);
    var main = all[0];

    for (i = 1; i < all.length; i++) {
        main = main.filter((val) => val !== all[i])
    }

    return main;
}

// destroyer([1, 2, 3, 1, 2, 3], 2, 3);

/* Revealing module pattern */


var myGradesCalculate = (function () {

    // Keep this variable private inside this closure scope
    var myGrades = [93, 95, 88, 0, 55, 91];

    var average = function () {
        var total = myGrades.reduce(function (accumulator, item) {
            return accumulator + item;
        }, 0);

        return 'Your average grade is ' + total / myGrades.length + '.';
    };

    var failing = function () {
        var failingGrades = myGrades.filter(function (item) {
            return item < 70;
        });

        return 'You failed ' + failingGrades.length + ' times.';
    };

    // Explicitly reveal public pointers to the private functions 
    // that we want to reveal publicly API

    return {
        average: average,
        failing: failing
    }
})();







