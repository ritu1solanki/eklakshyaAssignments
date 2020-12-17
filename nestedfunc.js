var showProduct= function(name, brand,cost){
    this.name=name;
    this.brand=brand;
    this.cost=cost
    console.log("Product name",this.name);
    console.log("Product Brand",this.brand);
    return function(discount){
        this.discount=discount;
        console.log("Discounted Price",this.cost-this.discount)

    }
}
showProduct("TV", "Sony",90000)(5000);