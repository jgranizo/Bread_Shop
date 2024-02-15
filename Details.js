/*<!--
    Jeremy Granizo
    IT202 section 003
    Unit 11 assignment: Bread Shop
    jag254@njit.edu
-->*/ 
$(document).ready( ()=>{
    $("#image_rollovers img").each((index,img)=>{
    $(img).mouseover( function(){
        const src =$(this).attr('src');//gets src string
        const new_src=src.replace("-blurred.jpeg",//replaces certain part of string with other
        ".jpeg");
        $(this).attr('src',new_src);
    });
    $(img).mouseout(function(){
        const src=$(this).attr('src');
        const new_src=src.replace(".jpeg","-blurred.jpeg");
        $(this).attr('src',new_src);
        
    });
    });
    } );