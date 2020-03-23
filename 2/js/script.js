window.onload = function () {

	let arr = [3, 7, 5, 12, 15, 67, 90, 99, 54, 123, 43, 56, 234, 546, 12, 0, 23, 53, 73, 21, 121];

	function sort(arr) {
		for (let i = 0; i < arr.length; i++) {
			for (let j = 0; j < arr.length; j++) {
				if (arr[j] > arr[i]) {
					let temp = arr[j];
					arr[j] = arr[i];
					arr[i] = temp;
				}
			}
		}
		return arr;
	}
	console.log(sort(arr));
};