 const search =() =>{
    const searchbox = document.getElementById("search-movie").value.toUpperCase();
    const storeitems = document.getElementById("movies-list")
    const movies = document.querySelectorAll(".card")
    const mname = document.getElementsByTagName("p")
}
for (var i = 0; i < mname.length; i++) {
   let match = movies[i].getElementsByTagName(p)[0];

   if(match){
  let textvalue = match.textContent || match.innerHtml 

   if(textvalue.toUpperCase().indexOf(searchbpx) > -1){
    movies[i].style.display = "";
   }else{
    movies[i].style.display = "none"; 
   }
   }
    
}