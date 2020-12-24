var modal = document.querySelector('.login-modal');
var regModal = document.querySelector('.reg-modal');

var userButton = document.querySelector('.user-btn');
var reg = document.querySelector('.reg-btn');

var close = document.querySelector('.m-close');
var regClose = document.querySelector('.reg-m__close');


	
userButton.onclick = function() {
  modal.classList.add('login-modal--active');
};

close.onclick = function() {
  modal.classList.remove('login-modal--active');
};

reg.onclick = function() {
  regModal.classList.add('reg-modal--active');
  return false;
};

regClose.onclick = function() {
  regModal.classList.remove('reg-modal--active');
};

