var mobile={
    model: "M1001",
    brand: "OnePlus" ,
    color:"Blue"  ,
    price:42000   ,
    accessories:["charger","earphones","temperedglass"],
    features:{ram:"8GB",processor:"Octa-core"},
    show:function(){
       return "all about mobiles"
    },
}

for(const k in mobile)
{
    var mbl=mobile[k];

    console.log(mbl)

    // if(mbl instanceof Array){
    //     mbl.forEach((val)=>{ console.log(k +" "+val)})
    // }
    
    // else if(typeof(mbl)=="object")
    // {
    //     for(const k in mbl)
    //         {
    //             console.log(mbl[k])
    //         }
                    
    // }
    // else if(typeof(mbl)=="function") 
    // {
    //  console.log( mobile.show());
    // }
    
}

