var Stud1={
    name:"Ritu",
    rollno:"44",
    marks:200
}

var Stud2={
    name:"Binita",
    rollno:"23",
    marks:100
}

var showTotal=function(){

   
    
    
    console.log('rollno: ',this.rollno,'name: ',this.name,'has scored',this.marks,'having hobbies: ');
    

}
var hobbies=function(...args)
   {
       args.forEach(Element=>{
        console.log(Element)
    })
   }



 showTotal.call(Stud1)
 showTotal.call(Stud2)
 hobbies.apply(Stud1,["Drawing","Singing"])
 hobbies.apply(Stud2,["Painting","Driving"])
 




