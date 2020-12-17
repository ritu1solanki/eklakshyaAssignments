var Employee=function(name,city)
{

}

var Manager=function(name,city,salary){
    Employee.call(this,name,city){
        this.salary=salary;
    }
}