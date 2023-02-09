let form = document.querySelector('.form');
let items = document.querySelectorAll('.form .check');

form.addEventListener('submit', function(e){
   let hasError = false;
   for (let i=0; i < items.length; i++){
      if (items[i].value.length === 0) {
         items[i].classList.add('err');
         hasError = true;
      }
   }
   if (hasError){
      alert('Заполните все поля');
      e.preventDefault();
   }
});
form.addEventListener('focusin', function(e){
   if(e.target.classList.contains('check')){
      e.target.classList.remove('err');
   }
});