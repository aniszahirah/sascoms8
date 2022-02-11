
/* Collapsible sidebar */
let btn = document.querySelector('#btn');
let sidebar = document.querySelector('.sidebar');
let navbar = document.querySelector('.navbar');
let content = document.querySelector('.content');
let footer = document.querySelector('footer');

btn.onclick = function (){
  sidebar.classList.toggle("active");
  navbar.classList.toggle("active");
  content.classList.toggle("active");
  footer.classList.toggle("active");
}

/* Auto updated footer year */
var d = new Date();
var year = d.getFullYear();

document.getElementById("copy-year").innerHTML = year;

