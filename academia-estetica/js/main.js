const btnToggle = document.querySelector('.main');

btnToggle.addEventListener('click', function () {
  console.log('clik')
  document.getElementById('esti').classList.toggle('active');
  console.log(document.getElementById('esti'))
});