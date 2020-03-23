window.onload = function () {

  const btn = document.querySelector("input[type='button']"),
	     name = document.querySelector('#name'),
	 	  age = document.querySelector('#age'),
	 	  res = document.querySelector('.res');

  btn.onclick = function () {
    fetch(`backend/access.php?name=${name.value}&age=${age.value}`,{
      method: 'GET',
	 })
		.then(response => response.json())
		.then(data => res.innerHTML = data);
	 name.value = '';
	 age.value = '';
  };
};