function segitiga_pascal(input) {
	var x = new Array();
	for (var i = 1; i <= input; i++) {
		x[i] = new Array();
		for (var j = 1; j <= i; j++) {
			if (j==1 || j==i) {
				x[i][j]=1;
			} else {
				x[i][j] = x[i-1][j-1]+x[i-1][j];
			}
		}
	}

	for (var i = 1; i <= input; i++) {
		for (var j = 1; j <= i; j++) {
			console.log(x[i][j]+ " ");
		}
			console.log('\n');
	}
}

segitiga_pascal(4);