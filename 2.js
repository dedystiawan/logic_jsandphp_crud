function transposeMatriks(inputArray){
	var outputArray = [];
	for (var i = 0; i < inputArray[0].length; i++) {
		outputArray.push([]);
		for (var j = 0; j < inputArray.length; j++) {
			outputArray[i].push(inputArray[j][i]);
		}
		console.log(outputArray);
	};
}

var inputArray = [
	["1","2","3"],
	["1","2","3"],
	["1","2","3"]
];

transposeMatriks(inputArray);