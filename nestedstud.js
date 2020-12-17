var showTotalMarks= function(...marks){
    
    this.marks=marks;
 
    return function(){
        console.log("marks",this.marks);
        var sum=0
        var count=0
        this.marks.forEach(element => {
            sum+=element;
            count++;
        });
        return (sum/count);
    }();
}
        


    

console.log(showTotalMarks(100,200,300));