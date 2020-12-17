function check(...args){
    args.forEach((ele,index,args)=>{
        if(index==0)
        {
            console.log(ele.toUpperCase())
        }
        else
        {
            console.log(ele);
        }
    });
}
check('h','e','e','t')
