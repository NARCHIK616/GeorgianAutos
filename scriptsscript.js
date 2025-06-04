// Обработка формы
document.getElementById('contact-form').addEventListener('submit', function (e) {
  e.preventDefault();
  alert('Спасибо за ваше сообщение! Мы свяжемся с вами в ближайшее время.');
  document.getElementById('contact-form').reset();
});