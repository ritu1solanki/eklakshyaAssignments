var Products=function(name,price)
{
    this.name=name;
    this.price=price;
    this.details=function()
    {
        console.log(this.name,this.price)
    }

}
var products = new Products("Lays",10)
products.details()

products.name;


Products.prototype.brand="Pepsico"
Products.prototype.discountedprice=function(discount){
    this.discount=discount;
    console.log("new price is" ,(this.price-this.discount))


}
products.discountedprice(5)

