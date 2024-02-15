/*
Jeremy Granizo
IT202 section 003
Unit 11 assignment: Bread Shop
jag254@njit.edu
-->*/
$(document).ready(() =>{

    $("#create_form").submit( event =>{
        let isValid= true;
        const bread_code=$("#breadCode").val();
       
       
        if(bread_code ==""){
            $("#breadCode").next().text("This field is required.");
            isValid=false;
        }
        else if(bread_code.length<4){
            $("#breadCode").next().text("Bread Code must have a minimum of 4 characters");
            isValid=false;
        }
        else if(bread_code.length>10){
            $("#breadCode").next().text("Bread Code must have a maximum of 10 characters");
            isValid=false;
        }
        else{
            $("#breadCode").next().text("");
        }
       
        
    

        const bread_name = $("#breadName").val();
        if(bread_name == ""){
            $("#breadName").next().text("This field is required");
            isValid=false;
        }
        else if(bread_name.length< 10){
            $("#breadName").next().text("Bread Name must have a minimum of 10 characters");
            isValid=false;
        }
        else if(bread_name.length> 100){
            $("#breadName").next().text("Bread Name must have a maximum of 100 characters");
            isValid=false;
        }
        else{
            $("#breadName").next().text("");
        }






        const bread_description=$("#breadDescription").val();
        if(bread_description == ""){
            $("#breadDescription").next().text("This field is required");
            isValid=false;
        }
        else if(bread_description.length< 10){
            $("#breadDescription").next().text("Bread description must have a minimum of 10 characters");
            isValid=false;
        }
        else if(bread_description.length> 255){
            $("#breadDescription").next().text("Bread description must have a maximum of 255 characters");
            isValid=false;
        }
        else{
            $("#breadDescription").next().text("");
        }





        const bread_Price = $("#breadPrice").val();
       
        const bread_price=parseFloat(bread_Price);
        if(bread_Price == ""){
            $("#breadPrice").next().text("This field is required");
            isValid=false
        }
        else{
        if(bread_price<=0){
            $("#breadPrice").next().text("Bread price must higher than 0");
            isValid=false;
        }
        else if(bread_price>100000){
            $("#breadPrice").next().text("Bread price must lower than $100,000");
            isValid=false;
        }

        else if(isNaN(bread_price)){
            $("#breadPrice").next().text("Bread price must be a valid number");
            isValid=false;
        }
        else{
            $("#breadPrice").next().text("");
            const bread_price=parseFloat(bread_Price);
        }}

        const bread_category=$("#categoryID").val();
        console.log("bread category="+bread_category);
        if(bread_category=="0"){
            $("#categoryID").next().text("Must pick a category.");
            isValid=false;
        }
        else{
            $("#categoryID").next().text("");
        }

        if(isValid==false){
            event.preventDefault();
            
        }

       

    });
    $("#reset_button").click(()=>{
        $("#breadCode").val("");
        $("#breadName").val("");
        $("#breadDescription").val("");
        $("#breadPrice").val("");
    }
    )
});