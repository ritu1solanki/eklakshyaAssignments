var Car={
    name:"Ritz",
    class:"blue"
}
var jsonstring=JSON.stringify(Car);
console.log(jsonstring)
var jsonobj=JSON.parse(jsonstring)
console.log(jsonobj)